<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Direction;
use App\Models\Bureau;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $Employes =  Employe::all();
        $Employes =  Employe::with('direction')->get();
        $Employes =  Employe::with('bureau')->get();
        return view('Employe.index', compact('Employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $directions = Direction::all();
        $bureaux = Bureau::all();
        return view('Employe.create', compact('directions','bureaux'));
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
       // dd($request->all());
        $request->validate([
            'nom_employe'=>'required',
            'prenom_employe'=>'required',
            'groupe_employe'=>'required',
            'statut_employe'=>'required',
            'directions_id' => 'required',
            'bureaux_id' => 'required'
        ]);

    $employe= new Employe([
        'nom_employe'=> $request->get('nom_employe'),
        'prenom_employe'=>$request->get('prenom_employe'),
        'groupe_employe'=>$request->get('groupe_employe'),
        'statut_employe'=>$request->get('statut_employe'),
        'directions_id'=> $request->get('directions_id'),
        'bureaux_id'=> $request->get('bureaux_id'),
    ]);

    $employe->save();
    return redirect()->route('Employe.index')->with('success', 'Employé ajouté avec succès ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $Employe)
    {
        //
        $Employe = Employe::with('direction','bureau')->findOrfail($Employe->id);
        return view('Employe.show', compact('Employe'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
   public function edit(Employe $Employe)
    {
        //
         $Employe = Employe::findOrFail($Employe->id);
          $directions = Direction::all();
          $bureaux = Bureau::all();
        return view('Employe.edit', compact('Employe','bureaux','directions'));
  

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $Employe)
    {
        //
        $request->validate([
            'nom_employe'=>'required',
            'prenom_employe'=>'required',
            'groupe_employe'=>'required',
            'statut_employe'=>'required',
            'directions_id'=>'required',
            'bureaux_id'=>'required'
        ]);

        $Employe = Employe::findOrFail($Employe->id);
        $Employe->nom_employe = $request->get('nom_employe');
        $Employe->prenom_employe = $request->get('prenom_employe');
        $Employe->groupe_employe = $request->get('groupe_employe');
        $Employe->statut_employe = $request->get('statut_employe');
        $Employe->directions_id = $request->get('directions_id');
        $Employe->bureaux_id = $request->get('bureaux_id');

        $Employe->update();
        return redirect()->route('Employe.index')->with('success', 'Employé modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy($Employe)
    {
        //
        $employe = Employe::findOrFail($Employe);
        
        $employe->delete();
      return redirect()->route('Employe.index')->with('success','Employé supprimé avec succès');
    }
}
