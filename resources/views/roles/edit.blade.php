@extends('plantillas.header')
@section('title','Evotic')

@section('content')

<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
<div class="Mod1">
<div class="row rowmod1">   
<!--............................................................................................................... -->
    <div class="col-xl-3 colmod11 shadow" >
        <button class="boton1" style="margin-top:8px"><a href="{{route('coches.home')}}"; style="color:white"; >Inicio</a></button><br>
        <img class="mr-1 mt-4" repeat="no repeat" src="{{ url('img/usuarios.jpg') }}" style="width: 225px height= 126px">
    </div>
<!--............................................................................................................... -->
            <div class="col-xl-9 colmod12 shadow" >
            <h4>Asignar un Rol</h4>

            @if(session('info'))
                <div class="alert alert-success">
                    <strong>{{session('info')}}</strong>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <p class="h5">Nombre</p>
                    <p class="form-control">{{$user->name}}</p>
                    <h6>Listado de Roles</h6>
                      
                    {!! Form::model($user, ['route'=>['roles.update', $user], 'method'=>'put']) !!}
                        @foreach($roles as $role)
                            <div>
                                <label>
                                    {!! form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1'])!!}
                                    {{$role->name}}
                                </label> 
                            </div>
                        @endforeach
                      {!! form::submit('Asignar Rol',['class'=> 'btn btn-outline-success btn-sm mt-2'])!!}
                    {!! form::close()!!}  


                </div>
            </div>
            </div> 

</div><!-- container -->
@endsection