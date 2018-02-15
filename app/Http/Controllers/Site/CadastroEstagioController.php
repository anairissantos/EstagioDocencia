<?php

namespace App\Http\Controllers\Site;

use App\Models\CadastroEstagio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models;
use App\Models\Professor;

class CadastroEstagioController extends Controller
{
    public function index()
    {
        return view('site.cadastro.index');
    }

    public function verificar(request $request)
    {
        $get_cadastroaluno = DB::table('aluno')->select('Nome', 'Matricula', 'Nivel')
            ->where('Matricula', '=', [$request->Matricula])->get();
        $get_cadastroestagio = $request->Semestre;

        return view("site.cadastro.verificar",
            compact("get_cadastroaluno", "get_cadastroestagio"));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function salvar(Request $request)
    {
        $data = $request->except('Nivel');
        $data["DataHora"] = Carbon::now();
        $response = CadastroEstagio::create($data)->ToArray();

        $get_cadastroaluno = DB::table('aluno')->select('Nome')
            ->where('Nome', '=', [$request->Nome])->get();

        $get_cadastroestagio = DB::table('cadastroestagio')->select('Email', 'ProfOrient', 'ProfCoOrientador')->get();
        $get_cadastroprof = DB::table('professor')->select('NomeProf','CodProf')->get();


       return view("site.cadastro.create",
            compact( "get_cadastroaluno", "get_cadastroestagio","get_cadastroprof"));
    }

    /**
     * @param Request $request
     */
    public function confirmar(Request $request)
    {
        $data=$request->all();
        $data["DataHora"] = Carbon::now();
        $response = CadastroEstagio::create($data)->ToArray();

    }


}