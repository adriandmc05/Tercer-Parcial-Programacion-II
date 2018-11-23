@extends('template.main')

@section('title','Libros')

@section('content')

<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Correo</th>
		</thead>
		<tbody>
			@foreach($empleados as $empleado)

				<tr>
					<td>{{ $empleado->id }}</td>
					<td>{{ $empleado->nombre }}</td>
					<td>{{ $empleado->apellido }}</td>
					<td>{{ $empleado->correo }}</td>
					<td>{{ $empleado->password }}</td>
					<td>

					</td>
					<td><a href="{{ route('empleado.edit', $empleado->id) }} " class="btn btn-primary mr-2">Editar</a><a href="{{ route('empleado.destroy', $empleado->id) }}" onclick="return confirm('Seguro que quieres eliminar este libro?')" class="btn btn-danger">Eliminar</a></td>
				</tr>


			@endforeach
		</tbody>
	</table>

@endsection
