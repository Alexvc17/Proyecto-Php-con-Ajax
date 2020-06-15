<?php

$Nom= $_POST['nombre'];
$Ape = $_POST['apellido'];
$Tel = $_POST['telefono'];
$Pais = $_POST['pais'];
$Dir = $_POST['dir'];
$Email =$_POST['email'];
$Usuario =$_POST['usuario'];
$Tipo =$_POST['inst'];
$Material =$_POST['mate'];
$Color =$_POST['color'];

?>



<div class="media" >
    
  <img class="d-flex align-self-start mr-3" src="imagenes/4.jpg" alt="Generic placeholder image">
  <div class="media-body">
      <br>
  <h5 class="mt-0 font-weight-bold"><?php echo $Usuario?></h5>
    <hr class="hr-dark">

    <p class="note note-info">

    
        <?php
            $datos = array(
                "<strong>Nombre </strong> "=>"$Nom ", 
                "
                <strong>Apellido </strong>"=>"$Ape",
                "
                <strong>Tel </strong>"=>"$Tel",
                "
                <strong>Pais </strong>"=>"$Pais",
                "
                <strong>Dir </strong>"=>"$Dir", 
                "
                <strong>Email </strong>"=>"$Email");

            foreach($datos as $x => $val) {
            echo "$x :  $val<br>";
            }
        ?>

    </p>


        

    <h5 class="mt-0 font-weight-bold">Tus preferencias</h5>
    <hr class="hr-dark">


<p class="note note-info">   
    <?php
            $preferencias = array(
                "<strong>Intrumento </strong> "=>"$Tipo", 
                "
                <strong>Material </strong>"=>"$Material",
                
                "
                <strong>Color </strong>"=>"$Color");

            foreach($preferencias as $x => $val) {
            echo "$x : $val<br>";
            }
     ?>

</p>

    
    
    

  </div>
</div>


