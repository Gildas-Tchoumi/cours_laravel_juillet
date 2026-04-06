<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //retourne la liste des produits
    public function index() {
        $products = Product::all(); // Récupérer tous les produits de la base de données
        // dd($products); // Afficher les produits pour le débogage
        return view('Products.list', compact('products')); // Passer les produits à la vue
    }

    public function create() {
        $categories = Category::all(); // Récupérer toutes les catégories de la base de données
        return view('Products.create', compact('categories')); // Passer les catégories à la vue    
    }

    public function store(Request $request) {

    // dd($request);
        //validation des données
        $request->validate([
            'name' => 'required',
            // 'code' => 'required|unique:products,code',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'description' => 'nullable|string',
            'category_id' => 'required',
        ]);

      // generation du code unique pour le produit
      $code = Str::random(8);

        // Création du produit
        Product::create([
            'name' => $request->name,
            'code' => $code,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        // Redirection vers la liste des produits avec un message de succès
        return redirect()->route('products.list');
    }
}
