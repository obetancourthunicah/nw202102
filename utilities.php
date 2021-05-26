<?php
/**
 * Obtiene el Cuadrado de un número
 *
 * @param integer $a Número Entero
 *
 * @return integer Cuadrado del Número
 */
function obtenerCuadrado($a)
{
    return $a**2;
    //return pow($a, 2);
}


function raizCuadrada($a)
{
    $_a = intval($a);
    if ($_a > 0) {
        //return sqrt($_a);
        return $_a**0.5;
    } else {
        return null;
    }
}


function reverseString($str) {
    // if(!empty($str)) {
    //     return  strrev($str);
    // }
    $reverseStr = "";
    for ($i = strlen($str) -1; $i >=0; $i--) {
        $reverseStr .= $str[$i];
    }
    return $reverseStr;
}


function noReturnFunc($as, &$ab){

    //No Devolver nada. 
}

//Como calcular la cuota nivelada de un prestamo. 


?>
