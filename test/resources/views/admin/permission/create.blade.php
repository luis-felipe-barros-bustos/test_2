
<form method="POST" action="storepermission" >
  @method('PUT')
  @csrf
<input type="text"
name="nombre"
placeholder="Nombre del permiso"
class="form-control mb-2"
value="">
@foreach($role as $roles)

    
<input type="checkbox" id="roles {{$roles->id}}"
 name="roles[]"
  value="{{$roles->id}}"
  @if(is_array(old('roles')) 
  && in_array('roles->id',old('roles')))
  checked
  @endif> 
  <label>{{$roles->name}}</label>
</br>
@endforeach

<a href="{{route('home')}}">cancelar</a>
<button class="btn btn-warning btn-block" type="submit">Guardar</button>
</form>