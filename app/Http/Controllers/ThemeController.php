<?php

namespace App\Http\Controllers;

use App\Models\Confession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Break_;
use Carbon\Carbon;
use function PHPSTORM_META\type;

class ThemeController extends Controller
{
    public function index()
    {
        //verses of the day
        $verses = json_decode(Storage::get('verses.json'), true);
        $dayOfYear = now()->dayOfYear;
        $index = $dayOfYear % count($verses);
        $verse = $verses[$index];



        return view('index', data: compact('verse'));
    }


    public function birthdays()
    {

       $confessions = Confession::upcomingBirthdays()->get();


        return view('birthdays', compact('confessions'));
    }

    public function Latecomers()
    {
        $confessions = Confession::latecomers()->get();
        return view('Latecomers', compact('confessions'));
    }

    public function test(Request $request)
    {
        $query = Confession::query();

        // 1. Search
        if ($request->filled('search')) {
            $query->where('fullname', 'like', '%' . $request->search . '%');
        }

        // 2. Service Type
        if ($request->status && $request->status != 'all') {
            $query->where('service_type', $request->status);
        }

        // 3. Gender
        if ($request->group && $request->group != 'all') {
            $query->where('gender', $request->group);
        }

        // 4. Marital Status
        if ($request->month && $request->month != 'all') {
            $query->where('marital_status', $request->month);
        }

        // 5. Age Range
        if ($request->age_range && $request->age_range != 'all') {
            $query->whereRaw($this->ageRangeCondition($request->age_range));
        }

        // 6. Is Deacon
        if ($request->is_deacon !== null && $request->is_deacon !== 'all') {
            $query->where('is_deacon', $request->is_deacon);
        }

        // Get results
        $confessions = $query->get();

        return view('confession.index', compact('confessions'));

    }
    private function ageRangeCondition($range)
    {
        switch ($range) {
            case 'child':
                return "TIMESTAMPDIFF(YEAR, dob, CURDATE()) < 18";
            case 'young':
                return "TIMESTAMPDIFF(YEAR, dob, CURDATE()) BETWEEN 18 AND 30";
            case 'adult':
                return "TIMESTAMPDIFF(YEAR, dob, CURDATE()) BETWEEN 31 AND 50";
            case 'senior':
                return "TIMESTAMPDIFF(YEAR, dob, CURDATE()) > 50";
            default:
                return '1'; // يعني مفيش شرط
        }
    }

}
