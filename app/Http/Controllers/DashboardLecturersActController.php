<?php

namespace App\Http\Controllers;

use App\Models\LecturersAct;
use Illuminate\Http\Request;

class DashboardLecturersActController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return LecturersAct::where('user_id', auth()->user()->id)->get();
        return view('dashboard.lecturers-act.index', [
            'lectacts' => LecturersAct::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.lecturers-act.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'activity' => 'required',
            'organizer' => 'required|max:255'
        ]);

        LecturersAct::create($validatedData);

        return redirect('/dashboard/lecturers_act')->with('success', 'New Activity has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LecturersAct  $lecturersAct
     * @return \Illuminate\Http\Response
     */
    public function show(LecturersAct $lecturersAct)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LecturersAct  $lecturersAct
     * @return \Illuminate\Http\Response
     */
    public function edit(LecturersAct $lecturersAct)
    {
        return view('dashboard.lecturers-act.edit', [
            'lectact' => $lecturersAct
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LecturersAct  $lecturersAct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LecturersAct $lecturersAct)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'activity' => 'required',
            'organizer' => 'required|max:255'
        ]);

        LecturersAct::where('id', $lecturersAct->id)
            ->update($validatedData);

        return redirect('/dashboard/lecturers_act')->with('success', 'Lecturers Activity has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LecturersAct  $lecturersAct
     * @return \Illuminate\Http\Response
     */
    public function destroy(LecturersAct $lecturersAct)
    {
        LecturersAct::destroy($lecturersAct->id);

        return redirect('/dashboard/lecturers_act')->with('success', 'Lecturers Activity has been deleted');
    }
}
