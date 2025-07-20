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
    public function store(Request $request)
    {
        // لو عندك Form Request خاص للتحقق، استخدمه هنا بدل Request

        $dt = Carbon::create(date('Y-m-d'));
        $data = $request->all();
        $data['lastvisit'] = $dt->toDateTimeString();
        $data['nextvisit'] = $dt->addDays(40)->toDateTimeString();

        // تخزين الصورة إن وُجدت
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $data['photo'] = 'uploads/' . $filename; // هنا بنضيف الصورة لقاعدة البيانات
        }

        Confession::create($data);

        return to_route('confessions.index');
    }
    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $confession = Confession::where('slug', $slug)->firstOrFail();
        return view('confession.show', compact('confession'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Confession $confession)
    // {
    //     $confession = Confession::where('slug', $confession->slug)->firstOrFail();
    //     return view('confession.edit', compact('confession'));

    // }

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
    public function destroy($slug)
    {
        $confession = Confession::where('slug', $slug)->firstOrFail();
        $confession->delete();
        return to_route('confessions.index');
    }

}
