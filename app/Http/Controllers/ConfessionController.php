<?php

namespace App\Http\Controllers;

use App\Models\Confession;
use Illuminate\Http\Request;

class ConfessionController extends Controller
{

    public function store(Request $request) {

        // dd($request->all());
        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'photo' => 'nullable|string|max:255',
        //     'dateofbirth' => 'required|date',
        //     'work' => 'nullable|string|max:255',
        //     'talent' => 'nullable|string|max:255',
        //     'Gender' => 'required|in:male,female',
        //     'Marital_Status' => 'required|in:single,married,divorced,widowed',
        //     'service' => 'required|in:child,Preparatory,Secondary,Youth,Other Services',
        //     'Deacon' => 'nullable|boolean',
        // ]);


        Confession::create([
            'name' => $request->fullname,
            'photo' => $request->photo,
            'dateofbirth' => $request->dob,
            'work' => $request->work,
            'talent' => $request->talents,
            'Gender' => $request->gender,
            'Marital_Status' => $request->status,
            'service' => $request->service,
            'Deacon' => $request->Deacon ?? false,
        ]);

    }



}
