<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Directions =  Direction::all();
        return view('Direction.index', compact('Directions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Direction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_direction'=>'required',
            'sigle'=>'required'
        ]);

    $direction= new Direction([
        'nom_direction'=> $request->get('nom_direction'),
        'sigle'=>$request->get('sigle')
    ]);

    $direction->save();
    return redirect()->route('Direction.index')->with('success', 'Direction ajoutée avec succès ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function show(Direction $Direction)
    {
        //
        $Direction = Direction::findOrFail($Direction->id);
        return view('Direction.show', compact('Direction'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
   public function edit(Direction $Direction)
    {
        //
        $Direction = Direction::findOrFail($Direction->id);
        return view('Direction.edit', compact('Direction'));
  

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Direction $Direction)
    {
        //
        $request->validate([
            'nom_direction'=>'required',
            'sigle'=>'required'
        ]);

        $Direction = Direction::findOrFail($Direction->id);
        $Direction->nom_direction= $request->get('nom_direction');
        $Direction->sigle = $request->get('sigle');

        $Direction->update();
        return redirect()->route('Direction.index')->with('success', 'Direction modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */

    public function destroy($Direction)
    {
        //
        $direction = Direction::findOrFail($Direction);
        
        $direction->delete();
      return redirect()->route('Direction.index')->with('success','Direction supprimée avec succès');
    }
}
    
