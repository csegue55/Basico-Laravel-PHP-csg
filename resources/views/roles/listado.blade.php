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
        <img class="float-center ml-4 mt-4" repeat="no repeat" src="{{ url('img/usuarios.jpg') }}" style="width: 225px height= 126px">
    </div>
<!--............................................................................................................... -->
            <div class="col-xl-9 colmod12 shadow" >
                <h3>Listado e Usuarios</h3>
            <div class="card">
                <!-- <input wire:model="search" class="form-control" placeholder="Ingresar nombre o correo Usuario"> -->
                
                @if($users->count())
                    <?php
                    $t_user= $users->count();
                    echo "Hay : ".$t_user." usuarios"; 
                    ?>
                @endif
                

            <div class="card-body">    
            <table class="table table-striped">
            <thead>
                    <tr>
                    <th>ID</th>
                    <th>NAME </th>
                    <th>EMAIL </th> 
                    <th></th> 
                    </tr>
            </thead> 
            <tbody>   
                    @foreach($users as $user)  
                    <tr>                   
                    <td><input size="4px" value="{{$user->id}}"> </td>
                    <td><input size="15px" value="{{$user->name}}"> </td>
                    <td><input size="15px" value="{{$user->email}}"> </td>
                    <td width="10px"><a class="btn btn-primary" href="{{route('roles.editar',$user)}}">Editar</td>
                    </tr>    
                    @endforeach
            </tbody>
            </table>    
            <div class="card-footer"></div>
            </div>
            </div>
            </div> 

<!--............................................................................................................... -->
            <div class="col-xl-3 colmod12 shadow" >
            </div>
<!--............................................................................................................... -->               
            <!-- <div class="col-xl-7 colmod12 shadow" ></div>  -->
<!--............................................................................................................... -->               
           </div><!-- row -->
       </div><!--mod1 -->

<!-- ******************************************************************************************************************* -->



</div><!-- container -->
@endsection