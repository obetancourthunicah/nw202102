<?php
    namespace Inventario;
    class Kardex{

        private Producto $_producto;

        public function __construct($producto)
        {
            $this->_producto = $producto;
        }
    }
?>
