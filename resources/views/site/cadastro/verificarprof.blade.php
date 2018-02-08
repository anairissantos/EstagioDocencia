@extends('adminlte::page')


@section('content_header')
    <h1>Confirmar Dados</h1>
@stop

@section('content')

    <div class="container">
        <form class="col-md-6">
            {{csrf_field()}}
            <br>
            <div class="row">
                <div class="container">
                    <div class="container">
                        @foreach($get_cadastroestagio as $cadastro)
                            <label style="margin-bottom: 40px"  class="control-label">Nome do Estudante:</label>
                            <input  required style="margin-bottom: 40px"  type="" maxlength="5" size="5" align="center" name="nome" class="form-controll" value="{{$get_cadastroaluno[0]->nome}}">
                    </div>
                    <label  style="margin-bottom: 40px"  class="control-label">Professor Orientador:</label>
                    <input required style="margin-bottom: 40px" maxlength="9" size="9" align="center" name="matricula" class="form-controll" value="{{$aluno->matricula}}">
                    <div class="container">
                        <label style="margin-bottom: 40px"  class="control-label">Semestre:</label>
                        <input  required style="margin-bottom: 40px"  maxlength="5" size="5" align="center" name="semestre" class="form-controll" value="{{$get_cadastroestagio[0]->semestre}}" >
                    </div>
                    <div class="container">
                        <label style="margin-bottom: 40px"  class="control-label">Nivel:</label>
                        <input  required style="margin-bottom: 40px"  type="" maxlength="1" size="1" align="center" name="nivel" class="form-controll" value="{{$aluno->nivel}}">
                    </div>
                    @endforeach
                </div>
                <button style="margin-right: 5px;" class="btn btn primary">Voltar</button>
                <button style="margin-right: 5px;" class="btn btn primary">Confirmar</button>
            </div>
        </form>
    </div>



@stop






