<?php
class usercontroller extends controller
{
  function index()
  {
    $user = new user();
    $listuser = $user->list_user();
    $this->render('view/user/danhsach', ['listuser' => $listuser], 'layout');
  }
  function create()
  {
    $user_group = new user_group();
    $listUserGroup = $user_group->select('user_groups', ['status' => 1]);
    if (isset($_POST['name'], $_POST['username'], $_POST['password'], $_POST['group_id'])) {
      $user = new user();
      $list_user = $user->insert('users', [
        'group_id' => $_POST['group_id'],
        'name' => $_POST['name'],
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'status' => $_POST['status'],
        'email' => $_POST['email'],
        'image' => $_FILES['image']['name'],
        'phone' => $_POST['phone']
      ]);
      if ($list_user) {
        move_uploaded_file($_FILES['image']['tmp_name'], "public/uploads/" . $_FILES['image']['name']);
        $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
          <strong>Thêm thành công user có tên: ' . $_POST['name'] . '</strong>
        </div>']);
        header('Location:?controller=user&action=index');
      }
    }
    $this->render('view/user/them', ['listUserGroup' => $listUserGroup]);
  }
  function delete()
  {
    if (isset($_GET['id']) && $_GET['id']) {
      $user = new user();
      $list_user = $user->item('users', ['id' => $_GET['id']]);
      if ($list_user && $list_user->status != -1) {
        if ($user->update('users', ['status' => -1], ['id' => $_GET['id']])) {
          $this->set_error(['alert' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Xóa thành công ID: ' . $_GET['id'] . '</strong> 
          </div>
          
          <script>
            $(".alert").alert();
          </script>']);
          header('Location:?controller=user&action=index');
        } else {
          $this->set_error(['alert' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Xóa thất bại ID: ' . $_GET['id'] . '</strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>']);
          header('Location:?controller=user&action=index');
        }
      } else {
        $this->set_error(['alert' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>ID: ' . $_GET['id'] . ' không tồn tại</strong> 
      </div>
      
      <script>
        $(".alert").alert();
      </script>']);
        header('Location:?controller=user&action=index');
      }
    } else {
      header('Location:?controller=user&action=index');
    }
  }
  function detail()
  {
    if (isset($_GET['id']) && $_GET['id']) {
      $user = new user();
      $list_user = $user->item('users', ['id' => $_GET['id']]);
      $user_group = new user_group();
      $listUserGroup = $user_group->select('user_groups', ['status' => 1]);
    } else {
      header('Location:?controller=user&action=index');
    }
    $this->render('view/user/sua', ['list_user' => $list_user, 'listUserGroup' => $listUserGroup], 'layout');
  }
  function update()
  {
    $user = new user();
    $list_user = $user->item('users', ['id' => $_POST['id']]);
    $list_user_update = $user->update('users', [
      'group_id' => $_POST['group_id'],
      'name' => $_POST['name'],
      'username' => $_POST['username'],
      'password' => $_POST['password']?$_POST['password']:$list_user->password,
      'status' => $_POST['status'],
      'email' => $_POST['email'],
      'image' => $_FILES['image']['name'] ? $_FILES['image']['name'] : $list_user->image,
      'phone' => $_POST['phone']
    ], ['id' => $_POST['id']]);
    if ($list_user_update) {
      move_uploaded_file($_FILES['image']['tmp_name'], 'public/uploads/' . $_FILES['image']['name']);
      $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
        <strong>Cập nhật thành công user có tên:' . $_POST['name'] . '</strong>
      </div>']);
      header('Location:?controller=user&action=index');
    }
  }
  function login()
  {

    if (isset($_POST['username'], $_POST['password'])) {
      $user = new user();
      $listuser = $user->login($_POST['username'], $_POST['password']);
      if ($listuser) {
        if ($listuser->status == 1) {
          $_SESSION['status_login'] = true;
          $_SESSION['image'] = $listuser->image;
          $_SESSION['name'] = $listuser->name;
          $_SESSION['user_id']=$listuser->id;
          header('Location:?controller=system&action=index');
        } else {
          $thongbao = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Tài khoản bị khóa rồi</strong> 
          </div>
          
          <script>
            $(".alert").alert();
          </script>';
        }
      } else {
        $thongbao = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>Sai thông tin thông đăng nhập</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>';
      }
    }
    $this->render('view/user/login', ['thongbao' => $thongbao ?? ''], 'emptylayout');
  }
  function logout()
  {
    session_destroy();
    header('Location:?controller=user&action=login');
  }
  function register()
  {
    $this->render('view/user/register', [], 'emptylayout');
  }
  function contact()
  {
    include 'view/lienhe.php';
  }
}
