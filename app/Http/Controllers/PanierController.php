<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function viewPanier() {
        return view('panier');
    }
}
