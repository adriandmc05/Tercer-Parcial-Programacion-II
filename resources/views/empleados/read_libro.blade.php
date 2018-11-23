@extends('template.main')

@section('title','Libros')

@section('content')

<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Editorial</th>
			<th>Autor</th>
			<th>Ubicacion</th>
		</thead>
		<tbody>
			@foreach($libros as $libro)

				<tr>
					<td>{{ $libro->id }}</td>
					<td>{{ $libro->nombre }}</td>
					<td>{{ $libro->editorial }}</td>
					<td>{{ $libro->autor }}</td>
					<td>{{ $libro->ubicacion }}</td>
					<td>

					</td>
					<td><a href="{{ route('libro.edit', $libro->id) }} " class="btn btn-primary mr-2">Editar</a><a href="{{ route('libro.destroy', $libro->id) }}" onclick="return confirm('Seguro que quieres eliminar este libro?')" class="btn btn-danger">Eliminar</a></td>
				</tr>


			@endforeach
		</tbody>
	</table>

@endsection
