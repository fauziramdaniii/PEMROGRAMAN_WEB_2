<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;

class SewaController extends Controller
{
    public function index()
    {
        $sewas = sewa::all();
        return view('sewa.index', compact('sewas'));
    }
    public function create()
    {
        return view('sewa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'clock_start' => 'required',
            'clock_finish' => 'required',
            'day' => 'required',
            'wa' => 'required',
        ]);

        sewa::create($request->all());
        return redirect('/sewa')->with('success', 'sewa saved!');
    }

    public function edit($id)
    {
        $sewa = sewa::find($id);
        return view('sewa.edit', ['sewa' => $sewa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sewa $sewa)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'clock_start' => 'required',
            'clock_finish' => 'required',
            'day' => 'required',
            'wa' => 'required',
        ]);

        $sewa->update($request->all());
        return redirect('/sewa')->with('success', 'Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(sewa $sewa)
    {
        $sewa->delete();
        return redirect('/sewa')->with('success', 'Data Deleted');
    }
}
