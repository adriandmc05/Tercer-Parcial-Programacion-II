@extends('template.home')

@section('title','login')



@section('content')
	
	<div class="row justify-content-md-center">

			<dir class="col-sm-6  col-md-6 offset-md-3 mt-3">
				<h2 >Login</h2>
			</dir>
			
		</div>

		

		<div class="row justify-content-md-center">
			
			<div class="col-sm-6  col-md-6  ">
				
				<div class="card">

					<div class="card-body">
						<div class="form-group">
					 	
							{!! Form::open(['route' => 'auth.index', 'method' => 'POST']) !!}

								<div class="form-group">
									<label for="username">Usuario</label>
									<input type="text" name="nombre" class="form-control" required="" autocomplete="off" autofocus="" placeholder="Usuario">

									<label for="name">Contraseña</label>
									<input type="password" name="password" class="form-control" required="" autocomplete="off" autofocus="" placeholder="*********">

								<button type="submit" name="enviar" class="btn btn-primary mt-2">Registrar</button>

							{!! Form::close() !!}
						</div>
					</div>			
				</div>		
			</div>
		</div>

@endsection