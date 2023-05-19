<?php
class controller
{
    function _404()
    {
        include 'view/404.php';
    }
    function _403()
    {
        include 'view/403.php';
    }
    function render($view, $data = [], $layout = 'layout')
    {
        if (is_array($data)) {
            extract($data);
        }
        // nav
        if (is_login()) {
            $role = new role();
            $menus = $role->list_menu($_SESSION['user_id']);
        }
        include 'view/' . $layout . '.php';
    }
    function set_error($data = [])
    {
        foreach ($data as $key => $value) {
            $_SESSION['_errors_' . $key] = $value;
        }
    }
    function get_error($key)
    {
        $value = '';
        if (isset($_SESSION['_errors_' . $key])) {
            $value = $_SESSION['_errors_' . $key];
            unset($_SESSION['_errors_' . $key]);
        }
        return $value;
    }
}
