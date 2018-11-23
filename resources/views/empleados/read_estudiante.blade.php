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
			@foreach($estudiantes as $estudiante)

				<tr>
					<td>{{ $estudiante->id }}</td>
					<td>{{ $estudiante->nombre }}</td>
					<td>{{ $estudiante->apellido }}</td>
					<td>{{ $estudiante->correo }}</td>
					<td>

					</td>
					<td><a href="{{ route('persona.edit', $estudiante->id) }} " class="btn btn-primary mr-2">Editar</a><a href="{{ route('persona.destroy', $estudiante->id) }}" onclick="return confirm('Seguro que quieres eliminar este libro?')" class="btn btn-danger">Eliminar</a></td>
				</tr>


			@endforeach
		</tbody>
	</table>

@endsection
