<?php

namespace App\Http\Controllers\Site;

use App\Models\CadastroEstagio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models;
use App\Models\Professor;
use App\Models\AreaInteresse;

class CadastroEstagioController extends Controller
{
    public function index()
    {
        return view('site.cadastro.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function verificar(Request $request)
    {
        $get_cadastroaluno = DB::table('aluno')->select('Nome', 'Matricula', 'Nivel')
            ->where('Matricula', '=', [$request->Matricula])->get();

        $get_cadastroestagio = $request->Semestre;


        /*if (count($get_cadastroestagio) > 0) {

        }
        else{
                return redirect('/verificar')->with('message', 'Erro! Semestre informado não corresponde ao turma.');
            }*/
        return view("site.cadastro.verificar", compact("get_cadastroaluno", "get_cadastroestagio"));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function salvar(Request $request)

    { /*metodo que salva as informações do segundo form*/

        $data = $request->except('Nivel');
        $data["DataHora"] = Carbon::now();
        $response = CadastroEstagio::create($data)->toArray;

    /*busca as informações no banco como nome e deixa para preencher as demais*/
        $get_cadastroaluno = DB::table('aluno')->select('Nome')
            ->where('Nome', '=', [$request->Nome])->get();

        $get_cadastroestagio = DB::table('cadastroestagio')->select('Email', 'ProfOrient', 'ProfCoOrientador')->get();
        $get_cadastroprof = DB::table('professor')->select('NomeProf','CodProf')->get();


       return view('site.cadastro.create',
            compact( "get_cadastroaluno", "get_cadastroestagio","get_cadastroprof"));


    }


    /**
     * @param Request $request
     */
    public function confirmar(Request $request)
    {

        $data = $request->all();
        $data["DataHora"] = Carbon::now();
        $data["Semestre"] = 20172;
        $get_cadastroaluno = DB::table('aluno')->select('Matricula')
            ->where('Matricula', '=', [$request->Matricula])->get();
        $data["Matricula"] = $get_cadastroaluno;

        $response = CadastroEstagio::create($data)->toArray;



        return view("site.turma.create",compact("$get_cadastroaluno"));
    }


}