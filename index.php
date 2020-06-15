<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Aplicacion Ajax, Php</title>
  <!-- MDB icon -->
 <?php include 'estilos.php';?>
 

</head>


<body>


<!--Header-->
<header>

  <nav class="navbar navbar-expand-lg navbar-dark elegant-color-dark">
    <a class="navbar-brand" href="#"><img src="imagenes/logo.png" width="270" height="46"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#index.html">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">¡Instrumentos nuevos!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Promociones</a>
        </li>
      </ul>
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </nav>

</header>
<!--Header-->


<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="imagenes/1.jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">¡NUEVOS INTRUMENTOS Y ACCESORIOS!</h3>
        <p>Se el primero en tener lo ultimo del mercado</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="imagenes/2.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">¡NUEVOS INTRUMENTOS Y ACCESORIOS!</h3>
        <p>Se el primero en tener lo ultimo del mercado</p>
      </div>
    </div>
    <div class="carousel-item">
      
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="imagenes/3.jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">¡NUEVOS INTRUMENTOS Y ACCESORIOS!</h3>
        <p>Se el primero en tener lo ultimo del mercado</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
 <br>
 <br>

 <!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

 <div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">



<form class="text-center border border-light p-3" action="procesos.php" method="POST" id="form" name="form">

<p class="h4 mb-4">Tus Datos</p>
<div class="form-row mb-4">

        <div class="col">
            <!-- First name -->
                
              <div class="md-form mb-0">
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                    <label for="contact-name" class="">Nombre</label>
            </div>

            <div class="md-form mb-0">
                    <input type="text" id="apellido" name="apellido" class="form-control" required>
                    <label for="contact-apellido" class="">Apellido</label>
            </div>

            <div class="md-form mb-0">
                    <input type="text" id="telefono" name="telefono" class="form-control" required>
                    <label for="contact-telefono" class="">Telefono</label>
            </div>

        </div>

        <div class="col">
            <!-- Last name -->


            <div class="md-form mb-0">
                    <input type="text" id="pais" name="pais" class="form-control" required>
                    <label for="contact-pais" class="">Pais</label>
            </div>

            <div class="md-form mb-0">
                    <input type="text" id="dir" name="dir" class="form-control" required>
                    <label for="contact-direccion" class="">Direccion</label>
            </div>

            <div class="md-form mb-0">
                    <input type="email" id="email" name="email" class="form-control" required>
                    <label for="contact-email" class="">Email</label>
            </div>
                      
        </div>
  </div>

<!-- ||||||||||||||||||||||| PREFERENCIAS ||||||||||||||||||||-->

<p class="h4 mb-4">Preferencias</p>
<div class="form-row mb-4">
        <div class="col">
            <!-- First name -->


            
<!-- Default input -->
<label for="exampleForm2">Nombre de usuario</label>
<input type="text" id="usuario" name="usuario" class="form-control"  required>



<label>Instrumento</label>
<br>
<select class="browser-default custom-select mb-4" id="inst" name="inst">
    <option value="" disabled>Elije uno</option>
    <option value="Guitarra" selected>Guitarra</option>
    <option value="Bajo">Bajo</option>
    <option value="Violin">Violin</option>
    <option value="Piano">Piano</option>
    <option value="Bateria">Bateria</option>
    <option value="Clarinete">Clarinete</option>
</select>
        
        </div>
        <div class="col">
            <!-- Last name -->
      
<label>Material</label>
<br>
<select class="browser-default custom-select mb-4" id="mate" name="mate">
    <option value="" disabled>Elije uno</option>
    <option value="Acero" selected>Acero</option>
    <option value="Bronce">Bronce</option>
    <option value="Laton">Laton</option>
    <option value="Plata niquel">Plata niquel</option>
  
</select>


<br>
<br>
<!-- Default checked -->
<!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline1" name="color" value="Gris">
  <label class="custom-control-label" for="defaultInline1">Gris</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline2" name="color" value="Blanco">
  <label class="custom-control-label" for="defaultInline2">Blanco</label>
</div>

<!-- Default inline 3-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline3" name="color" value="Negro">
  <label class="custom-control-label" for="defaultInline3">Negro</label>
</div>

<!-- Send button -->




    </div>
  </div>





<div class="text-center mt-4 mb-2">
        <button class="btn btn-primary" name="Enviar" id="Enviar">Enviar
        
        </button>
</div>


  

</form>

<!--Fin formulario-->

    </div>
    <div class="col-md-3"></div>
  </div>
</div>


<br>
<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" id="respuesta">

    </div>
    <div class="col-md-2"></div>
  </div>
</div>




<br>
<br>
<br>
<!-- Footer -->
<footer class="page-footer font-small elegant-color-dark">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Informacion</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Promociones especiales</a>
          </li>
          <li>
            <a href="#!">Novedades</a>
          </li>
          <li>
            <a href="#!">¡Lo mas vendido!</a>
          </li>
          <li>
            <a href="#!">Contacte con nosotros</a>
          </li>
          <li>
            <a href="#!">Como comprar</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Mi cuenta</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Mis compras</a>
          </li>
          <li>
            <a href="#!">Mis vales descuento</a>
          </li>
          <li>
            <a href="#!">Mis descuentos</a>
          </li>
          <li>
            <a href="#!">Mis datos personales</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Categoria</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Guitarras y bajos</a>
          </li>
          <li>
            <a href="#!">Violines y cuerdas clasicas</a>
          </li>
          <li>
            <a href="#!">Bateria y percusion</a>
          </li>
          <li>
            <a href="#!">Amplificadores</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Botelin de noticias</h5>

        <form class="form-inline">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Buscar"
            aria-label="Search">
          <i class="fas fa-search" aria-hidden="true"></i>
        </form>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



</body>
</html>