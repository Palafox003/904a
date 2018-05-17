@extends('layouts.admin')

@section('title','Editar Estudiante')

@section('contenido')

	<div class="row">
		<div class="col">
			<h2>Editar Estudiante</h2>
			<form method="post" action="{{route('estudiante.update',$estudiante)}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
				<input type="hidden" name="_method" value="PUT">
			  <div class="form-group">
			    <label for="matricula">Matricula</label>
			    <input type="text" name="matricula" class="form-control" id="matricula" value="{{$estudiante->matricula}}" placeholder="Matricula">
			  </div>
			  <div class="form-group">
			    <label for="nombre">Nombre:</label>
			    <input type="text" name="nombre" class="form-control" value="{{$estudiante->nombre}}" id="nombre" placeholder="Nombre">
			  </div>
			  <div class="form-group">
			    <label for="paterno">Apellido Paterno:</label>
			    <input type="text" name="paterno" class="form-control" value="{{$estudiante->paterno}}" id="paterno" placeholder="Apellido Paterno">
			  </div>
			  <div class="form-group">
			    <label for="materno">Apellido Materno:</label>
			    <input type="text" name="materno" class="form-control" value="{{$estudiante->materno}}" id="materno" placeholder="Apellido Materno">
			  </div>
			  <div class="form-group">
			    <label for="email">Email:</label>
			    <input type="text" name="email" class="form-control" value="{{$estudiante->email}}" id="email" placeholder="nombre@mail.com">
			  </div>
			  <input class="btn btn-primary" type="submit" value="Actualizar">
			</form>
		</div>
	</div>

@endsection