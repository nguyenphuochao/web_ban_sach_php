<?php
session_start();
include 'system/autoload.php';
$action = strtolower($_GET['action'] ?? 'index');
$controllername = strtolower(($_GET['controller'] ?? 'system') . 'controller');
if (class_exists($controllername)) {
    $controller = new $controllername();
    if (method_exists($controller, $action)) {
        if (is_login()) {
            // check_role
            if (role::check_role($_SESSION['user_id'], str_replace('controller', '', $controllername), $action))
                $controller->$action();
            else
                $controller->_403();
        } else {
            $controller = new usercontroller();
            $controller->login();
        }
    } else {
        $controller->_404();
    }
} else {
    $controller = new controller();
    $controller->_404();
}
