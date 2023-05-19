<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=category&action=index">Danh mục</a></span></li>
            <li class="breadcrumb-item active"><span>Sửa</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
    <form action="?controller=category&action=update" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <input type="hidden" name="id" value="<?=$list_category->id?>" >
                </div>
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="name" class="form-control" required value="<?=$list_category->name?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Nội dung tóm tắt</label>
                    <input type="text" name="sumary" class="form-control" value="<?=$list_category->sumary?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image" class="form-control">
                    <img src="public/uploads/<?=$list_category->image?>" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Alias</label>
                    <input type="text" name="alias" class="form-control" value="<?=$list_category->alias?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Keyword</label>
                    <input type="text" name="keyword" class="form-control" value="<?=$list_category->keyword?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Chia sẻ ảnh</label>
                    <input type="text" name="imgshare" class="form-control" value="<?=$list_category->imgshare?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="<?=$list_category->title?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Parent</label><br>
                    <input type="text" name="parent_id" class="form-control" value="<?=$list_category->parent_id?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Status</label><br>
                    <input type="radio" name="status" checked value="1">Kích hoạt
                    <input type="radio" name="status" value="0">Hủy kích hoạt
                </div>
            </div>
            <div class="form-group mt-2">
                <label for="">Mô tả</label><br>
                <textarea name="desc" id="" cols="60" rows="5"><?=$list_category->desc?></textarea>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-primary" value="Sửa">
                <a name="" id="" class="btn btn-warning" href="?controller=category&action=index" role="button">Quay về</a>
            </div>
        </div>
    </form>
</div>