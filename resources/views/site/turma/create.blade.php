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
                        <option   value=""></option>
                    </select></div>
                    <div class="container">

                         <label  style="margin-bottom: 40px"  class="control-label">Turma:</label>
                         <input  style="margin-bottom: 40px" align="center" name="" class="form-controll" value="">
                    </div>
                    <div class="container">
                        <label  style="margin-bottom: 40px"  class="control-label">Turma:</label>
                        <input style="margin-bottom: 40px"  align="center" name="" class="form-controll" value="">
                    </div>
                    <div class="container">
                        <label  style="margin-bottom: 40px"  class="control-label">Turma:</label>
                        <input  style="margin-bottom: 40px"  align="center" name="" class="form-controll" value="">
                    </div>

                </div>
                     <input type="button" style="margin-right: 5px;" value="Voltar" onClick="history.go(-1)" class="btn btn primary" ></input>
                    <input type="button" value="Avançar" onCLick="history.forward()" class="btn btn primary"></input>
            </div>
        </form>
    </div>


@stop