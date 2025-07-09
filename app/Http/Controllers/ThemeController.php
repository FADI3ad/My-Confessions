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
        $verses = json_decode(Storage::get('verses.json'), true);
        $dayOfYear = now()->dayOfYear;
        $index = $dayOfYear % count($verses);
        $verse = $verses[$index];
        return view('index', compact('verse'));
    }


    public function birthdays()
    {

       $confessions = Confession::upcomingBirthdays()->get();


        return view('birthdays');
    }

    public function Latecomers()
    {
        $confessions = Confession::latecomers()->get();
        return view('Latecomers');
    }

    public function test(Request $request)
    {
        dd($request->all());
    }
}
