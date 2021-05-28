<?php
session_start();

require_once "library.php";

$txtCapital = "100000";
$txtTasa = "0.25";
$txtPeriodo = "24";
$prestamo = array();

$clickCount = isset($_SESSION["clickCount"]) ? $_SESSION["clickCount"] : 0;
$prestamos = isset($_SESSION["prestamos"]) ? $_SESSION["prestamos"] : array();
$currentTable = isset($_SESSION["currentTable"]) ? $_SESSION["currentTable"] : -1;

if (isset($_POST["btnCalcular"])) {
    $txtCapital = floatval($_POST["txtCapital"]);
    $txtTasa = floatval($_POST["txtTasa"]);
    $txtPeriodo = intval($_POST["txtPeriodo"]);
    $clickCount++;
    $_SESSION["clickCount"] = $clickCount;

    $prestamo = generarRegistroDePrestamo($txtCapital, $txtPeriodo, $txtTasa);
    $prestamos[] = $prestamo;
    $currentTable = count($prestamos) -1;
    $_SESSION["currentTable"] = $currentTable;
    $_SESSION["prestamos"] = $prestamos;
}
if (isset($_POST["currentTable"])) {
    if ($currentTable == $_POST["currentTable"]) {
        $currentTable = -1;
    } else {
        $currentTable = $_POST["currentTable"];
    }

    $_SESSION["currentTable"] = $currentTable;
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
    <hr />
    <h2>Prestamos Calculados: <b><?php echo $clickCount; ?></b></h2>
    <h2>Detalle de Prestamos</h2>
    <table>
        <?php 
            $iterator = 0;
            foreach($prestamos as $prestamo) { 
        ?>
        <tr><td colspan="4"><hr/></td></tr>
        <tr>
            <th>Fecha</th>
            <th>Capital</th>
            <th>Periodos</th>
            <th>T. Interés</th>
        </tr>
        <tr>
            <td>
                <form action="formulario.php" method="post">
                    <button type="submit" name="currentTable" value="<?php echo $iterator; ?>">
                        :|
                    </button>
                </form>
                <?php echo $prestamo["fecha"]; ?>
            </td>
            <td><?php echo $prestamo["capital"]; ?></td>
            <td><?php echo $prestamo["periodos"]; ?></td>
            <td><?php echo $prestamo["tasaInteres"]; ?></td>
        </tr>
        <?php if ($currentTable == $iterator) { ?>
        <tr>
            <td colspan="4">
                <table>
                    <tr>
                        <th>Cuota</th>
                        <th>Monto</th>
                        <th>Abono a Capital</th>
                        <th>Interés</th>
                        <th>Saldo</th>
                    </tr>
                    <?php
                    $arrTabla = $prestamo["tablaAmortizacion"];
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
            </td>
        </tr>
        <?php } //if ?>
        <?php 
                $iterator ++;
            } //foreach?>
    </table>
</body>

</html>
