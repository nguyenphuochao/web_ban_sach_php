<?php
class ordercontroller extends controller
{
    function index()
    {
        $order = new order();
        $list_order = $order->list_all_order();
        $this->render('view/order/danhsach', ['list_order' => $list_order]);
    }
    function detail()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $order = new order();
            // Lấy tất cả thông tin sản phẩm của người mua hàng
            $list_order = $order->show_all_detail($_GET['id']);
            // lấy thông tin khách hàng mua sản phẩm
            $get_customer = $order->detail_order($_GET['id']);
            // xemmang($get_customer);
            // exit;
            $this->render('view/order/sua', ['list_order' => $list_order, 'get_customer' => $get_customer]);
        } else {
            header('Location:?controller=order&action=index');
        }
    }
    function update()
    {
        $order = new order();
        $update_order = $order->update('orders', ['order_status' => $_POST['order_status']], ['id' => $_POST['id']]);
        if ($update_order) {
            $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                <strong>Cập nhật trạng thái đơn hàng thành công tên khách hàng:' . $_POST['name'] . '</strong>
            </div>']);
            header('Location:?controller=order&action=index');
        }
    }
}
