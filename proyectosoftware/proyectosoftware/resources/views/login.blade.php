<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	  <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

     <link rel="stylesheet" href="css/preload.css">


     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>


     <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

     <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

     <script type='text/javascript' src='js/rut.js'></script>

     <script type='text/javascript' src='js/main.js'></script>

     <script type='text/javascript' src='js/modernizr.js'></script>
     


<script>

$(document).ready (function () { $('#rut').Rut({ on_error: function(){ alert('Rut incorrecto !! Ingrese un Rut Válido'); } }); }) ; 

</script>

<script> jQuery(document).ready(function($) { $("#rut").Rut(); }); </script>



</head>

<body style="background-image:url('img/restaurant.png')">

 <!--========================================================
                                  Preloading
    =========================================================-->
    

<div id="loader-wrapper">
    <div id="loader"></div>
    
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

	  
	  <div class="container" id="content" style="margin-top: 30px">
      <!-- Page Content goes here -->
      
      <div class="row">
      
      <div class="col s12 m3 12"><p></p></div>
      
      <div class="col s12 m6 18">
            
            <div class="card green lighten-5">
              
              <div class="card-image center-align">
                <h1><span class="flow-text"></span></h1>
                <img style="  height: 200px;width: 200px;" src="img/loader.png">
              </div>

              <div class="card-content">

               <div class="row">

                      @if($errors->has())
            <div class='alert alert-danger'>
                <!--recorremos los errores en un loop y los mostramos-->
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </div>
             @endif
            </div>
                
                <form name="form1" method="post" action="login">
                <div class="row">
                <div class="input-field col s10">
                <i class="mdi-action-account-circle prefix" style="color: rgb(38, 166, 154);"></i>
                <input id="nombre" name="nombre" type="text"  placeholder="Nombre" />
                </div>
                </div>
                
                <div class="row">
                <div class="input-field col s10">
                <i class="mdi-alert-error prefix" style="color: rgb(38, 166, 154);"></i>
                <input id="icon_telephone" name="contrasena" type="tel" class="validate" placeholder="CONTRASENA">
                </div>
                </div>

                <div class="row">
                <div class="input-field col s10">
                <input type="checkbox" id="test9"><label for="test9">Recordarme</label>
                </div>
                </div>
                
                 <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
              </div>

              <div class="card-action right-align">
                 <button href="#" class="btn waves-effect waves-light" type="submit" name="action">
                 Entrar
                 <i class="mdi-content-send right"></i>
                 </button>
                 </form>
              </div>

            </div>
          


      </div>
      
      <div class="col s12 m3 12"><p></p></div>
      </div>
      
      </div>


	   <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
      <script src="js/main.js"></script>

    
    {!! Form::open() !!}
{!! Form::label('name','Name:') !!}
    {!! Form::close() !!}


</body>
</html>