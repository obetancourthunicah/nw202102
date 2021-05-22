<?php
    $intNumero = 0;
    $flipped = "";
    //isset es una función que determina si existe o no un symbolo apuntando a
    // un espacio en memoria.
    if(isset($_POST["btnFlip"])){
        $intNumero = intval($_POST["txtNumero"]);
        if ($intNumero >= 50){
            $flipped = "Cara";
        } else {
            $flipped = "Cruz";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flip Number</title>
</head>
<body>
    <h1>FLIP</h1>
    <form action="flip.php" method="POST">
        <label for="txtNumero">Un Número del 1 al 100:</label>
        <input type="number" min="1" max="100" 
            step="1" name="txtNumero"
            id="txtNumero"/>

        <button type="submit" name="btnFlip">Hacer Flip</button>
    </form>
    <?php
        if($flipped !== ""){
            echo "<h2>El resultado es:";
            echo $flipped;
            echo "</h2>";
        }

    ?>
</body>
</html>
