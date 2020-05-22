@extends('layouts.layout')
@section('content')
<div class = "row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left"><h3>Lista de Personas </h3></div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('persona.create') }}" class="btn btn-info" >Añadir Persona</a>
                        </div> 
                        
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <tr>
                                    <th>Identificacion</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($personas as $persona)
                                    <tr>
                                        <td>{{ $persona->identificacion }}</td>
                                        <td>{{ $persona->nombre }}</td>
                                        <td>{{ $persona->fecha }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" href="{{action('PersonaController@edit', $persona->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('persona.destroy',$persona->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{method_field('delete') }} 
                                                <button type="submit" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @if(!$personas->count())
                                    <tr><td colspan='5'>No hay datos</td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection