@extends('adminlte::page')

@section('content_header')
    <h1>Faça Suas Escolhas!</h1>
@stop

@section('content')

    <div class="container">
    <form class="col-md-6" action="" method="post">
        {{csrf_field()}}
            <br>
            <div class="row">
                <div class="container">
                    <div class="container">

                    <label style=""  class="control-label">Nome da Disciplina:</label>
                    <select  style="margin-bottom: 40px" name="CodDisc" class="form-control">
                        <option>Escolha a Disciplina</option>
                         @foreach($get_disciplina as $disc)
                            <option   value="{{$get_disciplina->CodDisc}}">{{$get_disciplina->NomeDisc}}</option>
                            @endforeach
                    </select>
                    </div>
                    <div class="container">
                         <label  style="margin-bottom: 40px"  class="control-label">Turma:</label>
                        @foreach ($get_turma as $turma)
                            <h6>Horário<input   style="margin-bottom: 40px" align="center" name="Horario" class="form-controll" value="Horario"></h6>
                            <h6>Docente<input  style="margin-bottom: 40px" align="center" name="CodProf" class="form-controll" value="{{$turma->NomeProf}}"></h6>
                            <h6>Numero da Turma <input  style="margin-bottom: 40px" align="center" name="CodTurma" class="form-controll" value="CodTurma"></h6>

                        @endforeach
                        <input style="" align="left" type="checkbox">
                    </div>


                </div>
                     <input type="button" style="margin-right: 5px;" value="Voltar" onClick="history.go(-1)" class="btn btn primary" ></input>
                    <input type="button" value="Avançar" onCLick="history.forward()" class="btn btn primary"></input>
            </div>
        </form>
    </div>


@stop