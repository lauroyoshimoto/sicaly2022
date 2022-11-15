<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pet;
use App\Models\Tutor;

class TutorController extends Controller
{
    public function index() {
        return view('main');
    }

    public function tutores() {
        $tutores = Tutor::all();
        return view('tutores.listar', ['tutores' => $tutores]);
    }

    public function register() {
        return view('pets.register');
    }

}
