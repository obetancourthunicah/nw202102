<?php

    $arrColores = array("Rojo","Verde","Azul","Amarillo"); //ordinal disponible 0
    $arrColores[7] = "Negro";
    $arrColores = [1,2,3,4];

    //funcion de flecha gorda muy parecidos a lambda no permite un
    // cuerpo de expresiones.
    $fnArraw = fn($a)=> $a.$a;

    /*
    1) Todas los cursores de Base de Datos se representan en php en arreglos.
    2) Las estructura de datos que representan objetos se representan en arreglos
    3) PHP es la mama de los pollitos al manejar arreglos.


C, C++, Java, Javascript
--------------------
0| Valor 1
1| Valor 2
2| Valor 3
3| Valor 4
4| Valor 5
--------------------

PHP
-------------------
llaves|valores
------------------
"nombre"| "Orlando J Betancourth"
"telefono" | 3339383920
"correo" | "obetancourthunicah@gmail.com"
"esAdmin" | true
"roles" |  
            0 | Admin
            1 | Publico
            2 | Auditor
    */

$arrPersona = array(
    "nombre" => "Orlando J Betancourth",
    "telefono" => 3339383920,
    "correo" => "obetancourthunicah@gmail.com",
    "esAdmin" => true
);

$arrPersona["esAdmin"] = false;

$arrPersona[]="Hola";
$arrPersona["mensaje"] = "Hola";
$arrPersona[2] = "Adios";
$arrPersona[] = "Adios 2";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos en PHP</title>
</head>
<body>
    <?php
    print_r($arrColores);
    echo '<hr/>';

    for ($i=0; $i<count($arrColores); $i++ ) {
        echo $arrColores[$i] . "<br/>";
    }
    echo '<hr/>';


    foreach($arrColores as $color){
        echo $color . "<br/>";
    }
    echo $fnArraw("Hola");

    echo "<hr>";

    print_r($arrPersona);

    foreach ($arrPersona as $campo => $valor){
        echo $campo . " : " . $valor .  "<br/>";
    }


    ?>
</body>
</html>
