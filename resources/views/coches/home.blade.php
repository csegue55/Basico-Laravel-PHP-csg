<?php
use App\Models\Coche;
use App\Models\Propietario;
?>


@extends('plantillas.header')
@section('title','Evotic')

@section('content')
<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
<div class="Mod1 mt-">
<div class="row rowmod1">   
<!--............................................................................................................... -->
    <div class="col-xl-3 mt-3 colmod11 shadow" >
       <button class="boton1" style="margin-top:8px"><a href="{{route('coches.listado')}}"; style="color:white"; >Acceso a coches</a></button><br>
       <button class="boton1" style="margin-top:8px"><a href="{{route('propietarios.listado')}}"; style="color:white"; >Acceso a Propietarios</a></button><br>
       <button class="boton1" style="margin-top:8px"><a href="{{route('reservas.iniciar')}}"; style="color:white"; >Login</a></button><br>
       <button class="boton1" style="margin-top:8px"><a href="{{route('roles.listado')}}"; style="color:white"; >Administrar Roles</a></button><br>

    </div>
<!--............................................................................................................... -->
    <div class="col-xl-1 colmod22" ></div>
<!--............................................................................................................... -->
    <div class="col-xl-2 colmod12 shadow" >
        <h5>LISTADO PROPIETARIOS</h5>
        <?php
        $propietarios2= Propietario::all();
        ?>
        @foreach($propietarios2 as $propietario2)
            {{$propietario2->id}}
            {{$propietario2->nombre}}
            <br>
        @endforeach
    </div>    
    
<!--............................................................................................................... -->
    <div class="col-xl-1 colmod22" ></div>
<!--............................................................................................................... -->
    <div class="col-xl-3 colmod12" >
    <h5>LISTADO COCHES</h5>
        <?php
        $coches2= Coche::all();
        ?>

        <table>
        <tr>
            <td><input size="1"><strong>id</strong></td>
            <td><input size="4"><strong>id_pro</strong></td>
            <td><input size="10"><strong>modelo</strong></td>
            <td><input size="10"><strong>marca</strong></td>
            <td><input size="10"><strong>color</strong></td>    
        </tr>
        </table>
        @foreach($coches2 as $coche2)
        
        <table>
        <tr>
            <td><input size= 1px; value="{{$coche2->id}}"></td>
            <td><input size="4"   value="{{$coche2->id_propietario}}"></td>
            <td><input size="10"  value="{{$coche2->modelo}}"></td>
            <td><input size="10"  value="{{$coche2->marca}}"></td>
            <td><input size="10"  value="{{$coche2->color}}"></td>
        </tr>
        </table>    
        @endforeach

    </div> 
<!--............................................................................................................... -->               
     </div><!-- row -->
   </div><!--mod1 -->




<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
        <div class="Mod2">
             <div class="row rowmod1">   
<!--............................................................................................................... -->               
        <div class="col-xl-3 colmod11 ml-1" ></div> 
<!--............................................................................................................... -->
        <div class="col-xl-1 colmod22" ></div>
<!--............................................................................................................... -->
        <div class="col-xl-2" >
              <button class="boton1" style=""><a href="{{route('propietarios.listado')}}"; style="color:white"; >Acceso a Propietarios</a></button><br>
        </div>
<!--............................................................................................................... -->
        <div class="col-xl-1" ></div>            
<!--............................................................................................................... -->

        <div class="col-xl-2" >
              <button class="boton1" style=""><a href="{{route('coches.listado')}}"; style="color:white"; >Acceso a Coches</a></button><br>
        </div>
<!--............................................................................................................... -->        
        </div><!-- row -->
       </div><!--mod1 -->
<!-- ******************************************************************************************************************* -->



<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
        <div class="Mod1">
        <div class="row rowmod1">   

<!--............................................................................................................... -->               
        <div class="col-xl-3 mt-2 colmod11" >
          <img class="float-right mr-5 mt-4 mb-4" repeat="no repeat" src="{{ url('img/coches.jpg') }}" style="width: 225px height= 126px">     
        </div> 
<!--............................................................................................................... -->
        <div class="col-xl-1 colmod22" ></div>
<!--............................................................................................................... -->        

<!--............................................................................................................... -->
        <div class="col-xl-6 colmod12" >
        <h5>LISTADO COCHES Y PROPIETARIOS</h5>
            <?php
            $coches= Coche::all();
            ?>
      


        @foreach($coches as $coche)
        
            {{$coche->id}} -
            {{$coche->id_propietario}} -
            {{$coche->propietario->nombre}} ---
            {{$coche->modelo}}
            {{$coche->marca}}
            {{$coche->color}}
            <br>
        @endforeach




     
        







        </div>
<!--............................................................................................................... -->
        </div><!-- row -->
       </div><!--mod1 -->

</div><!-- container -->




@endsection