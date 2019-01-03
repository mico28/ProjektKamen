<?php

namespace App\Http\Controllers;

use App\Kamen;
use Illuminate\Http\Request;

class KamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamens = Kamen::all();

        return view('kamens.index', compact('kamens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Kamen::Create(request()->validate([
            'kamenNaziv'=> ['required', 'min:3', 'max:255'],
            'kamenDobavitelj'=>['required', 'min:3', 'max:255']
        ]));
        
        return redirect('/kamens');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kamen  $kamen
     * @return \Illuminate\Http\Response
     */
    public function show(Kamen $kamen)
    {
        return view('kamens.show', compact('kamens' ,$kamen));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kamen  $kamen
     * @return \Illuminate\Http\Response
     */
    /*
    public function edit(Kamen $kamen)
    {
        return view('kamens.edit', compact('kamens', 'id'));
    }
    */
    //TODO popravi na zornjo verzijo da bo lepša koda
    public function edit($id){
        $kamen = Kamen::find($id);
        return view('kamens.edit', compact('kamen','id'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kamen  $kamen
     * @return \Illuminate\Http\Response
     */
    public function update(Kamen $kamen)
    {
        $kamen->update(request(['kamenNaziv', 'kamenDobavitelj']));

        return redirect('/kamens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kamen  $kamen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamen $kamen)
    {
        $kamen->delete();

        return redirect('/kamens');
    }
}
