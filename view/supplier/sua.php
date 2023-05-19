<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=supplier&action=index">Nhà xuất bản</a></span></li>
            <li class="breadcrumb-item active"><span>Sửa</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
    <form action="?controller=supplier&action=update" method="post" enctype="multipart/form-data">
        <div class="row">
            <div>
                <input type="hidden" name="id" value="<?=$list_supplier->id?>">
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tên nhà xuất bản</label>
                    <input type="text" name="name" class="form-control" required value="<?=$list_supplier->name ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="phone" name="phone" class="form-control" value="<?=$list_supplier->phone ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" required value="<?=$list_supplier->email ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image" class="form-control">
                    <img src="public/uploads/<?=$list_supplier->image ?>" alt="" width="100">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="file" name="logo" class="form-control">
                    <img src="public/uploads/<?=$list_supplier->logo ?>" alt="" width="100">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Alias</label>
                    <input type="text" name="alias" class="form-control" value="<?=$list_supplier->alias ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Keyword</label>
                    <input type="text" name="keyword" class="form-control" value="<?=$list_supplier->keyword ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Chia sẻ ảnh</label>
                    <input type="text" name="imgshare" class="form-control" value="<?=$list_supplier->imgshare ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="<?=$list_supplier->title ?>">
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
                <textarea name="desc" id="" cols="60" rows="5"><?=$list_supplier->desc ?></textarea>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-primary" value="Sửa">
                <a name="" id="" class="btn btn-warning" href="?controller=supplier&action=index" role="button">Quay về</a>
            </div>
        </div>
    </form>
</div>