<?php

namespace App\Http\Controllers;

use App\Models\Lapang;
use Illuminate\Http\Request;
use App\Http\Requests\StorelapangRequest;
use App\Http\Requests\UpdatelapangRequest;

class LapangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lapangs = lapang::all();
        return view('lapang.index', ['lapangs' => $lapangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lapang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelapangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        lapang::create($request->all());
        return redirect('/lapang')->with('success', 'lapang Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lapang  $lapang
     * @return \Illuminate\Http\Response
     */
    public function show(lapang $lapang)
    {
        return view('lapang.show', compact('lapang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lapang  $lapang
     * @return \Illuminate\Http\Response
     */
    public function edit(lapang $lapang)
    {
        return view('lapang.edit', ['lapang' => $lapang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelapangRequest  $request
     * @param  \App\Models\lapang  $lapang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lapang $lapang)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $lapang->update($request->all());
        return redirect('/lapang')->with('success', 'lapang Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lapang  $lapang
     * @return \Illuminate\Http\Response
     */
    public function destroy(lapang $lapang)
    {
        $lapang->delete();
        return redirect('/lapang')->with('success', 'lapang deleted');
    }
}
