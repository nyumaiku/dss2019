<?php
class sinPropiedades {
   function __set($propiedad, $valor){
      echo "Asignamos $valor a $propiedad<br>";
      $this->propiedad = $valor;
   }
   function __get($propiedad){
      echo "Acceso a la propiedad $propiedad(clase ", __CLASS__,")\n"; 
      return $this->propiedad . "<br>";
   }
   function __call($metodo, $parametros){
      //echo "Acceso al método $metodo (clase", __CLASS__, ")\nArgumentos:\n", var_dump($parametros), "\n";
   }
}  //Fin clase sinPropiedades
?>