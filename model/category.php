<?php
class category extends querybuilder
{
    function __construct()
    {
        parent::__construct();
    }
    function insert_category($name, $sumary, $content, $image, $alias, $keyword, $desc, $imgshare, $title, $parent, $status)
    {
        return $this->insert('categories', ['name' => $name, 'sumary' => $sumary, 'content' => $content, 'image' => $image, 'alias' => $alias, 'keyword' => $keyword, 'desc' => $desc, 'imgshare' => $imgshare, 'title' => $title, 'parent' => $parent, 'status' => $status]);
    }
    function list_category()
    {
        return $this->select('categories', ['status' => 1]);
    }
    function get_category_id($id)
    {
        return $this->item('categories', ['id' => $id, 'status' => 1]);
    }
    function delete_category_id($id)
    {
        return $this->delete('categories', ['id' => $id]);
    }
}
