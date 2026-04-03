<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // function pour retourner la liste des categories
    public function index() {
        
        $cat = Category::all(); // Récupérer toutes les catégories de la base de données
        // dd($categories); // Afficher les catégories pour le débogage
        return view('Categories.list',compact('cat')); // Passer les catégories à la vue
    }

    public function create() {
        return view('Categories.Create');
    }

    public function store(Request $request) {
        //validation des données
        $request->validate([
            'name' => 'required',
            'description' => 'nullable|string',
        ]);

        // Création de la catégorie
        // Category::create($request->all());

        // $category = new Category();
        // $category->name = $request->name;
        // $category->description = $request->description;
        // $category->save();

       $cat = Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        // dd($cat);

        // Redirection vers la liste des catégories avec un message de succès
        return redirect()->route('categories.list');
        
        }
}
