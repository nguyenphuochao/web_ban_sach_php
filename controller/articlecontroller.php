<?php
class articlecontroller extends controller
{
    function index()
    {
        $acticle = new article();
        $list_article = $acticle->select('articles');
        $this->render('view/article/danhsach', ['list_article' => $list_article]);
    }
    function create()
    {
        $article_group = new article_group();
        $list_article_group = $article_group->select('article_groups', ['status' => 1]);
        if (isset($_POST['name'])) {
            $article = new article();
            if ($article->insert('articles', [
                'group_id' => $_POST['group_id'],
                'name' => $_POST['name'],
                'image' => $_FILES['image']['name'],
                'sumary' => $_POST['sumary'],
                'content' => $_POST['content'],
                'alias' => $_POST['alias'],
                'keyword' => $_POST['keyword'],
                'desc' => $_POST['content'],
                'imgshare' => $_POST['imghshare'],
                'title' => $_POST['title'],
                'status' => $_POST['status']
            ])) {
                move_uploaded_file($_FILES['image']['tmp_name'], "public/uploads/" . $_FILES['image']['name']);
                $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                <strong>Thêm thành công tin tức: ' . $_POST['name'] . '</strong>
            </div>']);
                header('Location:?controller=article&action=index');
            }
        }
        $this->render('view/article/them', ['list_article_group' => $list_article_group]);
    }
    function detail()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $article_group = new article_group();
            $list_article_group = $article_group->select('article_groups', ['status' => 1]);

            $article = new article();
            $get_article = $article->item('articles', ['id' => $_GET['id']]);
            $this->render('view/article/sua', ['get_article' => $get_article, 'list_article_group' => $list_article_group]);
        } else {
            header('Location:?controller=article&action=index');
        }
    }
    function update()
    {
        $article = new article();
        $get_article = $article->item('articles', ['id' => $_POST['id']]);
        if ($article->update('articles', [
            'group_id' => $_POST['group_id'],
            'name' => $_POST['name'],
            'image' => $_FILES['image']['name'] ? $_FILES['image']['name'] : $get_article->image,
            'sumary' => $_POST['sumary'],
            'content' => $_POST['content'],
            'alias' => $_POST['alias'],
            'keyword' => $_POST['keyword'],
            'desc' => $_POST['content'],
            'imgshare' => $_POST['imghshare'],
            'title' => $_POST['title'],
            'status' => $_POST['status']
        ], ['id' => $_POST['id']])) {
            move_uploaded_file($_FILES['image']['tmp_name'],"public/uploads/".$_FILES['image']['name']);
            $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
            <strong>Sửa thành công tin tức: ' . $_POST['name'] . '</strong>
        </div>']);
            header('Location:?controller=article&action=index');
        }
    }
    function delete()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $article = new article();
            if ($article->delete('articles', ['id' => $_GET['id']])) {
                $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                <strong>Xóa thành công tin tức ID: ' . $_GET['id'] . '</strong>
            </div>']);
                header('Location:?controller=article&action=index');
            }
        } else {
            header('Location:?controller=article&action=index');
        }
    }
}
