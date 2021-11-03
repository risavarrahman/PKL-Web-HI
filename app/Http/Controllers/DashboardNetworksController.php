<?php

namespace App\Http\Controllers;

use App\Models\Networks;
use Illuminate\Http\Request;

class DashboardNetworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.networks.index', [
            'networks' => Networks::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.networks.create');
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
            'starting_date' => 'required|date',
            'ending_date' => 'required|date',
            'first_party' => 'required|max:255',
            'second_party' => 'required|max:255',
            'status' => 'required',
            'partner_type' => 'required',
            'agreement_type' => 'required'
        ]);

        Networks::create($validatedData);

        return redirect('/dashboard/networks')->with('success', 'New Networks has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Networks  $network
     * @return \Illuminate\Http\Response
     */
    public function show(Networks $network)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Networks  $network
     * @return \Illuminate\Http\Response
     */
    public function edit(Networks $network)
    {
        return view('dashboard.networks.edit', [
            'network' => $network
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Networks  $network
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Networks $network)
    {
        $validatedData = $request->validate([
            'starting_date' => 'required|date',
            'ending_date' => 'required|date',
            'first_party' => 'required|max:255',
            'second_party' => 'required|max:255',
            'status' => 'required',
            'partner_type' => 'required',
            'agreement_type' => 'required'
        ]);

        Networks::where('id', $network->id)
            ->update($validatedData);

        return redirect('/dashboard/networks')->with('success', 'Networks has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Networks  $network
     * @return \Illuminate\Http\Response
     */
    public function destroy(Networks $network)
    {
        Networks::destroy($network->id);

        return redirect('/dashboard/networks')->with('success', 'Networks has been deleted');
    }
}
