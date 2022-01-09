<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapang;

class LapangController extends Controller
{
    public function index()
    {
        $lapangs = Lapang::all();
        return view('lapang.index', compact('lapangs'));
    }
    public function create()
    {
        return view('lapang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lapang' => 'required',
        ]);

        Lapang::create($request->all());
        return redirect('/lapang')->with('success', 'Lapang saved!');
    }

    public function edit($id)
    {
        $lapang = Lapang::find($id);
        return view('lapang.edit', ['lapang' => $lapang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lapang  $Lapang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lapang $Lapang)
    {
        $request->validate([
            'lapang' => 'required',
            'gambar' => 'required',
        ]);

        $Lapang->update($request->all());
        return redirect('/lapang')->with('success', 'Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lapang  $Lapang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lapang $Lapang)
    {
        $Lapang->delete();
        return redirect('/lapang')->with('success', 'Data Deleted');
    }
}
