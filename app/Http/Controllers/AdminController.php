<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
         // Récupérer tous les utilisateurs avec leurs pointages
    

        return view('admin.dashboard');
    }
}
