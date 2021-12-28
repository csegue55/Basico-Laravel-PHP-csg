@extends('plantillas.header')
@section('title','Evotic')

@section('content')


<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
<div class="Mod1">
<div class="row rowmod1">   
<!--............................................................................................................... -->
    <div class="col-xl-3 mt-3 colmod11 shadow" >
        <button class="boton1" style="margin-top:8px"><a href="{{route('coches.home')}}"; style="color:white"; >Inicio</a></button><br>
        <img class="float-center  ml-4 mt-4" repeat="no repeat" src="{{ url('img/coches.jpg') }}" style="width: 225px height= 126px">
    </div>
<!--............................................................................................................... -->
<!--............................................................................................................... -->
    <div class="col-xl-1 colmod22" ></div>
<!--............................................................................................................... -->
    <div class="col-xl-5 colmod12 shadow" >
            <h3>LISTADO DE COCHES<h3>    

          
            <table FRAME="void" RULES="rows">
                <tr>
                    <td><input size="2"   disabled placeholder="id"></td>
                    <td><input size="10"  disabled placeholder="Propietario"></td>
                    <td><input size="10"  disabled placeholder="Marca"></td>
                    <td><input size="10"  disabled placeholder="Modelo"></td>
                    <td><input size="10"  disabled placeholder="Color"></td>
                </tr>
                @foreach($coches as $coche)
                <tr>
                    <td><input type="text" disabled size="2"   name="id"          value="{{$coche->id}}"></td>
                    <td><input type="text" disabled size="10"  name="propietario" value="{{$coche->id_propietario}}"></td>
                    <td><input type="text" disabled size="10"  name="marca"       value="{{$coche->marca}}"></td>
                    <td><input type="text" disabled size="10"  name="modelo"      value="{{$coche->modelo}}"></td>
                    <td><input type="text" disabled size="10"  name="color"       value="{{$coche->color}}"></td>
                    <td><a href="{{route('coches.edit', $coche)}}" style="margin-right: 10px">Editar</a></td>
                    <td><a href="{{route('coches.show', $coche)}}">Eliminar</a></td>
                </tr>
                @endforeach
            </table>    
                    <a class="btn btn-outline-primary btn-sm " href="{{route('coches.create')}}" role="button">Crear</a>
                    <!--<a class="btn btn-outline-success btn-sm " href="" role="button">Volver a alta de coches</a>    -->
    </div> 
<!--............................................................................................................... -->               
           </div><!-- row -->
       </div><!--mod1 -->

<!-- ******************************************************************************************************************* -->

</div> <!-- container -->



@endsection    