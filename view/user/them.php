<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item"><span>User</span></li>
            <li class="breadcrumb-item active"><span>Thêm</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nhóm người dùng</label>
            <select name="group_id" id="" class="form-control" required >
                <option value="">Vui lòng chọn</option>
                <?php foreach ($listUserGroup as $value) { ?>
                    <option value="<?= $value->id ?>"><?= $value->name ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Tên người dùng</label>
            <input type="text" name="name" class="form-control" required >
        </div>
        <div class="form-group">
            <label for="">Tên đăng nhập</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="text" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control" >
        </div>
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label><br>
            <input type="radio" name="status" checked value="1">Kích hoạt
            <input type="radio" name="status" value="0">Không kích hoạt
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Thêm">
            <a href="?controller=user&action=index"><input type="button" class="btn btn-warning" value="Quay về"></a>
        </div>
    </form>
</div>