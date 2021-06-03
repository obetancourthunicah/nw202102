<?php
    require_once 'autoloader.php';
    use Inventario\Producto;

    $productoA = new Producto();
    $kardexProductoA = new Inventario\Kardex($productoA);

    echo "<h1>Se genero</h1>";

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
