<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CadastroEstagioController extends Controller
{
    public function index(){
        return view('site.cadastro.index');
    }

    public function confirmar(request $request){
           $data=$request->all();
           $verifica = new CadastroEstagio();
           $verifica = $verifica->fill($data)->toArray();
           $response = CadastroEstagio::create($verifica)->toArray();

        return view('site.cadastro.confirmar')->with($response);

 }

}
