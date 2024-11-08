<?php

namespace App\Http\Controllers;

use App\Models\Pointages;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;


class PointagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $utilisateurs=Utilisateurs::all();
         $pointages=Pointages::all();
        //  return view('pointage.listes',compact('pointages'));

         return view('admin.listepointage',compact('pointages'));
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('pointage.form');

        $utilisateurs=Utilisateurs::all();
        $pointages=Pointages::all();

      return view('admin.formpointage',compact('utilisateurs','pointages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
{ 
    $request->validate([
        'utilisateur_id',
        'date'=> 'required',
        'heure_entree'=>'date_format:H:i',
        'heure_sortie'=>'date_format:H:i',

    //         //|exists:utilisateurs->id'
        
    // ],[
    //      'date.required'=>'la date est aubligatoire',
    //      'heure_depart.required'=>'heure de depart est aubligatoire',
    //      'heure_ariive.required'=>'heure dariive est aubligatoire'
   

     ]);
//      Pointages::create([
//         'utilisateur_id' => '$utilisateurId',
//         'date' => $request->input('date'),
//         'heure_entree' => $request->input('heure_entree'),
//         'heure_sortie' => $request->input('heure_sortie'),
       
// ]);
pointages::create($request->all());
        return redirect()->route('pointages.index')->with('message','Heures de cet Utilisateur a été ajoutéé ');
        // return redirect()->back()->with('success', 'Pointage ajouté avec succès');
    }

}


    /**
     * Display the specified resource.
     */
    public function show(Pointages $pointages)
    {
        // $pointages=pointages::find($pointages->id);
        return view('admin.detailpointage',compact('pointages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pointages $pointages)
    {
        $pointages=Pointages::all();

        return view('admin.editepointage',compact('pointages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pointages $pointages)
    {
        // $pointages = Pointages::findOrFail($pointages);
        $pointages->date=$request->date;
        $pointages->heure_arrive=$request->heure_arrive;
        $pointages->heure_depart=$request->heure_depart;
        $pointages->utilisateurs_id=$request->utilisateurs_id;

        $pointages->save();

        return redirect()->route('admin.listeuser');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pointages $pointages)
    {
        $pointages->delete();


        return redirect()->route('admin.listeuser');
    }
}
