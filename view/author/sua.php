<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=author&action=index">Tác giả</a></span></li>
            <li class="breadcrumb-item active"><span>Sửa</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
    <form action="?controller=author&action=update" method="post" enctype="multipart/form-data">
        <div class="row">
            <div>
                <input type="hidden" name="id" value="<?=$list_author->id?>">
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tên tác giả</label>
                    <input type="text" name="name" class="form-control" required value="<?=$list_author->name?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Điện thoại</label>
                    <input type="text" name="phone" class="form-control" value="<?=$list_author->phone?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" value="<?=$list_author->address?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?=$list_author->email?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Bản tóm tắt</label>
                    <input type="text" name="sumary" class="form-control" value="<?=$list_author->sumary?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Hình</label>
                    <input type="file" name="avatar" class="form-control">
                    <img src="public/uploads/<?=$list_author->avatar?>" alt="" width="100px">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Status</label><br>
                    <input type="radio" name="status" checked value="1">Kích hoạt
                    <input type="radio" name="status" value="0">Hủy kích hoạt
                </div>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-primary" value="Sửa">
                <a name="" id="" class="btn btn-warning" href="?controller=author&action=index" role="button">Quay về</a>
            </div>
        </div>
    </form>
</div>