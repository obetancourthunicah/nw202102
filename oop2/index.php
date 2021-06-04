<?php
    require_once 'autoloader.php';
   
    use \Dao\Producto;

    $productos = new Producto();
    $productosList = $productos->getAll();

    echo "<h1>Se genero</h1>";
    print_r($productosList);

/*
/--------------------------------/
PEPS, UEPS
---------------------------------

KARDEX --> BITACORA DE MOVIMIENTOS DEL PRODUCTO 

KARDEX PANADOL
FECHA    TIPO   REFERENCIA  ENTRADA  SALIDA  STOCK  COSTO
2021-05-01 CMP  REFXYZ         10      0      10     100
2021-05-02 VNT  REFABC         0       2      8
2021-05-03 INV  INV0001        0       1      7
*/
?>
