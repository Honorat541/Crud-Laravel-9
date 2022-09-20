<?php

namespace App\Http\Controllers;

use App\Models\Interphone;
use App\Models\Bureau;
use Illuminate\Http\Request;

class InterphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Interphones =  Interphone::with('bureau')->get();
        //dd($Interphones);
        return view('Interphone.index', compact('Interphones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $bureaux = Bureau::all(); 
        return view('Interphone.create', compact('bureaux'));
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
        //dd($request->get('numero_interphone'));
        $request->validate([
            'numero_interphone'=>'required',
            'bureaux_id' => 'required'
        ]);

    $interphone= new Interphone([
        'numero_interphone'=> $request->get('numero_interphone'),
        'bureaux_id'=> $request->get('bureaux_id'),
    ]);

    $interphone->save();
    return redirect()->route('Interphone.index')->with('success', 'Interphone ajouté avec succès ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interphone  $interphone
     * @return \Illuminate\Http\Response
     */
    public function show(Interphone $Interphone)
    {
        //
        $Interphone = Interphone::with('bureau')->findOrFail($Interphone->id);
        return view('Interphone.show', compact('Interphone'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interphone  $interphone
     * @return \Illuminate\Http\Response
     */
   public function edit(Interphone $Interphone)
    {
        //
        $Interphone = Interphone::with('bureau')->findOrFail($Interphone->id);
        $bureaux = Bureau::all(); 
        return view('Interphone.edit', compact('Interphone','bureaux'));
  

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interphone  $interphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interphone $Interphone)
    {
        //
        $request->validate([
            'numero_interphone'=>'required',
            'bureaux_id'=>'required',
            
        ]);

        $Interphone = Interphone::findOrFail($Interphone->id);
        $Interphone->numero_interphone= $request->get('numero_interphone');
        $Interphone->bureaux_id= $request->get('bureaux_id');

        $Interphone->update();
        return redirect()->route('Interphone.index')->with('success', 'Interphone modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interphone  $interphone
     * @return \Illuminate\Http\Response
     */

    public function destroy($Interphone)
    {
        //
        $interphone = Interphone::findOrFail($Interphone);
        
        $interphone->delete();
      return redirect()->route('Interphone.index')->with('success','Interphone supprimé avec succès');
    }
}
    
