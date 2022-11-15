<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pet;

class PetController extends Controller
{
    public function index() {

        $pets = Pet::all();
    
        return view('pets.main',['pets' => $pets]);

    }

    public function search() {
        return view('pets.search');
    }

    public function register() {
        return view('pets.register');
    }

}
