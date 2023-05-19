<?php
class product extends querybuilder
{
    function __construct()
    {
        parent::__construct();
    }
    function list_product_all()
    {
        $sql = 'SELECT products.id as product_id,products.image as image,products.name as product_name,products.price,products.qty,categories.name as cate_name,
       authors.name as author_name,suppliers.name as supplier_name
       FROM products left join categories on products.category_id=categories.id left join authors on products.author_id=authors.id 
       left join suppliers on products.supplier_id=suppliers.id order by products.id desc';
        return $this->setquery($sql)->rows();
    }
    
}
