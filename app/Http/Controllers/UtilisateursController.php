<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UtilisateursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $utilisateurs=Utilisateurs::all();
        return view('admin.listeuser',compact('utilisateurs'));

        return view('utilisateur.liste',compact('utilisateurs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.formuser');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'departement'=> 'required',
            'email'=> 'required|unique:utilisateurs|min:3',
            'poste'=> 'required',
            'genre'=> 'required',
            'telephone'=> 'required',
            // 'pasword' => 'required|string|min:8|confirmed',
            // // 'email_verificate_at'=> 'required',
            'poste'=> 'required'
        ],[
             'username.required'=>'le username est aubligatoire',
             'email.unique'=>'Ce mail existe deja verifie votre email ça doit etre unique',
             'email.min'=>'le mail doit avoire au minimeum 3 caractères',
             'username.required'=>'le username est aubligatoire',
             'email.required'=>'le mail est aubligatoire',
             'genre.required'=>'le genre est aubligatoire',
             'poste.required'=>'le poste est aubligatoire',
             'telephone.required'=>'le telephone est aubligatoire'

        ]);
        
        // Utilisateurs::create([
    //         'username' => $request,
    //         'departement' => $request->input('departement'),
    //         'email' => $request->input('email'),
    //         'genre' => $request->input('genre'),
    //         'poste' => $request->input('poste'),
    //         'telephone' => $request->input('telephone'),
    //         
    // ]);
    

        Utilisateurs::create($request->all());
        return redirect()->route('utilisateurs.index')->with('message','Cette Utilisateur a été ajoutéé');
    }

    /**
     * Display the specified resource.
     */
    public function show(Utilisateurs $utilisateurs)
    {
        $utilisateurs=Utilisateurs::find($utilisateurs->id);
        return view('admin.detail',compact('utilisateurs'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utilisateurs $utilisateurs)
    {
        $utilisateurs=Utilisateurs::all();

        return view('admin.edite',compact('utilisateurs'));
        // $utilisateurs = Utilisateurs::findOrFail($utilisateurs);

        // return view('admin.edite', compact('utilisateurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utilisateurs $utilisateurs)
    {
        $utilisateurs = Utilisateurs::findOrFail($utilisateurs);
        $utilisateurs->username=$request->username;
        $utilisateurs->departement=$request->departement;
        $utilisateurs->email=$request->email;
        $utilisateurs->poste=$request->poste;
        $utilisateurs->genre=$request->genre;
        $utilisateurs->telephone=$request->telephone;
        $utilisateurs->save();

        return redirect()->route('admin.listeuser');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Utilisateurs $utilisateurs)
    {
        $utilisateurs->delete();


        return redirect()->route('admin.listeuser'); 
    }
}
