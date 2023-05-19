<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=supplier&action=index">Nhà xuất bản</a></span></li>
            <li class="breadcrumb-item active"><span>Thêm</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tên nhà xuất bản</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="phone" name="phone" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Alias</label>
                    <input type="text" name="alias" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Keyword</label>
                    <input type="text" name="keyword" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Chia sẻ ảnh</label>
                    <input type="text" name="imgshare" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Status</label><br>
                    <input type="radio" name="status" checked value="1">Kích hoạt
                    <input type="radio" name="status" value="0">Hủy kích hoạt
                </div>
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="desc" id="" cols="60" rows="5"></textarea>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-primary" value="Thêm">
                <a name="" id="" class="btn btn-warning" href="?controller=supplier&action=index" role="button">Quay về</a>
            </div>
        </div>
    </form>
</div>