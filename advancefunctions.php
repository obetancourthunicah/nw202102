<?php

/*

4 funciones para incorporar sripts externos o adicionales

include -> No valida sintaxis
require -> Valida y detiene la ejecución. 

include_once
require_once



 */

require_once "utilities.php";

$txtNumero = 4;
$txtString = "";
$message = "";
$result = null;
$arrMessageLabel = array(
    "CDR"=>"Calcular Cuadrado",
    "RIZ"=>"Calcular Raíz Cuadrada",
    "REV"=>"Revertir Texto"
);

if (isset($_POST["btnAccion"])) {
    $action = $_POST["btnAccion"];
    $txtNumero = $_POST["txtNumero"];
    $txtString = $_POST["txtString"];

    switch ($action) {
    case "CDR":
            $result= obtenerCuadrado($txtNumero);
        break;
    case "RIZ":
            $result = raizCuadrada($txtNumero);
        break;
    case "REV":
            $result = reverseString($txtString);
        break;
    }
    $message = $arrMessageLabel[$action] . " es " . $result;

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incorporando Funciones</title>
</head>

<body>
    <h1> Incorporando funciones de otro archivo</h1>

    <form action="advancefunctions.php" method="post">
        <label for="txtNumero">Numero</label>
        <input type="text" name="txtNumero" id="txtNumero" value="<?php echo $txtNumero; ?>">
        <br />
        <label for="txtString">Texto</label>
        <input type="text" name="txtString" id="txtString" value="<?php echo $txtString; ?>">
        <br />
        <button type="submit" name="btnAccion" value="CDR">Cuadrado</button>
        <button type="submit" name="btnAccion" value="RIZ">Raíz</button>
        <button type="submit" name="btnAccion" value="REV">Reverse</button>

    </form>
    <?php if ($message !=="") { ?>
        <hr>
        <section>
        <?php echo $message; ?>
        </section>
    <?php } ?>
</body>

</html>
