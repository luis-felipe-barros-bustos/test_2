
@extends('layouts.app')

@section('content')

<form method="POST" action="{{route('updatepermiso',$permission->id)}}" >
  @method('PUT')
  @csrf

  <input
  type="text"
  name="nombre"
  placeholder="Nombre del permiso"
  class="form-control mb-2"
  value="{{$permission->name}}">
    @foreach($role_check as $key => $role)
    <input type="checkbox" @if($role["check"]) checked @endif
        name="role[]"
     value="{{$role['id']}}"> 
     <label>{{$key}}</label>
     
   </br>
    @endforeach
    <button class="btn btn-warning btn-block" type="submit">actualizar</button>
  </form>
@endsection