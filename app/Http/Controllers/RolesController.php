<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function index()
    {
        $roles = Roles::all();
        return view('Roles.list', compact('roles'));
    }

    public function create()
    {
        return view('Roles.create');
    }


    public function store(Request $request)
    {
        //validation des données
        $request->validate([
            'name' => 'required',
            'description' => 'nullable|string',
        ]);

        Roles::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        // dd($cat);

        // Redirection vers la liste des catégories avec un message de succès
        return redirect()->route('roles.list');
    }
}
