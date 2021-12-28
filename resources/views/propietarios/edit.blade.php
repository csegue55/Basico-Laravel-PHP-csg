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
       <button class="boton1" style="margin-top:8px"><a href="{{route('coches.listado')}}"; style="color:white"; >Volver</a></button><br>
       <img class="float-right  ml-1 mt-4 mb-4" repeat="no repeat" src="{{ url('img/coches.jpg') }}" style="width: 225px height= 126px">
    </div>
<!--............................................................................................................... -->
<div class="col-xl-1 colmod22" ></div>
<!--............................................................................................................... -->
    <div class="col-xl-7 colmod12 shadow" >
            <h3>MODIFICAR DATOS PROPIETARIO: {{$propietarios->nombre}}<h3>    
            
            <table>
                <tr>
                    <td><input size="4"    disabled placeholder=" id"></td>
                    <td><input size="20"   disabled placeholder="nombre"></td>
                </tr>
                
                <form action="{{route('propietarios.update', $propietarios)}}" method="post">           
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>    @csrf
                    <input type="hidden" name="_method" value="PUT"/>       @method('put')
                    <tr>
                        <td><input style="background-color: white" type="text"  size="" name="id"  disabled value="{{$propietarios->id}}"></td>
                        <td><input style="background-color: white" type="text"  size="20" name="nombre" value="{{$propietarios->nombre}}"></td>
                        <td><button type="submit">Editar</button></td>
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
         <div class="Mod1 mt-4">
             <div class="row rowmod1">   <!-- d-block: los pone verticales -->
<!--............................................................................................................... -->               
             <div class="col-xl-3 colmod11 shadow" >
                    <!-- .................................................................................... -->
                     
                     <?php 
                        $coche= Coche::all();
                     ?>    
                    <!-- .................................................................................... -->
                    <h6>Lista actual de coches por propietario</h6><hr>
                              @foreach($coche as $coche)  
                                  <strong>{{$coche->id_propietario}} - {{$coche->propietario->nombre}} - </strong> 
                                  <strong>{{$coche->marca}}</strong> 
                                  <strong>{{$coche->modelo}}</strong> 
                                  <strong>{{$coche->color}}</strong> 
                                  <br>
                              @endforeach
            </div> 
<!--............................................................................................................... -->
            <div class="col-xl-1 colmod22" ></div>
<!--............................................................................................................... -->
            <div class="col-xl-3 colmod12" >
                    <!-- .................................................................................... -->
                     
                    <?php 
                        $t_id= $propietarios->id;
                        $coche2= Coche::where('id_propietario', $propietarios->id)->get();
                     ?>    
                    <!-- .................................................................................... -->
                    <h6>Lista actual de coches de: {{$propietarios->nombre}} </h6><hr>
                              @foreach($coche2 as $coche2)  
                                  <strong>{{$coche2->id_propietario}} - {{$coche2->propietario->nombre}} - </strong> 
                                  <strong>{{$coche2->marca}}</strong> 
                                  <strong>{{$coche2->modelo}}</strong> 
                                  <strong>{{$coche2->color}}</strong> 
                                  <br>
                              @endforeach



            </div>
<!--............................................................................................................... -->
        </div><!-- row -->
       </div><!--mod1 -->
<!-- ******************************************************************************************************************* -->

</div><!-- container -->
@endsection
