<?php
class categorycontroller extends controller
{
    function index()
    {
        $cate = new category();
        $listcategory = $cate->select('categories');
        $this->render('view/category/danhsach', ['listcategory' => $listcategory]);
    }
    function create()
    {
        if (isset($_POST['name'])) {
            $category = new category();
            $list_category = $category->insert(
                'categories',
                [
                    'name' => $_POST['name'],
                    'sumary' => $_POST['sumary'],
                    'content' => $_POST['content'],
                    'image' => $_FILES['image']['name'],
                    'alias' => $_POST['alias'],
                    'keyword' => $_POST['keyword'],
                    'desc' => $_POST['desc'],
                    'imgshare' => $_POST['imgshare'],
                    'title' => $_POST['title'],
                    'parent_id' => $_POST['parent_id'],
                    'status' => $_POST['status']
                ]
            );
            if ($list_category) {
                $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                    <strong>Thêm thành công danh mục tên: ' . $_POST['name'] . '</strong>
                </div>']);
                header('Location:?controller=category&action=index');
            }
        }
        $this->render('view/category/them');
    }
    function detail()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $category = new category();
            $list_category = $category->item('categories', ['id' => $_GET['id']]);
            $this->render('view/category/sua', ['list_category' => $list_category]);
        } else {
            header('Location:?controller=category&action=index');
        }
    }
    function delete()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $category = new category();
            $list_category = $category->delete('categories', ['id' => $_GET['id']]);
            if ($list_category) {
                $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                    <strong>Xóa thành công danh mục có ID:' . $_GET['id'] . '</strong>
                </div>']);
                header('Location:?controller=category&action=index');
            }
        } else {
            header('Location:?controller=category&action=index');
        }
    }
    function update()
    {
        $category = new category();
        $list_category = $category->item('categories', ['id' => $_POST['id']]);
        $update_category = $category->update('categories', [
            'name' => $_POST['name'],
            'sumary' => $_POST['sumary'],
            'content' => $_POST['content'],
            'image' => $_FILES['image']['name'] ? $_FILES['image']['name'] : $list_category->image,
            'alias' => $_POST['alias'],
            'keyword' => $_POST['keyword'],
            'desc' => $_POST['desc'],
            'imgshare' => $_POST['imgshare'],
            'title' => $_POST['title'],
            'parent_id' => $_POST['parent_id'],
            'status' => $_POST['status']
        ], ['id' => $_POST['id']]);
        if ($update_category) {
            $this->set_error(['alert'=>'<div class="alert alert-success" role="alert">
                <strong>Cập nhật thành công danh mục có tên: ' . $_POST['name'] . '</strong>
            </div>']);
            header('Location:?controller=category&action=index');
        }
    }
}
