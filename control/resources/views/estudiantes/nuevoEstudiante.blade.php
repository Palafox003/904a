@extends('layouts.admin')

@section('title','Nuevo Estudiante')

@section('contenido')

	<div class="row">
		<div class="col">
			<h2>Nuevo Estudiante</h2>
			<form method="post" action="{{route('estudiante.store')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
			  <div class="form-group">
			    <label for="matricula">Matricula</label>
			    <input type="text" name="matricula" class="form-control" id="matricula" placeholder="Matricula">
			  </div>
			  <div class="form-group">
			    <label for="nombre">Nombre:</label>
			    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
			  </div>
			  <div class="form-group">
			    <label for="paterno">Apellido Paterno:</label>
			    <input type="text" name="paterno" class="form-control" id="paterno" placeholder="Apellido Paterno">
			  </div>
			  <div class="form-group">
			    <label for="materno">Apellido Materno:</label>
			    <input type="text" name="materno" class="form-control" id="materno" placeholder="Apellido Materno">
			  </div>
			  <div class="form-group">
			    <label for="email">Email:</label>
			    <input type="text" name="email" class="form-control" id="email" placeholder="nombre@mail.com">
			  </div>
			  <input class="btn btn-primary" type="submit" value="Guardar">
			</form>
		</div>
	</div>

@endsection