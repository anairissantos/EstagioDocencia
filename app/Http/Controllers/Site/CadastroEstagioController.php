<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models;

class CadastroEstagioController extends Controller
{
    public function index(){
        return view('site.cadastro.index');
    }


    public function verificar(request $request)
    {
        $get_cadastroaluno = DB::table('aluno')->select('nome','matricula','nivel')
            ->where('matricula', '=', [$request->matricula])->get();
        $get_cadastroestagio = $request->semestre;


        return view("site.cadastro.verificar",
            compact("get_cadastroaluno","get_cadastroestagio"));
    }

    public function salvardados(request $request){
           $data=$request->all();
           $verifica = new CadastroEstagio();
           $verifica = $verifica->fill($data)->toArray();
           $response = CadastroEstagio::create($verifica)->toArray();

        return view('site.cadastro.confirmar')->with($response);

 }

}
