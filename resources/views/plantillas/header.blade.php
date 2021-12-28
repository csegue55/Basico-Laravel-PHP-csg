<?php
if(!isset($_SESSION)) {
    session_start();
}

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">  
         <meta name="author"      content="Carlos Segué">
         <meta name="Descripción" content="Comienzo curso ITAcademy">
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,  maximum-scale=1.0, minimum-scale=1.0">
         <meta http-equiv="x-ua-compatible" content="ie-edge">
         <link rel="stylesheet" href="fonts/css/fontello.css">  <!-- iconos -->
         <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!-- Fuente: Roboto Regular 400 -->
         <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
         
         <!-- Font: Staatliches -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">

         <!-- Font: EB+Garamond -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Staatliches&display=swap" rel="stylesheet">
         
         <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">


         <title>@yield('title')</title>

 </head>
 <body>

  <!-- ******************************************************************************************************************* -->
 <!-- NAVBAR .......................................................................................................... -->
     <!-- 1.- Nombre o logo de la empresa -->
     <!-- 2.- Boton menu hamburguesa -->
     <!-- 3.- enlaces -->
     <!-- 4.- boton buscar -->

<!-- (1.-) clase navbar + expand horizontal hasta md + color texto + color backgroud + Efecto pegajoso-->     
        <nav class="navbar navbar-expand-lg navbar-danger bg-dark"> 
        
        <!-- Logo -->
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->   
        <a href="index.php" class="navbar-brand">
            <img src="{{ url('img/csglogo3.png')}}"
            style="width: 60px"
            data-toggle="modal"
            data-target="#mymodal">
        </a>

<!-- (2.-) Boton menu hamburguesa -->
           <button 
               class="navbar-toggler" 
               type="button" 
               data-toggle="collapse" 
               data-target="#navbarSupportedContent" 
               aria-controls="navbarSupportedContent" 
               aria-expanded="false" 
               aria-label="Toggle navigation">
               <!-- <span class="navbar-toggler-icon"></span>   bg-danger -->
               <span class="line"></span> 
               <span class="line"></span> 
               <span class="line"></span>
           </button>


<!-- (3.-) Enlaces -->

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="#">   <span class="sr-only">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">   </a></li>
       </ul>

<!-- (4.-) Buscar ........................................................................................................ -->
<!--            
           <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
-->            
       </div>
       </nav>

<!-- ********************************************************************************************************************* -->
<!-- MENU-2  DEBAJO NAVBAR
**************************************************************************************************************************  -->
<?php 
                if (Auth::check()) {
                    $user = Auth::user();
                    //auth()->user();
                    $usu_nom= auth()->user()->name;
                    //$id = Auth::id();
                    $_SESSION['loguin']=array();
                    $_SESSION['loguin']['u_nom']= $usu_nom;
?>                                        
                    <!-- </li>     -->
<?php
                }else{
                    $_SESSION['loguin']['u_nom']= "";
                }    

                
?>      
<div class="container-fluid" style="width:auto">
        <div class="Mod modtasca">
        <div class="row rowtasca">
<!--............................................................................................................... -->            
            <div class="col-12">
                <h5 class="centrar"> 
                    Basico-Laravel-PHP
                    <div class="float-right" >Bienvenid@ : <?php echo $_SESSION['loguin']['u_nom'];?></div>
                    <div class="float-left" ><?php echo date("d-m-Y"); ?></div>
                </h5>
            </div>
<!--............................................................................................................... -->            
        </div>
        </div>
       
    </div> <!-- container -->
<!-- ********************************************************************************************************************* -->

@yield('content')

     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>


</body>
</html>