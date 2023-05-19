<?php
class customercontroller extends controller
{
    function index()
    {
        $customer = new customer();
        $list_customer = $customer->list_customer();
        $this->render('view/customer/danhsach', ['list_customer' => $list_customer]);
    }
    function detail()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $customer = new customer();
            $get_customer = $customer->item('customers', ['id' => $_GET['id']]);
            $this->render('view/customer/sua', ['get_customer' => $get_customer]);
        } else {
            header('Location:?controller=customer&action=index');
        }
    }
    function update()
    {
        $customer = new customer();
        if ($customer->update('customers', [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'gender' => $_POST['gender']
        ],['id'=>$_POST['id']])) {
            $this->set_error(['alert'=>'<div class="alert alert-success" role="alert">
                <strong>Cập nhật thành công khách hàng '.$_POST['name'].'</strong>
            </div>']);
            header('Location:?controller=customer&action=index');
        }
    }
}
