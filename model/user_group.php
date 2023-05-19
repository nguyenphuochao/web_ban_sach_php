<?php
class user_group extends querybuilder{
    function __construct()
    {
        parent::__construct();
    }
    function list_user_group(){
        return $this->select('user_groups',['status'=>1]);
    }
}