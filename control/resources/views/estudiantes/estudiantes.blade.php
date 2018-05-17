@extends('layouts.admin')

@section('title','Estudiantes')

@section('contenido')
	<h2>Lista de Estudiantes</h2>
	<table border="1" class="table table-striped">
		<tr class="thead-dark"><th>Matricula</th><th>Nombre</th><th>Email</th><th>Editar</th></tr>
	@foreach($estudiantes as $estudiante)
		<tr><td>{{$estudiante->matricula}}</td><td>{{$estudiante->nombre}} {{$estudiante->paterno}} {{$estudiante->materno}}</td><td>{{$estudiante->email}}</td><td><a class="btn btn-primary" href="estudiante/{{$estudiante->id}}/edit" role="button">Editar</a></td></tr>
	@endforeach
	</table>
@endsection