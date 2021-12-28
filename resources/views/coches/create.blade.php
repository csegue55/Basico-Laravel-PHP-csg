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
    <div class="col-xl-3 mt-3 colmod11 shadow" >
        <button class="boton1" style="margin-top:8px"><a href="{{route('coches.listado')}}"; style="color:white"; >Volver</a></button><br>
        <img class="float-center  ml-4 mt-4" repeat="no repeat" src="{{ url('img/coches.jpg') }}" style="width: 225px height= 126px">

                       
    </div>
<!--............................................................................................................... -->
<!--............................................................................................................... -->
    <div class="col-xl-1 colmod22" >
            <?php
            $pro2= Propietario::get();
            ?>
    </div>
<!--............................................................................................................... -->
    <div class="col-xl-5 colmod12 shadow" >
    <h3>EDICION COCHES<h3>

            <table FRAME="void" RULES="rows">
            <tr>
                    <td><input size="10"  placeholder="Propietario"></td>
                    <td><input size="10"  placeholder="Marca"></td>
                    <td><input size="10"  placeholder="Modelo"></td>
                    <td><input size="10"  placeholder="Color"></td>
            </tr>
            
            <form action="{{route('coches.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />       
                <tr>
                    <!-- <td><input  style="background-color: white" type="text" size="10" name="id_propietario" value="{{old('id_propietario')}}"></td>  -->
                    <td>
                            <select style="width:95px" name="id_propietario">
                                    @foreach($pro2 as $t_pro2)
                                        <option value={{$t_pro2->id}}>{{$t_pro2->nombre}}</option>
                                    @endforeach
                            </select>
                    </td> 
                    <td><input  style="background-color: white" type="text" size="10" name="marca"  value="{{old('marca')}}"></td>          
                    <td><input  style="background-color: white" type="text" size="10" name="modelo" value="{{old('modelo')}}"></td>
                    <td><input  style="background-color: white" type="text" size="10" name="color"  value="{{old('color')}}"></td> 
                    <td><button class="btn btn-outline-primary btn-sm "  type="submit">Enviar</button></td>
                </tr>
            </form>
            </table>    

                        <p style="font-size: 0.8em; color:red;"><strong>@error('id_propietario')<small>*{{$message}}</small>@enderror</strong></p>
                        <p style="font-size: 0.8em; color:red;"><strong>@error('marca')<small>*{{$message}}</small>@enderror</strong></p>
                        <p style="font-size: 0.8em; color:red;"><strong>@error('modelo')<small>*{{$message}}</small>@enderror</strong></p>
                        <p style="font-size: 0.8em; color:red;"><strong>@error('color')<small>*{{$message}}</small>@enderror</strong></p>
    </div> 
<!--............................................................................................................... -->               
           </div><!-- row -->
       </div><!--mod1 -->

<!-- ******************************************************************************************************************* -->

</div> <!-- container -->



@endsection