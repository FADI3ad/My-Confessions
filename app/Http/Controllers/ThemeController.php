<?php

namespace App\Http\Controllers;

use App\Models\Confession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function addnewserved()
    {
        return view('Servant.create');
    }
    public function allsereved()
    {

        return view('Servant.index');
    }

    public function birthdays()
    {

        $Confessions =  Confession::all();
        foreach ($Confessions as $Confession) {

            dd(($Confession->dateofbirth));
        }

        return view('birthdays',compact('Confessions'));
    }
    public function Latecomers()
    {

        return view('Latecomers');
    }
    public function test(Request $request)
    {
        dd($request->all());
    }
}
