@extends('adminlte::page')


@section('content_header')
    <h1>Confirmar Dados</h1>
@stop

@section('content')

    <div class="container">
            <form class="col-md-6" action="{{url('salvar/')}}" method="post">
                {{csrf_field()}}
            <br>
            <div class="row">
                <div class="container">
                    <div class="container">
                        @foreach($get_cadastroaluno as $aluno)
                        <label style="margin-bottom: 40px"  class="control-label">Nome do Estudante:</label>
                        <input  required style="margin-bottom: 40px"  type="" maxlength="5" size="5" align="center" name="Nome" class="form-controll" value="{{$aluno->Nome}}">
                    </div>
                    <div class="container">
                        <label  style="margin-bottom: 40px"  class="control-label">Matricula:</label>
                        <input required style="margin-bottom: 40px" maxlength="9" size="9" align="center" name="Matricula" class="form-controll" value="{{$aluno->Matricula}}">
                    </div>
                        <div class="container">
                        <label style="margin-bottom: 40px"  class="control-label">Semestre:</label>
                        <input  required style="margin-bottom: 40px"  maxlength="5" size="5" align="center" name="Semestre" class="form-controll" value="{{$get_cadastroestagio->Semestre}}" >
                     </div>
                    <div class="container">
                             <label style="margin-bottom: 40px"  class="control-label">Nivel:</label>
                            <input  required style="margin-bottom: 40px"  type="" maxlength="1" size="1" align="center" name="Nivel" class="form-controll" value="{{$aluno->Nivel}}">
                    </div>
                    @endforeach
                </div>
                    <button onclose="" style="margin-right: 5px;" class="btn btn primary">Sair</button>
                    <button style="margin-right: 5px;" class="btn btn primary">Confirmar</button>
    </div>
        </form>
    </div>



@stop






