<?php
class user extends querybuilder
{
    function __construct()
    {
        parent::__construct();
    }
    function login($username, $password)
    {
        return $this->item('users', ['username' => $username, 'password' => $password]);
    }
    function list_user()
    {
        return $this->select('users', ['status', '!=', '-1']);
    }
}
