<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=customer&action=index">Khách hàng</a></span></li>
            <li class="breadcrumb-item active"><span>Sửa</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
    <form action="?controller=customer&action=update" method="post" enctype="multipart/form-data">
        <div class="row">
            <div>
                <input type="hidden" name="id" value="<?= $get_customer->id ?>">
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tên khách hàng</label>
                    <input type="text" name="name" class="form-control" required value="<?= $get_customer->name ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Điện thoại</label>
                    <input type="text" name="phone" class="form-control" value="<?= $get_customer->phone ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?= $get_customer->email ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Giới tính</label>
                    <input type="text" name="gender" placeholder="Nhập 1 là Nam, Nhập 0 là nữ" class="form-control" value="<?= $get_customer->gender ?>">
                </div>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-primary" value="Sửa">
                <a name="" id="" class="btn btn-warning" href="?controller=customer&action=index" role="button">Quay về</a>
            </div>
        </div>
    </form>
</div>