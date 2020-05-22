@extends('layouts.layout')
@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-info">
            {{Session::get('success')}}
        </div>
        @endif

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Editar Persona</h3>
            </div>
            <div class="panel-body"> 
                <div class="table-container">
                    <form action="{{ route('persona.update',$persona->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('PUT') }} 
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="identificacion" id="identificacion" class="form-control input-sm" placeholder="Identificacion" value="{{ $persona->identificacion }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre" value="{{ $persona->nombre }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="date" name="fecha" id="fecha" class="form-control input-sm" placeholder="yyyy-mm-dd" value="{{ $persona->fecha }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input type="submit" value="Guardar" class="btn btn-success btn-block">
                                <a href="{{ route('persona.index') }}" class="btn btn-info btn-block" >Atrás</a>
                            </div> 

                        </div>
                    </form>
        </div>
        </div>

        </div>
        </div>
    </section>
</div>
 @endsection