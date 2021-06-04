<?php

namespace Dao;

class Producto extends Dao
{
    public function __construct()
    {
        parent::__construct();
        $sqlCreate = "CREATE TABLE IF NOT EXISTS PRODUCTOS  (
            'ID'	INTEGER NOT NULL,
            'NAME'	TEXT NOT NULL,
            'BARCODE'	TEXT NOT NULL,
            'PARENTID'	INTEGER,
            'PARENTFRACTION'	INTEGER,
            'BUYALLOWED'	INTEGER,
            'SELLALLOWED'	INTEGER,
            PRIMARY KEY('ID' AUTOINCREMENT)
        );";

        $this->query($sqlCreate);

    }

    public function getAll(){
        $cursorProductos = $this->query('SELECT * from PRODUCTOS;');
        $productos = array();
        while ($row = $cursorProductos->fetchArray()) {
            $productos[] = $row;
        }
        return $productos;
    }
}

?>
