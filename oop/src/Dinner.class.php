<?php

class Dinner {

    private $_name = "";
    private $_price = "";
    private $_description ="";
    private $_decorators = array();

    public function getName(){
        return $this->_name;
    }
    public function setName($name){
        $this->_name = $name;
    }

    public function getPrice()
    {
        $totalPrice = $this->_price;
        foreach ($this->_decorators as $decorator) {
            $totalPrice += $decorator->getPrice();
        }
        return $totalPrice;
    }
    public function setPrice($price)
    {
        $this->_price = $price;
    }

    public function getDescription()
    {
        return $this->_description;
    }
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    public function addDecorator($decorator){
        $this->_decorators[] = $decorator;
    }

    public function getString()
    {
        // n: Hola, d: Mundo,  p: 1000
        // Hola, Mundo, 1000
        return implode(
            ", ",
            array(
                $this->_name,
                $this->_description,
                $this->_price,
                $this->getPrice()
            )
        );
    }

    public function __construct(
        $name,
        $description,
        $price
    ) {
        $this->_name = $name;
        $this->_description = $description;
        $this->_price = $price;
    }
}


?>
