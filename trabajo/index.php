<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ejercicio de Transferencia</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
     <div class="container">
          <script>
               var campoNumeroDoc = document.getElementById('campoData').value;

               function validar() {
                    var campoNumeroDoc = document.getElementById('campoData').value;
                    //Test Telefono
                    if (campoNumeroDoc == null || campoNumeroDoc.length == 0 || isNaN(campoNumeroDoc)) {
                         alert('ERROR: Debe ingresar un número válido ');
                         location.reload();
                         return false;
                    }
               }

               function offFocus() {
                    var ñ = "Debes llenar el campo para enviar el documento";
                    var z = document.getElementById("campoData").value;
                    if (campoNumeroDoc == null || campoNumeroDoc.length == 0 || isNaN(campoNumeroDoc)) {
                         document.getElementById("campoData").style.borderColor = "red";
                         document.getElementById("campoData").style.backgroundColor = "red";
                    } else {
                         console.info("todo perfectamente equilibrado");
                         document.getElementById("campoData").style.borderColor = "black";
                         document.getElementById("campoData").style.backgroundColor = "#D0DFE5";
                    }
               }

               function recargar() {
                    location.reload();
               }
          </script>

          <?php
          include("claseForm.php");
          $serviciosBanco = array("Prestamos", "Transferencia", "Atención personalizada");
          $mensaje = "Introduzca su número de cédula: ";
          $inicio = "<input id='campoData' type='text'  onblur='offFocus()' name='documentoUsuario' required>" . "<br>"
          ?>
          <h1 class="text-info text-center">Formulario para enviar información</h1>

          <form action="recibeVariables.php" method="POST" class="form-group" onsubmit="validar()">
               <?php
               $ElementoFrm = new OBJElement();
               echo "<div class='form-group'>";
               echo $ElementoFrm->mensajeInfo = $mensaje;
               echo $ElementoFrm->inicio = $inicio;
               echo "</div>";
               echo "<div class='form-group form-check'>";
               echo $ElementoFrm->CrearCheckbox($serviciosBanco, "Servicio");
               echo "</div>";
               ?>
               <p id="showMessage"></p>
               <input type="submit" value="Enviar" class="btn btn-primary" onclick="validar()">
               <input type="reset" value="Borrar" class="btn btn-danger" onclick="recargar()">
          </form>
     </div>
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>

</html>