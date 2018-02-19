@extends('adminlte::page')


@section('content_header')
    <h1>Confirmar Dados</h1>
@stop

@section('content')

    <div class="container">
        <form class="col-md-6" action="{{url('confirmar')}}" method="post">
            {{csrf_field()}}
            <br>
            <div class="row">
                <div class="container">
                    <div class="container">

                            <label style="margin-bottom: 40px"  class="control-label">Nome do Estudante:</label>
                            <input  required style="margin-bottom: 40px"  type="" maxlength="50" size="50" align="center" name="Nome" class="form-controll" value="{{$get_cadastroaluno[0]->Nome}}">
                    </div>
                    <label  style="margin-bottom: 40px"  class="control-label">Email:</label>
                    <input type="email" required style="margin-bottom: 40px" maxlength="90" size="90" align="center" name="Email" class="form-controll">
                    <div class="container">
                        <label class="control-label">Nome do Professor Orientador:</label>
                        <select  name="ProfOrient" class="form-control">
                                <option>Escolha o Professor</option>
                            @foreach($get_cadastroprof as $dadosprof)
                            <option   value="{{$dadosprof->CodProf}}"> {{$dadosprof->NomeProf}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="container">
                        <label style="margin-bottom: 40px"  class="control-label">Professor Coo Orientador</label>
                        <input  style="margin-bottom: 40px"  type="" maxlength="50" size="50" align="center" name="ProfCoOrientador" class="form-controll">
                    </div>

                </div>
                    <input type="button" style="margin-right: 5px;" value="Voltar" onClick="history.go(-1)" class="btn btn primary" ></input>
                    <button style="margin-right: 5px;" class="btn btn primary">Enviar</button>
            </div>
        </form>
    </div>



@stop






