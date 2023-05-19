<?php
class author extends querybuilder
{
    function __construct()
    {
        parent::__construct();
    }
    function list_author()
    {
        return $this->select('authors');
    }
}
