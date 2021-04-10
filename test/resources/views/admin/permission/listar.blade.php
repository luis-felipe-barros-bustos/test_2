@extends('layouts.app')

@section('content')

<h1>Listado de permisos</h1>
<table>
    <thead>
        <tr>
            <td>permisos</td>
        </tr>
    </thead>
    <tbody>
        @foreach($row as $e)
        <tr>
            <td> <a  href="{{ route('detallpermiso', $e->id)}}">{{$e->name}}</a></td>
            <td> <a  href="{{ route('editarpermiso', $e->id)}}">Editar</a></td>
            <td> <a  href="{{ route('eliminarpermiso', $e->id)}}">Eliminar</a></td>
            
        </tr>
    @endforeach
    </tbody>
</table>
{{$row->render()}}

@endsection