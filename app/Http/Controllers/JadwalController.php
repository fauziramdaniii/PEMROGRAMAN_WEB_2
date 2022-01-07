<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('jadwal.index', compact('jadwals'));
    }
    public function create()
    {
        return view('jadwal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'clock_start' => 'required',
            'clock_finish' => 'required',
            'day' => 'required',
            'description' => 'required',
        ]);

        Jadwal::create($request->all());
        return redirect('/jadwal')->with('success', 'Jadwal saved!');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::find($id);
        return view('jadwal.edit', ['jadwal' => $jadwal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $Jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'clock_start' => 'required',
            'clock_finish' => 'required',
            'day' => 'required',
            'description' => 'required',
        ]);

        $jadwal->update($request->all());
        return redirect('/jadwal')->with('success', 'Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $Jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect('/jadwal')->with('success', 'Data Deleted');
    }
}
