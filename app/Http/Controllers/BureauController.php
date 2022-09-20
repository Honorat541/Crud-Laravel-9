<?php

namespace App\Http\Controllers;

use App\Models\Bureau;
use Illuminate\Http\Request;

class BureauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Bureaux =  Bureau::all();
        return view('Bureau.index', compact('Bureaux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Bureau.create');
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
            'nom_bureau'=>'required',
            'emplacement'=>'required'
        ]);

    $bureau= new Bureau([
        'nom_bureau'=> $request->get('nom_bureau'),
        'emplacement'=>$request->get('emplacement')
    ]);

    $bureau->save();
    return redirect()->route('Bureau.index')->with('success', 'Bureau ajouté avec succès ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
    public function show(Bureau $Bureau)
    {
        //
        $Bureau = Bureau::findOrFail($Bureau->id);
        return view('Bureau.show', compact('Bureau'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
   public function edit(Bureau $Bureau)
    {
        //
        $Bureau = Bureau::findOrFail($Bureau->id);
        return view('Bureau.edit', compact('Bureau'));
  

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bureau $Bureau)
    {
        //
        $request->validate([
            'nom_bureau'=>'required',
            'emplacement'=>'required'
        ]);

        $Bureau = Bureau::findOrFail($Bureau->id);
        $Bureau->nom_bureau = $request->get('nom_bureau');
        $Bureau->emplacement = $request->get('emplacement');

        $Bureau->update();
        return redirect()->route('Bureau.index')->with('success', 'Bureau modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
    //public function destroy(Bureau $Bureau)
    public function destroy($Bureau)
    {
        //
        $bureau = Bureau::findOrFail($Bureau);
        
        $bureau->delete();
      return redirect()->route('Bureau.index')->with('success','Bureau supprimé avec succès');
    }
}
