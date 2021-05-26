<?php 
    require_once "library.php";
    $arrTabla = cacularPrestamo( 100000, 24, 0.21);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Amortización</title>
</head>
<body>
    <?php
        foreach ($arrTabla as $cuota) {
            echo sprintf(
                "%s %s %s %s %s",
                $cuota["Numero"],
                $cuota["CuotaNivelada"],
                $cuota["AbonoCapital"],
                $cuota["Interes"],
                $cuota["Saldo"]
            );
            echo "<br/>";
        }
    ?>
</body>
</html>
