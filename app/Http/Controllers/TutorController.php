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

    public function cadastro() {
        return view('tutores.form', ['tutor' => null]);
    }

    public function novo(Request $request) {

        $novoTutor = new Tutor();
        $novoTutor->nome_completo = $request->nome_completo;
        $novoTutor->email = $request->email;
        $novoTutor->senha = $request->senha;
        $novoTutor->endereco = $request->endereco;
        $novoTutor->bairro = $request->bairro;
        $novoTutor->complemento = $request->complemento;
        $novoTutor->cidade = $request->cidade;
        $novoTutor->estado = $request->estado;
        $novoTutor->cep = $request->cep;
        $novoTutor->nascimento = $request->nascimento;
        $novoTutor->sexo = $request->sexo;
        $novoTutor->save();

        return redirect()->route('listar-tutores');
    }

    public function atualizar(Tutor $tutor) {
        return view('tutores.form', [ 'tutor' => $tutor]);
    }


    public function update(Request $request, Tutor $tutor) {
        $tutor->nome_completo = $request->nome_completo;
        $tutor->email = $request->email;
        $tutor->senha = $request->senha;
        $tutor->endereco = $request->endereco;
        $tutor->bairro = $request->bairro;
        $tutor->complemento = $request->complemento;
        $tutor->cidade = $request->cidade;
        $tutor->estado = $request->estado;
        $tutor->cep = $request->cep;
        $tutor->nascimento = $request->nascimento;
        $tutor->sexo = $request->sexo;
        $tutor->save();
        
        return redirect()->route('listar-tutores');
    }


    public function remover(Tutor $tutor) {
        $tutor->delete();
        return redirect()->route('listar-tutores');
    }
}
