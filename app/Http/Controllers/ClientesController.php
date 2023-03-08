<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __invoke()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $nasc = $_POST['nasc'];

        $dados = [
            'nome'=>$nome,
            'email'=>$email,
            'endereco'=>$endereco,
            'nasc'=>$nasc
        ];
        return view('clientes', $dados);
    }
}
