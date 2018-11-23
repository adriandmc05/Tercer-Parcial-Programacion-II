@extends('template.main')

@section('title','Crear libro')



@section('content')
	
	<div class="row justify-content-md-center">

			<dir class="col-sm-6  col-md-6 offset-md-3 mt-3">
				<h2 >Editar Estudiante</h2>
			</dir>
			
		</div>

		

		<div class="row justify-content-md-center">
			
			<div class="col-sm-6  col-md-6  ">
				
				<div class="card">

					<div class="card-body">
						<div class="form-group">
					 	
							{!! Form::open(['route' => ['persona.update',$estudiante], 'method' => 'PUT']) !!}

								<div class="form-group">
									<label for="username">Nombre</label>
									<input type="text" name="nombre" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $estudiante->nombre}}">

									<label for="username">Apellido</label>
									<input type="text" name="apellido" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $estudiante->apellido}}">

									<label for="username">Edad</label>
									<input type="text" name="edad" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $estudiante->edad}}">

									<label for="username">Correo</label>
									<input type="text" name="correo" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $estudiante->correo}}">

									<label for="username">Contraseña</label>
									<input type="text" name="password" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $estudiante->password}}">
  


								<button type="submit" name="enviar" class="btn btn-primary mt-2">Registrar</button>

							{!! Form::close() !!}
						</div>
					</div>			
				</div>		
			</div>
		</div>

@endsection