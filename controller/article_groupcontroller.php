<?php
class article_groupcontroller extends controller
{
    function index()
    {
        $article_group = new article_group();
        $list_article_group = $article_group->select('article_groups');
        $this->render('view/article_group/danhsach', ['list_article_group' => $list_article_group]);
    }
    function create()
    {
        if (isset($_POST['name'])) {
            $article_group = new article_group();
            $add = $article_group->insert('article_groups', [
                'name' => $_POST['name'],
                'sumary' => $_POST['sumary'],
                'content' => $_POST['content'],
                'image' => $_FILES['image']['name'],
                'parent_id' => $_POST['parent_id'],
                'alias' => $_POST['alias'],
                'keyword' => $_POST['keyword'],
                'desc' => $_POST['content'],
                'imgshare' => $_POST['imgshare'],
                'title' => $_POST['title'],
                'status' => $_POST['status']
            ]);
            if ($add) {
                move_uploaded_file($_FILES['image']['tmp_name'], "public/uploads/" . $_FILES['image']['name']);
                $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                <strong>Thêm thành công danh mục tin tức tên ' . $_POST['name'] . '</strong>
            </div>']);
                header('Location:?controller=article_group&action=index');
            }
        }
        $this->render('view/article_group/them');
    }
    function detail()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $article_group = new article_group();
            $get_article_group = $article_group->item('article_groups', ['id' => $_GET['id']]);
            $this->render('view/article_group/sua', ['get_article_group' => $get_article_group]);
        } else {
            header('Location:?controller=article_group&action=index');
        }
    }
    function update()
    {
        $article_group = new article_group();
        $get_article_group = $article_group->item('article_groups', ['id' => $_POST['id']]);
        if ($article_group->update('article_groups', [
            'name' => $_POST['name'],
            'sumary' => $_POST['sumary'],
            'content' => $_POST['content'],
            'image' => $_FILES['image']['name'] ? $_FILES['image']['name'] : $get_article_group->image,
            'parent_id' => $_POST['parent_id'],
            'alias' => $_POST['alias'],
            'keyword' => $_POST['keyword'],
            'desc' => $_POST['content'],
            'imgshare' => $_POST['imgshare'],
            'title' => $_POST['title'],
            'status' => $_POST['status']
        ], ['id' => $_POST['id']])) {
            $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                <strong>Cập nhật thành công danh mục tin tức : ' . $_POST['name'] . '</strong>
            </div>']);
            move_uploaded_file($_FILES['image']['tmp_name'], "public/uploads/" . $_FILES['image']['name']);
            header('Location:?controller=article_group&action=index');
        }
    }
    function delete()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $article_group = new article_group();
            if ($article_group->delete('article_groups', ['id' => $_GET['id']])) {
                $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                    <strong>Xóa thành công ID: ' . $_GET['id'] . '</strong>
                </div>']);
                header('Location:?controller=article_group&action=index');
            }
        } else {
            header('Location:?controller=article_group&action=index');
        }
    }
}
