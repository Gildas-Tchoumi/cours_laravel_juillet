<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Fonction pour retourner la vue master
    public function master() {
        return view('Home.master');
    }

    //Fonction pour retourner la vue home
    public function home() {
        return view('Home.home');
    }
}
