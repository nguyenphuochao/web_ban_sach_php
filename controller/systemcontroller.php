<?php 
class systemcontroller extends controller
{
    function index()
    {
        $a=123;
        $this->render('view/system/index',['a'=>$a]);
    }   
    function contact()
    {
        include 'view/lienhe.php';
    }   
    function log(){
        $this->render('view/system/log');
    }
    function setting(){
        $this->render('view/system/log');
    }
}