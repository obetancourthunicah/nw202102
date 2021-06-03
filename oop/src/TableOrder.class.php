<?php 


class TableOrder {

    private $dinnersList = array();
    public function __construct()
    {
    }

    public function getDinnersList(){
        return $this->dinnersList;
    }

    public function addToDinnersList($dinner) {
        $this->dinnersList[] = $dinner;
        // dinnersList.push($dinner);
    }

    

}


?>
