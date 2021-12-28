<?php
 use App\Models\Coche;
?>

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
       <button class="boton1" style="margin-top:8px"><a href="{{route('propietarios.listado')}}"; style="color:white"; >Volver</a></button><br>
       <img class="float-right  ml-1 mt-4 mb-4" repeat="no repeat" src="{{ url('img/coches.jpg') }}" style="width: 225px height= 126px">
    </div>
<!--............................................................................................................... -->
<div class="col-xl-1 colmod22" ></div>
<!--............................................................................................................... -->
            <div class="col-xl-7 colmod12 shadow" >
             
            <h3>SE ELIMINARA DE FORMA PERMANENTE EL PROPIETARI@<h3>    
            
            <table>
                <tr>
                    <td><input size="2"   placeholder="id"></td>
                    <td><input size="10"  placeholder="nombre"></td>
                </tr>
                
                <form action="{{route('propietarios.update', $propietario)}}" method="POST">           
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>       @csrf
                    <input type="hidden" name="_method" value="delete"/>                  @method('delete')
                    <tr>
                        <td><input style="background-color: white" type="text"  size="2"   name="id"  disabled  value="{{$propietario->id}}"></td>
                        <td><input style="background-color: white" type="text"  size="10"  name="nombre"  value="{{$propietario->nombre}}"></td>
                        <td><button type="submit">Eliminar</button></td>
                    </tr>
                </form>            
            </table>
                        <a class="btn btn-outline-primary btn-sm " href="{{route('propietarios.listado')}}" role="button">Volver</a>
                    
                        @error('nombre')<small>*{{$message}}</small>@enderror


            </div> 
<!--............................................................................................................... -->               
     </div><!-- row -->
   </div><!--mod1 -->


<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
         <div class="Mod1">
             <div class="row rowmod1">   
<!--............................................................................................................... -->               
             <div class="col-xl-3 colmod11 shadow" ></div> 
<!--............................................................................................................... -->
            <div class="col-xl-3 colmod22" ></div>
<!--............................................................................................................... -->
            <div class="col-xl-3 colmod12" ></div>
<!--............................................................................................................... -->
        </div><!-- row -->
       </div><!--mod1 -->
<!-- ******************************************************************************************************************* -->

</div><!-- container -->
@endsection
