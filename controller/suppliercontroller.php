<?php
class suppliercontroller extends controller
{
    function index()
    {
        $supplier = new supplier();
        $listsupplier = $supplier->select('suppliers',[],['*'],['id'=>'desc']);
        $this->render('view/supplier/danhsach', ['listsupplier' => $listsupplier]);
    }
    function create()
    {
        if (isset($_POST['name'])) {
            $supplier = new supplier();
            $list_supplier = $supplier->insert('suppliers', [
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'image' => $_FILES['image']['name'],
                'logo' => $_FILES['logo']['name'],
                'alias' => $_POST['alias'],
                'keyword' => $_POST['keyword'],
                'desc' => $_POST['desc'],
                'imgshare' => $_POST['imgshare'],
                'title' => $_POST['title'],
                'status' => $_POST['status']
            ]);
            if ($list_supplier) {
                move_uploaded_file($_FILES['image']['tmp_name'], "public/uploads/" . $_FILES['image']['name']);
                move_uploaded_file($_FILES['logo']['tmp_name'], "public/uploads/" . $_FILES['logo']['name']);
                $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                    <strong>Thêm thành công nhà xuất bản tên: ' . $_POST['name'] . '</strong>
                </div>']);
                header('Location:?controller=supplier&action=index');
            }
        }
        $this->render('view/supplier/them');
    }
    function delete()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $supplier = new supplier();
            $list_supplier = $supplier->delete('suppliers', ['id' => $_GET['id']]);
            if ($list_supplier) {
                $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                    <strong>Xóa thành công ' . $_GET['id'] . '</strong>
                </div>']);
                header('Location:?controller=supplier&action=index');
            }
        } else {
            $this->set_error(['alert' => '<div class="alert alert-danger" role="alert">
            <strong>Xóa thất bại ' . $_GET['id'] . '</strong>
        </div>']);
            header('Location:?controller=supplier&action=index');
        }
    }
    function detail()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $supplier = new supplier();
            $list_supplider = $supplier->item('suppliers', ['id' => $_GET['id']]);
            $this->render('view/supplier/sua', ['list_supplier' => $list_supplider]);
        }
    }
    function update()
    {
        $supplier = new supplier();
        $list_supplider = $supplier->item('suppliers', ['id' => $_POST['id']]);
        $list_update = $supplier->update('suppliers', [
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'image' => $_FILES['image']['name'] ? $_FILES['image']['name'] : $list_supplider->image,
            'logo' => $_FILES['logo']['name'] ? $_FILES['logo']['name'] : $list_supplider->logo,
            'alias' => $_POST['alias'],
            'keyword' => $_POST['keyword'],
            'desc' => $_POST['desc'],
            'imgshare' => $_POST['imgshare'],
            'title' => $_POST['title'],
            'status' => $_POST['status']
        ], ['id' => $_POST['id']]);
        if ($list_update) {
            move_uploaded_file($_FILES['image']['tmp_name'], "public/uploads/" . $_FILES['image']['name']);
            move_uploaded_file($_FILES['logo']['tmp_name'], "public/uploads/" . $_FILES['logo']['name']);
            $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                <strong>Sửa thành công sản phẩm có tên: ' . $_POST['name'] . '</strong>
            </div>']);
            header('Location:?controller=supplier&action=index');
        }
    }
}
