<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        return view('index');
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

        return view('birthdays');
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
