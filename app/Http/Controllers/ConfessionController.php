<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Requests\StoreUserRequest;
use App\Models\Confession;
use Illuminate\Http\Request;

class ConfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $confessions = Confession::all();
        return view('confession.index' , compact('confessions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('confession.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $request->validated();
        $dt = Carbon::create(date('Y-m-d'));
        $data = $request->all();
        $data['lastvisit'] = $dt->toDateTimeString();
        $data['nextvisit'] = $dt->addDays(40)->toDateTimeString();
        if ($request->hasFile('photo')) {
        $path = $request->file('photo')->store('photos', 'public');
        $data['photo'] = $path; // تخزين مسار الصورة في قاعدة البيانات
        }
        Confession::create($data);

        return to_route('confessions.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Confession $confession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Confession $confession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Confession $confession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Confession $confession)
    {
        //
    }
}
