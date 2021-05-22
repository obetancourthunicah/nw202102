<?php
$intNumero = 5;
$resultadoTxt = "";

if (isset($_POST["btnCalcular"])) {
    $intNumero = intval($_POST["txtNumero"]);
    // 4 = 4 * 3 * 2 * 1 * 1
    $resultado = $intNumero;
    for ($i = $intNumero - 1; $i >= 0; $i--) {
        $resultado *= ($i == 0) ? 1 : $i;

        /*if($i==0){
            $resultado = $resultado * 1;
        } else {
            $resultado = $resultado * $i;
        }*/
    }
    $resultado = ($resultado === 0) ? 1 : $resultado;
    $resultadoTxt = sprintf(
        "El resultado de factorial de %d es igual a %d",
        $intNumero,
        $resultado
    );
}

if(isset($_POST["btnSumar"])){
    $resultadoTxt = "Click en Sumar";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="factorial.php" method="POST">
        <label for="txtNumero">Número</label>
        <input type="number" placeholder="un número" name="txtNumero" value="<?php echo $intNumero; ?>" />
        &nbsp;
        <button type="submit" name="btnCalcular">Calcular Factorial</button>
        <button type="submit" name="btnSumar">Sumar</button>
    </form>
    <hr />
    <?php
    if ($resultadoTxt !== "") {
        echo sprintf('<h2>%s</h2>', $resultadoTxt);
    }
    ?>
</body>

</html>
