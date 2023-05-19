<?php
class authorcontroller extends controller
{
    function index()
    {
        $author = new author();
        $list_author = $author->list_author();
        $this->render('view/author/danhsach', ['list_author' => $list_author]);
    }
    function delete()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $author = new author();
            $list_author = $author->delete('authors', ['id' => $_GET['id']]);
            if ($list_author) {
                $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                    <strong>Xóa thành công ID:' . $_GET['id'] . '</strong>
                </div>']);
                header('Location:?controller=author&action=index');
            }
        }
    }
    function create()
    {
        if (isset($_POST['name'])) {
            $author = new author();
            $list_author = $author->insert('authors', [
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'avatar' => $_FILES['avatar']['name'],
                'address' => $_POST['address'],
                'email' => $_POST['email'],
                'sumary' => $_POST['sumary'],
                'status' => $_POST['status']
            ]);
            if ($list_author) {
                $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                    <strong>Thêm thành công tác giả có tên: ' . $_POST['name'] . '</strong>
                </div>']);
                header('Location:?controller=author&action=index');
            }
        }
        $this->render('view/author/them');
    }
    function detail()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $author = new author();
            $list_author = $author->item('authors', ['id' => $_GET['id']]);
            $this->render('view/author/sua', ['list_author' => $list_author]);
        }
    }
    function update()
    {
        $author = new author();
        $list_author = $author->item('authors', ['id' => $_POST['id']]);
        $update_author = $author->update('authors', [
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'avatar' => $_FILES['avatar']['name'] ? $_FILES['avatar']['name'] : $list_author->avatar,
            'address' => $_POST['address'],
            'email' => $_POST['email'],
            'sumary' => $_POST['sumary'],
            'status' => $_POST['status']
        ], ['id' => $_POST['id']]);
        if ($update_author) {
            $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
            <strong>Sửa thành công tác giả có tên: ' . $_POST['name'] . '</strong>
        </div>']);
            header('Location:?controller=author&action=index');
        }
    }
}
