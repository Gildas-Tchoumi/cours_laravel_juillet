<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use App\Models\Roles;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UtilisateurController extends Controller
{
    //
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return view('Utilisateurs.list', compact('utilisateurs'));
    }

    public function create()
    {
        return view('Utilisateurs.create');
    }

    public function store(Request $request) {
        $request->validate([
            'firstname' => 'required',
            'sexe' => 'required',
            'email' => 'required',
            'password' => 'required',
            ]);

        $utilisateur = new Utilisateur();
        $utilisateur->firstname = $request->firstname;
        $utilisateur->sexe = $request->sexe;
        $utilisateur->email = $request->email;
        $utilisateur->password = bcrypt($request->password);
        $utilisateur->save();

        $messag = "Bonjour " . $utilisateur->firstname . ", votre compte a été créé avec succès !";

        Mail::to($utilisateur->email)->send(new VerifyEmail($messag, $utilisateur));

        return redirect()->route('message');
    }

    public function message()
    {
        return view('Auth.message');
    }

    public function roleassignview($id)
    {
        $utilisateur = Utilisateur::findOrFail($id);
        // dd($utillisateur);
        $roles = Roles::all();
        return view('Roles.rolesasign', compact('roles', 'utilisateur'));
    }

    public function roleassign(Request $request, $id) {
        $request->validate([
            'role_id' => 'required',
        ]);

        $utilisateur = Utilisateur::findOrFail($id);

        $utilisateur->roles()->attach($request->role_id);

        return redirect()->route('users.list');
    }
}   
