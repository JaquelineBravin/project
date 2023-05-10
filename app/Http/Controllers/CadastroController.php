<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    
    public function create() {

        $cadastro = new Cadastro();
        dd($cadastro->lista());

        return view('cadastro');
    }
}
