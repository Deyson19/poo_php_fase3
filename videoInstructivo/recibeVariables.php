<?php 
echo "<h4>Variables recibidas: </h4>";
foreach ($_POST as $campo=> $valor) {
     echo "<BR>".$campo." : ".$valor;
}

?>