<?php 


class Parcial
{
    public static $contador=3;

    function __construct()
    {
        self::$contador=1;
    }

    function incrementar(){
        self::$contador++;
    }

}

$ejemplo = new Parcial;

echo $ejemplo::$contador;

?>