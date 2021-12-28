/* ***************************************************************************************************************************
reservas/header.blade.php  navbar - MENU
/* ********************************************************************************************************************* */
 
 /* boton hamburguesa */
 .navbar-toggler{
  width: 47px;
  height: 34px;
  background-color: #7eb444;
  border:none;
}
.navbar-toggler .line{
  width: 100%;
  float: left;
  height: 2px;
  background-color: #fff;
  margin-bottom: 5px;
}

/*menu */
 .navbar { 
      box-shadow: 0 2px 4px 0 rgba(0,0,0, 0.5); 
      height: 50px;
      font-family: 'Staatliches', cursive;
      color:  rgb(228, 225, 222);
}
/*letras*/
.nav-item a{
      color: rgb(228, 225, 222);
      margin-left: 60px;
}

/* ************************************************************************************************************************ */
 /* Submenu debajo de navbar - MENU*/
/* ************************************************************************************************************************ */
.rowtasca{
      margin: 4px 0px 0px 0px;
      background-color: #000;
      box-shadow: 3px 2px 2px 1px rgba(0,0,0, 0.5);
      height: 22px;
      text-align: center;
}

.centrar{
     text-align: center;
     font-family: 'Staatliches', cursive;
     color: rgb(228, 225, 222);
     font-size: medium;
     margin-top: 4px;
}


/* ***************************************************************************************************************************
reservas/home.blade.php
/* *************************************************************************************************************************** */
/* Imagen encima de otra */
.modimg {
  position: relative;
  width: 100%;
  background-size: cover;
  margin-top: 10px;
}  
.quiero{
  position: relative;
  margin-top: -28%;
  left: 0%;
}

/* texto interior EB Garamond */
.modtext1{
  font-family: 'EB Garamond', serif;
  font-weight: 600;
  font-size: 2em;
}

.modvacio{
  font-family: 'EB Garamond', serif;
  font-weight: 600;
  font-size: 1em;
}

.boton1  {
  background-color: #174c8a;
  border: 0px;
  width: 100%;
}

/*SLIDER AUTOMATICO CON 4 IMAGENES*/

.slider         { border: 0px solid red; }
.slider ul      { border: 0px solid blue;}
.slider li      { border: 0px solid yellow;}
.slider p       { border: 0px solid black;}


.slider         { width: 691px; height: 299px; margin-top: 30px; overflow:hidden;}
.slider         { box-shadow: 0px 0px 0px 0px #EFC076,   0px 0px 0px;  }   /* Marco + Sombra * Desp drech;  10-5-5*/ 
.slider ul      {
    display: flex;
    width: 1000%;
    padding: 0;
    animation: cambio 40s infinite alternate;      /* infinite = repeticiones infinitas; alternate = volver de atras a delante  */
}

.slider li      { width: 100%; list-style: none;}
.slider img     { width: 100%;}

@keyframes cambio {              /*Paradas y movimientos en % de tiempo */

    0% {margin-left: 0;}        /* 20% de 20 segundos ( animation) = 4 segundos estará la 1ª imagen */
    5% {margin-left: 0;}
                               /* Del 20% al 25% es el tiempo de rotación entre las dos imágenes = 5s * 20% = 1s */
   9% {margin-left: -100%;}
   14% {margin-left: -100%;}

   18% {margin-left: -200%;}
   23% {margin-left: -200%;}

   27% {margin-left: -300%;}
   32% {margin-left: -300%;}

   36%  {margin-left: -400%;}
   41% {margin-left:  -400%;}

   45%  {margin-left: -500%;}
   50% {margin-left:  -500%;}

   54%  {margin-left: -600%;}
   59% {margin-left:  -600%;}

   63%  {margin-left: -700%;}
   68% {margin-left:  -700%;}

   72%  {margin-left: -800%;}
   77% {margin-left: -800%;}

   81%  {margin-left: -900%;}
   100% {margin-left: -900%;}

}




















/* ************************************************************************************************************************ */
/* Menu vertical Izquierdo    Mod1 - colmod11 */
/* ************************************************************************************************************************ */
.Mod1{
    margin: 5px 0px 0px 5px;
}
.colmod11 {                                     /* colmod11: columna Opciones */
    background-color: #CACFD2; /*navy;*/
}
.colmod11 p{
    color: #000;
    line-height: 10px;
    margin-top: 4px;
    font-size: 0.8em;
    margin-left: -25px;
}
.colmod11 hr{
  margin-left: -25px;
}
.colmod11 [type="submit"]{                         /* quito marco a las opciones del menú type="submit"*/
    background-color: #CACFD2; /*navy;*/
    border: 0px;
    margin-left: -30px;
    color: #000;
    font-size: 0.8em;
}
/* .............................................................................................................. */
/* Pantalla salida resultados (Decha menú Vertical):   colmod12 */

.colmod12{                                                                       /* General pantalla resultados */
    font-size: 0.8em;
    color: #000;
    margin-top: 20px;
    background-color: #CACFD2; /*navy;*/
}
.colmod12 [type="submit"]{
    border-radius: 6px;  
    background: transparent;
    margin-left: 4px;
}
.colmod12 [type="submit"]:hover {
  background-color: #008CBA;
  color: white;
}
.colmod15 [type="submit"]{                          /* dashboard.blade.php */    
  
  border-radius: 4px;  
  background: #91a9b1;
  margin-left: 4px;
  }
/* ********************************************************************************************************************* */
.colmod21{                                                                       /* General pantalla resultados */
  font-size: 0.8em;
  color: #000;
  margin-top: 20px;
  background-color:transparent;
}







/******************************************************************************************************/
/*  
/******************************************************************************************************/





/******************************************************************************************************/
/*
/******************************************************************************************************/

      

<div class="container-fluid">
<!-- ******************************************************************************************************************* -->
<!-- MOD 1: -->
<div class="Mod1">
<div class="row rowmod1">   
<!--............................................................................................................... -->
<div class="col-xl-3 mt-3 colmod11 shadow" >
        <button class="boton1" style="margin-top:8px"><a href="{{route('coches.listado')}}"; style="color:white"; >Acceso a Programa</a></button><br>
        <img class="float-center  ml-4 mt-4" repeat="no repeat" src="{{ url('img/clientes.jpg') }}" style="width: 225px height= 126px">
    
        <p style="font-size: 0.8em; color:red;"><strong> @error('id_propietario')*{{$message}}<br>@enderror</strong></p>
        <p style="font-size: 0.8em; color:red;"><strong> @error('marca')*{{$message}}<br><br>@enderror<strong></p>
        <p style="font-size: 0.8em; color:red;"><strong> @error('modelo')*{{$message}}<br><br>@enderror</strong></p>
        <p style="font-size: 0.8em; color:red;"><strong> @error('color')*{{$message}}<br><br>@enderror</strong></p>    
</div>
<!--............................................................................................................... -->
<div class="col-xl-1 colmod22" >safadgadsga</div>
<!--............................................................................................................... -->

<div class="col-xl-5 colmod12 shadow" >
        <h3>EDICION COCHES<h3>
        <table>
            <tr>
                    <td><input size="2"   placeholder="id"></td>
                    <td><input size="10"  placeholder="Propietario"></td>
                    <td><input size="10"  placeholder="Marca"></td>
                    <td><input size="10"  placeholder="Modelo"></td>
                    <td><input size="10"  placeholder="Color"></td>
            </tr>
            
            <form action="{{route('coches.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />       
                <tr>
                    <td><input type="text" size="10" name="id_propietario" value="{{old('id_propietario')}}"></td>  
                    <td><input type="text" size="10" name="marca"  value="{{old('marca')}}"></td>          
                    <td><input type="text" size="10" name="modelo" value="{{old('modelo')}}"></td>
                    <td><input type="text" size="10" name="color"  value="{{old('color')}}"></td>          
                    <td><button type="submit">Enviar</button></td>
                </tr>
            </form>
            </table>
            
</div>
<!--............................................................................................................... -->
</div><!-- row -->
</div><!--mod1 -->
<!--............................................................................................................... -->
</div> <!-- container -->






                       