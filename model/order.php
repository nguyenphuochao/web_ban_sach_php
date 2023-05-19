<?php
class order extends querybuilder
{
    function __construct()
    {
        parent::__construct();
    }
    function list_all_order()
    {
        $sql = 'SELECT *FROM customers right join orders on customers.id=orders.customer_id';
        return $this->setquery($sql)->rows();
    }
    function show_all_detail($id)
    {
        $sql = 'SELECT customers.name as customer_name,
                     products.name as product_name,
                     order_details.qty as product_qty,
                     order_details.price as product_price,
                     orders.total as order_total 
        FROM order_details inner join orders on order_details.order_id=orders.id inner join customers on customers.id=orders.customer_id inner join
        products on products.id=order_details.product_id
        where orders.id=?';
        return $this->setquery($sql)->rows([$id]);
    }
    function detail_order($id)
    {
        $sql = 'SELECT orders.id as order_id,order_date as order_date,shipping as order_shipping,customers. *
        FROM orders inner join customers on orders.customer_id=customers.id
        WHERE orders.id=? order by orders.id desc';
        return $this->setquery($sql)->row([$id]);
    }
}
