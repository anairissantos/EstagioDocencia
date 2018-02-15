@extends('adminlte::page')


@section('content_header')
    <h1>Bem Vindo ao SEAD</h1>
@stop

@section('content')

    <div class="container">
        <form class="col-md-6" action="{{url('verificar')}}" method="post">
            {{csrf_field()}}
            <br>
            <div class="well">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message')}}
                    </div>
                @endif

                    <label  style="margin-bottom: 40px"  class="control-label">Matricula:</label>
                    <input required style="margin-bottom: 40px" maxlength="9" size="9" align="center" name="Matricula" class="form-controll">
                    <div class="container">
                        <label style="margin-bottom: 40px"  class="control-label">Semestre:</label>
                        <input  required style="margin-bottom: 40px"  type="" maxlength="5" size="5" align="center" name="Semestre" class="form-controll" >
                    </div>

                <button style="margin-right: 5px;" class="btn btn primary">Entrar</button>
            </div>
        </form>
    </div>



@endsection






