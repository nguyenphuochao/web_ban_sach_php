<?php
class rolecontroller extends controller
{
    function index()
    {
        $role = new role();
        $list_role = $role->select('users', ['status' => 1]);
        $this->render('view/role/danhsach', ['list_role' => $list_role]);
    }
    function edit()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $role = new role();
            $get_item = $role->item('users', ['id' => $_GET['id'], 'status' => 1,]);
            $parentList = $role->list_function();


            $this->render('view/role/sua', ['get_item' => $get_item, 'parentList' => $parentList, 'role' => $role]);
        } else {
            header('Location:?controller=role&action=index');
        }
    }
    function update()
    {
        $user_id = $_POST['id'];
        $func_id = $_POST['funcs'];
        if ($user_id) {
            $role = new role();
            // Thu hồi quyền
            $role->delete('roles',['user_id'=>$user_id]);
            // Cấp quyền mới
            foreach ($func_id as $func) {
                $role->insert('roles', ['user_id' => $user_id, 'func_id' => $func]);
            }
            $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
            <strong>Cấp quyền thành công</strong>
        </div>']);
        }
        header('Location:?controller=role&action=edit&id=' . $_POST['id']);
    }
}
