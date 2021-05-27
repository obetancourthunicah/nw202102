<?php
session_start();

require_once "library.php";

$txtCapital = "100000";
$txtTasa = "0.25";
$txtPeriodo = "24";
$arrTabla = array();

$clickCount = isset($_SESSION["clickCount"]) ? $_SESSION["clickCount"]: 0;

if (isset($_POST["btnCalcular"])) {
    $txtCapital = floatval($_POST["txtCapital"]);
    $txtTasa = floatval($_POST["txtTasa"]);
    $txtPeriodo = intval($_POST["txtPeriodo"]);
    $clickCount++;
    $_SESSION["clickCount"] = $clickCount;

    $arrTabla = cacularPrestamo($txtCapital, $txtPeriodo, $txtTasa);
}
//btnCalcular
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Amortización</title>
</head>

<body>
    <h1>Calculo de Prestamos y Tablas de Amortización</h1>
    <form action="formulario.php" method="post">
        <label for="txtCapital">Capital</label>
        <input type="text" name="txtCapital" id="txtCapital" value="<?php echo $txtCapital; ?>" />
        <br />
        <label for="txtTasa">Tasa de Interés (0 - 1)</label>
        <input type="text" name="txtTasa" id="txtTasa" value="<?php echo $txtTasa; ?>" />
        <br />
        <label for="txtPeriodo">Periodo (Meses)</label>
        <input type="text" name="txtPeriodo" id="txtPeriodo" value="<?php echo $txtPeriodo; ?>" />
        <br />
        <button type="submit" name="btnCalcular">Calcular</button>
    </form>
    <hr/>
    <h2>Prestamos Calculados</h2>
    <div><b><?php echo $clickCount; ?></b></div>
    <table>
        <tr>
            <th>Cuota</th>
            <th>Monto</th>
            <th>Abono a Capital</th>
            <th>Interés</th>
            <th>Saldo</th>
        </tr>
        <?php
        foreach ($arrTabla as $cuota) {
            echo sprintf(
                "<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
                $cuota["Numero"],
                $cuota["CuotaNivelada"],
                $cuota["AbonoCapital"],
                $cuota["Interes"],
                $cuota["Saldo"]
            );
        }
        ?>
    </table>
    <hr />
    <pre>
    <?php
    echo json_encode($arrTabla, JSON_PRETTY_PRINT);
    ?>
    </pre>
</body>

</html>
