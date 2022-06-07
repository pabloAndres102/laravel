@extends('principal')

@section('contenido')
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
    </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion }}</td>
            </tr>
            @endforeach
        </tbody>

</table>
@endsection