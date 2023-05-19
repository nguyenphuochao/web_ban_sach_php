<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item"><span>User</span></li>
            <li class="breadcrumb-item active"><span>Sửa</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
        <!-- <?= $thongbao ?> -->
    <form action="?controller=user&action=update" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nhóm người dùng</label>
            <select name="group_id" id="" class="form-control" required >
                <option value="">Vui lòng chọn</option>
                <?php foreach ($listUserGroup as $value) { ?>
                    <option <?php if($value->id==$list_user->group_id) echo "selected" ?>
                     value="<?= $value->id ?>"><?= $value->name ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?=$list_user->id?>">
        </div>
        <div class="form-group">
            <label for="">Tên người dùng</label>
            <input type="text" name="name" class="form-control" value="<?=$list_user->name?>">
        </div>
        <div class="form-group">
            <label for="">Tên đăng nhập</label>
            <input type="text" name="username" class="form-control" value="<?=$list_user->username?>" readonly>
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="text" name="password" class="form-control" placeholder="Nhập vào nếu muốn đổi mật khẩu khác">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="<?=$list_user->email?>">
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control" value="<?=$list_user->phone?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="file" name="image" class="form-control">
            <img src="public/uploads/<?=$list_user->image?>" alt="" width="190px">
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label><br>
            <input type="radio" name="status" <?php if($list_user->status==1) echo "checked" ?> value="1">Kích hoạt
            <input type="radio" name="status" <?php if($list_user->status==0) echo "checked" ?> value="0">Không kích hoạt
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Sửa">
            <a href="?controller=user&action=index"><input type="button" class="btn btn-warning" value="Quay về"></a>
        </div>
    </form>
</div>