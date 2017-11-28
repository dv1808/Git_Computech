<?php



namespace bookshop\ORM;


class Modelo {
   //propiedad que va a contener a todas las propiedades dinamicamente
    private $data = array();
    function __construct($data=null) {
        $this->data = $data;
    }
    public function __get($name) {
        return $this->data[$name];
    }
    public function __set($name, $value) {
        $this->data[$name]=$value;
    }



}
