<?php
class customer extends querybuilder{
    function __construct()
    {
        parent::__construct();
    }
    function list_customer(){
        $sql='SELECT DISTINCT name,email,phone,gender ,id
         FROM customers';
         return $this->setquery($sql)->rows();
    }
}