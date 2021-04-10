@extends('layouts.app')

@section('content')
  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} <br>
                    <td><a href="{{route('listarpermission')}}">listado de permisos</a></td><br>
                    <td><a href="{{route('crearpermission')}}">creacion de permisos</a></td><br>

                    <td><a href="{{route('listarrole')}}">listado de roles</td><br>
                    <td><a href="{{route('crearrole')}}">creacion de roles</a></td><br>
                    
                    <td><a href="{{route('listaruser')}}">listado de usuarios</a></td><br>
                    <td><a href="{{route('crearuser')}}">creacion de usuarios</a></td><br>
                   
                </div>
@endsection
