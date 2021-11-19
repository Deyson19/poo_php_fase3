<?php 
class OBJElement{
    
 #region Constructor
function __construct()
{
     
}
#endregion


function CrearLista($lista, $nombre){
     
     $cadenaInicio= "<select name='$nombre'>";

     $opcion = " ";
     foreach ($lista as $valor) {
          $opcion = "<option>".$valor."</option>".$opcion;
     }
     $cadenaFinal = "</select>";
     $listaSelect = $cadenaInicio.$opcion.$cadenaFinal;
     return $listaSelect;
}
function  CrearInputRadio($lista,$nombre){
     $opcion = "";
     foreach ($lista as $valor) {
          $texto = "<label>".$valor."</label>";
          $opcion = $texto."<input type='radio' name='$nombre' value='$valor'>".$opcion;
          
     }
     return $opcion;
} 
}
