<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Turma;
use App\Models\Disciplina;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    public function store(request $request)
    {
        $get_disciplina = DB::table('disciplina')->select('NomeDisc')->get();

            /*->where('NomeDisc', '=', [$request->NomeDisc])*/

        $get_turma = DB::table('turma')->select('CodTurma','Horario', 'NomeDisc', 'NomeProf')
            ->join('disciplina', 'disciplina.CodDisc', '=', 'turma.CodDisc')
            ->join('professor', 'professor.CodProf','=','turma.CodProf')
            ->get();


      return view('site.turma.create', compact('get_turma','get_disciplina'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
