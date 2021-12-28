<?php
 use App\Models\Propietario;
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
       <button class="boton1" style="margin-top:8px"><a href="{{route('coches.listado')}}"; style="color:white"; >Volver</a></button><br>
       <img class="float-right  ml-1 mt-4 mb-4" repeat="no repeat" src="{{ url('img/coches.jpg') }}" style="width: 225px height= 126px">
    </div>
<!--............................................................................................................... -->
<div class="col-xl-1 colmod22" ></div>
<!--............................................................................................................... -->
            <div class="col-xl-7 colmod12 shadow" >
            <h3>MODIFICAR DATOS COCHES<h3>    
            
            <table>
                <tr>
                    <td><input size="2"   disabled placeholder="id"></td>
                    <td><input size="10"  disabled placeholder="Propietario"></td>
                    <td><input size="10"  disabled placeholder="Marca"></td>
                    <td><input size="10"  disabled placeholder="Modelo"></td>
                    <td><input size="10"  disabled placeholder="Color"></td>
                </tr>
                
                <form action="{{route('coches.update', $coches)}}" method="post">           
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>    @csrf
                    <input type="hidden" name="_method" value="PUT"/>       @method('put')
                    <tr>
                        <td><input style="background-color: white" type="text"  size="2"   name="id"              disabled value="{{$coches->id}}"></td>
                        <td><input style="background-color: white" type="text"  size="10"  name="id_propietario"  value="{{$coches->id_propietario}}"></td>
                        <td><input style="background-color: white" type="text"  size="10"  name="marca"           value="{{$coches->marca}}"></td>
                        <td><input style="background-color: white" type="text"  size="10"  name="modelo"          value="{{$coches->modelo}}"></td>
                        <td><input style="background-color: white" type="text"  size="10"  name="color"           value="{{$coches->color}}"></td>
                        <td><button type="submit">Editar</button></td>
                    </tr>
                </form>            
            </table>
                        <!-- <a class="btn btn-primary" href="">Crear</a>  -->
                        <a class="btn btn-outline-primary btn-sm " href="{{route('coches.listado')}}" role="button">Volver</a>
                    
                        @error('id_propietario')<small>*{{$message}}</small>@enderror
                        @error('marca')<small>*{{$message}}</small>@enderror
                        @error('modelo')<small>*{{$message}}</small>@enderror
                        @error('color')<small>*{{$message}}</small>@enderror


            </div> 
<!--............................................................................................................... -->               
     </div><!-- row -->
   </div><!--mod1 -->


<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
         <div class="Mod1">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
<!--............................................................................................................... -->               
             <div class="col-xl-3 colmod11 shadow" >
                    <!-- .................................................................................... -->
                     <?php 
                        $pro= Propietario::get();
                     ?>    
                    <!-- .................................................................................... -->
                    <h6>Lista actual Propietarios de coches</h6><hr>
                              @foreach($pro as $pro)  
                                  <strong>{{$pro->id}}</strong> 
                                  <strong>{{$pro->nombre}}</strong> 
                                  <br>
                              @endforeach
            </div> 
<!--............................................................................................................... -->
            <div class="col-xl-3 colmod22" ></div>
<!--............................................................................................................... -->
            <div class="col-xl-3 colmod12" >

                <div class="card mt-3" style="width:200px">
                    <div class="card-header bg-muted">
                        <p class="text-center">Propietario</p>
                    </div>
                    <img src="{{ url('img/johndoe.jpg') }}">
                    <div class="card-body bg-secondary">
                        <h3 class="card-title">{{$coches->propietario->nombre}}</h3>
                        <!-- <p class=" card-text"> Descripción persona</p> -->
                        <!-- <a href="#" class="btn btn-primary">Ver Perfil</a> -->
                    </div>
                    <!--
                    <div class="card-footer bg-muted">
                        <p> Pie tarjeta </p>
                    </div>
                    -->
                </div>

            </div>
<!--............................................................................................................... -->
        </div><!-- row -->
       </div><!--mod1 -->
<!-- ******************************************************************************************************************* -->

</div><!-- container -->
@endsection
