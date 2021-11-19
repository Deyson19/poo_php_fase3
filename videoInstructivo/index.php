<?php 

?>

<!DOCTYPE html>
<html lang="es">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
</head>

<body>
     <?php
     include("claseForm.php");
     $Productos = array("Camisas", "Pantalonetas", "Tenis", "Sacos", "Busos");
     $Genero = array("Masculino", "Femenino");
     ?>

     <form action="recibeVariables.php" method="POST"  >
          <?php
          $ElementoFrm = new OBJElement();
          echo $ElementoFrm->CrearLista($Productos, "producto");
          echo "<br>";
          echo $ElementoFrm->CrearInputRadio($Genero, "genero");
          echo "<br>";
          ?>

          <input type="submit" value="Enviar">
          <input type="reset" value="Borrar">
     </form>
</body>

</html>