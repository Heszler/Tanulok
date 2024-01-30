<?php

namespace App\Http\Controllers;


use App\Models\TanulokModel;
use Illuminate\Http\Request;

class TanulokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $adatok=TanulokModel::all();
        return view('tanuloiadatok')->with('adatok',$adatok);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        TanulokModel::create($input);
        return redirect('tanulok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $adatok=TanulokModel::find($id);
        return view('show')->with('adatok',$adatok);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $adatok=TanulokModel::find($id);
        return view('edit')->with('adatok',$adatok);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {        
        $adatok=TanulokModel::find($id);
        $input=$request->all();
        $adatok->update($input);
        return redirect('/tanulok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TanulokModel::destroy($id);
        return redirect('/tanulok');
    }
}
