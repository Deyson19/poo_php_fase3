<?php

class Persona
{
     //Propiedades 
     public $nombre;
     public $apellido;
     public $edad;

     //palabras reservadas 
     //y luego se define el nombre()
     public function usuario()
     {
          echo "Mi nombre es: " . $this->nombre . " <br>";
          echo "Mi apellido es: " . $this->apellido . "";
     }
}

#region Crear objeto
//Instanciar una clase y acceder a sus propiedades
$crearUsuario = new Persona();
//asignar valores a las propiedades de la clase
$crearUsuario->nombre = "Deyson";
$crearUsuario->apellido = "Vente";
//llamar a la funcion/metodo de la clase
echo $crearUsuario->usuario();
#endregion

?>


