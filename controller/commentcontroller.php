<?php
class commentcontroller extends controller
{
    function index()
    {
        $comment = new comment();
        $list_comment = $comment->list_all_comment();
        $this->render('view/comment/danhsach', ['list_comment' => $list_comment]);
    }
    function delete()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $comment = new comment();
            if ($comment->delete('comments', ['id' => $_GET['id']])) {
                $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
                    <strong>Xóa thành công ID: ' . $_GET['id'] . '</strong>
                </div>']);
                header('Location:?controller=comment&action=index');
            }
        } else {
            header('Location:?controller=comment&action=index');
        }
    }
}
