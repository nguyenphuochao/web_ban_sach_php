<?php
function is_login()
{
    return isset($_SESSION['status_login']) && $_SESSION['status_login'];
}
function xemmang($a)
{
    echo '<pre>',print_r($a),'</pre>';
}
