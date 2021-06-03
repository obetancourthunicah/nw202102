<?php 

    require_once "src/Dinner.class.php";
    require_once "src/Vino.class.php";

    $dinnerForToday = new Dinner(
        "Angus Beaf on Onions",
        "Roasted beaf with Onions, smashed beans and avocado",
        90
    );
    $dinnerForToday->addDecorator(
        new Vino()
    );
    $dinnerForToday->addDecorator(
        new CocaCola()
    );

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP INTRO</title>
</head>
<body>
    <?php  echo $dinnerForToday->getString(); ?>
</body>
</html>
