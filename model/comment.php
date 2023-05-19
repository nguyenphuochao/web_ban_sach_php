<?php
class comment extends querybuilder{
    function __construct()
    {
        parent::__construct();
    }
    function list_all_comment(){
        $sql='SELECT comments.id as  comment_id,users.name as user_name,products.name as product_name,comments.desc as comment_desc,comments.created_at as comment_date
        FROM users inner join comments on users.id=comments.user_id inner join products on comments.product_id=products.id order by comments.id desc';
        return $this->setquery($sql)->rows();
    }
}