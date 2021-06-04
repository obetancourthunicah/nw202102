<?php

// Singleton

// $this   -> referencia a una instancia variable -> memoria dinamica

// self  :: referencia a una definicio de constante

// define("CLASS_POTH", "Este es el valor");
// CLASS_POTH

// MyConn = new DbConnection();
namespace Dao;

use SQLite3;

class DbConnection {
    private static $_MyConn = null;

    private function __construct()
    {
        
    }
    private function __clone()
    {

    }

    public static function getConnection(){
        if (!self::$_MyConn) {
            self::$_MyConn = new SQLite3("inventario.db", SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
            // Crear la conexion
        }
        return self::$_MyConn;
    }

}

?>
