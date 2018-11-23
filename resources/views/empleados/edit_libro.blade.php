@extends('template.main')

@section('title','Crear libro')



@section('content')
	
	<div class="row justify-content-md-center">

			<dir class="col-sm-6  col-md-6 offset-md-3 mt-3">
				<h2 >Editar libro</h2>
			</dir>
			
		</div>

		

		<div class="row justify-content-md-center">
			
			<div class="col-sm-6  col-md-6  ">
				
				<div class="card">

					<div class="card-body">
						<div class="form-group">
					 	
							{!! Form::open(['route' => ['libro.update',$libro], 'method' => 'PUT']) !!}

								<div class="form-group">
									<label for="username">Nombre</label>
									<input type="text" name="nombre" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $libro->nombre }}">

									<label for="username">Editorial</label>
									<input type="text" name="editorial" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $libro->editorial }}">

									<label for="username">Año</label>
									<input type="text" name="ano" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $libro->ano }}">

									<label for="username">Ubicación en la biblioteca</label>
									<input type="text" name="ubicacion" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $libro->ubicacion }}">

									<label for="username">Autor</label>
									<input type="text" name="autor" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $libro->autor }}">

									<label for="username">Tipo</label>

									<select class="form-control" name="tipo">
										
									<option value="Normal">Normal</option>
									<option value="Reserva">Reserva</option>
									
      									
    								</select>

    								<label for="username">Area de conocimiento</label>
									<input type="text" name="area_conocimiento" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $libro->area_conocimiento }}">

    								<label for="username">Dias de prestamo</label>
									<input type="text" name="dias_prestamo" class="form-control" required="" autocomplete="off" autofocus="" placeholder="{{ $libro->dias_prestamo }}">


								<button type="submit" name="enviar" class="btn btn-primary mt-2">Registrar</button>

							{!! Form::close() !!}
						</div>
					</div>			
				</div>		
			</div>
		</div>

@endsection