<?php

namespace App\Http\Controllers;

use App\Models\Lapang;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = jadwal::all();
        return view('jadwal.index', ['jadwals' => $jadwals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lapangs = Lapang::pluck('name', 'id');
        return view('jadwal.create', compact('lapangs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'clock_start' => 'required',
            'clock_finish' => 'required',
            'day' => 'required',
            'wa' => 'required',
            'lapang_id' => 'required'

        ]);

        jadwal::create($request->all());
        return redirect('/jadwal')->with('success', 'jadwal Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwal $jadwal)
    {
        $lapangs = lapang::pluck('name', 'id');
        return view('jadwal.edit', ['jadwal' => $jadwal, 'lapangs' => $lapangs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwal $jadwal)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'clock_start' => 'required',
            'clock_finish' => 'required',
            'day' => 'required',
            'wa' => 'required',
            'lapang_id' => 'required'
        ]);

        $jadwal->update($request->all());
        return redirect('/jadwal')->with('success', 'jadwal Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect('/jadwal')->with('success', 'jadwal deleted');
    }
}
