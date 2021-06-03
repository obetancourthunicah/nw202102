<?php 
require_once("src/IDecorators.class.php");

class Vino implements IDecorator
{
    public function getPrice()
    {
        return 200.50;
    }
}

class Entremes implements IDecorator
{
    public function getPrice()
    {
        return 100.00;
    }
}

class CocaCola implements IDecorator
{
    public function getPrice()
    {
        return 60.00;
    }
}

?>
