<?php

namespace App\Http\Controllers;

use App\Models\StudentsAch;
use Illuminate\Http\Request;

class DashboardStudentsAchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.students-ach.index', [
            'students' => StudentsAch::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.students-ach.create');
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
            'nama_mahasiswa' => 'required|max:255',
            'nama_kegiatan' => 'required|max:255',
            'waktu_penyelenggaraan' => 'required|date',
            'tingkat' => 'required|max:255',
            'prestasi' => 'required|max:255'
        ]);

        StudentsAch::create($validatedData);

        return redirect('/dashboard/students_ach')->with('success', 'New Achievement has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentsAch  $studentsAch
     * @return \Illuminate\Http\Response
     */
    public function show(StudentsAch $studentsAch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentsAch  $studentsAch
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentsAch $studentsAch)
    {
        return view('dashboard.students-ach.edit', [
            'students' => $studentsAch
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentsAch  $studentsAch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentsAch $studentsAch)
    {
        $validatedData = $request->validate([
            'nama_mahasiswa' => 'required|max:255',
            'nama_kegiatan' => 'required|max:255',
            'waktu_penyelenggaraan' => 'required|date',
            'tingkat' => 'required|max:255',
            'prestasi' => 'required|max:255'
        ]);

        StudentsAch::where('id', $studentsAch->id)
            ->update($validatedData);

        return redirect('/dashboard/students_ach')->with('success', 'Students Achievement has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentsAch  $studentsAch
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentsAch $studentsAch)
    {
        StudentsAch::destroy($studentsAch->id);

        return redirect('/dashboard/students_ach')->with('success', 'Students Achievement has been deleted');
    }
}
