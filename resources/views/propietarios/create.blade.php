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
        <button class="boton1" style="margin-top:8px"><a href="{{route('propietarios.listado')}}"; style="color:white"; >Volver</a></button><br>
        <img class="float-center  ml-4 mt-4" repeat="no repeat" src="{{ url('img/coches.jpg') }}" style="width: 225px height= 126px">

                       
    </div>
<!--............................................................................................................... -->
<!--............................................................................................................... -->
    <div class="col-xl-1 colmod22" >    </div>
<!--............................................................................................................... -->
    <div class="col-xl-5 colmod12 shadow" >
    <h3>EDICION PROPIETARIOS<h3>

            <table FRAME="void" RULES="rows">
            <tr>
                    <td><input size="20"  placeholder="Nombre"></td>
            </tr>
            
            <form action="{{route('propietarios.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />       
                <tr>
                    <td><input  style="background-color: white" type="text" size="20" name="nombre" value="{{old('nombre')}}"></td>
                    <td><button class="btn btn-outline-primary btn-sm "  type="submit">Enviar</button></td>
                </tr>
            </form>
            </table>    

            <p style="font-size: 0.8em; color:red;"><strong>@error('nombre')<small>*{{$message}}</small>@enderror</strong></p>
    </div> 
<!--............................................................................................................... -->               
           </div><!-- row -->
       </div><!--mod1 -->

<!-- ******************************************************************************************************************* -->

</div> <!-- container -->



@endsection