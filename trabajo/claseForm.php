<?php 
class OBJElement{
    
 #region Constructor
function __construct()
{
     
}
#endregion

#region componentes del input
public $mensajeInfo;
public $inicio;
function set_textoEntrada($mensajeInfo, $inicio){
     $this->mensajeInfo = $mensajeInfo;
     $this->inicio = $inicio;
}
function textoEntrada(){
     return $this->mensajeInfo ;
     return $this->inicio ;
}
#endregion


function  CrearCheckbox($lista,$nombre){
     $opcion = "";
     foreach ($lista as $valor) {
          $texto = "<label>".$valor."</label>";   
          $opcion ="<input type='checkbox' name='$nombre' value='$valor' class='form-check-input'>". $texto ."<br>".$opcion;
     }
     return $opcion;
} 
}
