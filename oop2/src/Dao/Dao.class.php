<?php 

namespace Dao;

class Dao {
    private $_conn = null;

    public function __construct()
    {
        $this->_conn = DbConnection::getConnection();
    }

    protected function getConn()
    {
        return $this->_conn;
    }
    
    protected function query(string $sql)
    {
        return $this->_conn->query($sql);
    }
}
?>
