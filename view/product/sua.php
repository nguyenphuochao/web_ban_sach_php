<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=product&action=index">Product</a></span></li>
            <li class="breadcrumb-item active"><span>Sửa</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
    <form action="?controller=product&action=update" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="category_id" id="" class="form-control" name="category" required>
                        <option value="">Vui lòng chọn</option>
                        <?php foreach ($list_cate as $item) { ?>
                            <option <?php if ($item->id == $list_product->category_id) echo "selected" ?> value="<?= $item->id ?>"><?= $item->name ?></option>
                        <?php  } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Nhà xuất bản</label>
                    <select name="supplier_id" id="" class="form-control" name="supplier" required>
                        <option value="">Vui lòng chọn</option>
                        <?php foreach ($list_supplier as $item) { ?>
                            <option <?php if ($item->id == $list_product->supplier_id) echo "selected" ?> value="<?= $item->id ?>"><?= $item->name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tác giả</label>
                    <select name="author_id" id="" class="form-control" required>
                        <option value="">Vui lòng chọn</option>
                        <?php foreach ($list_author as $item) { ?>
                            <option <?php if ($item->id == $list_product->author_id) echo "selected" ?> value="<?= $item->id ?>"><?= $item->name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div>
                <input type="hidden" name="id" value="<?= $list_product->id ?>">
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tên sách</label>
                    <input type="text" name="name" class="form-control" required value="<?= $list_product->name ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image" class="form-control">
                    <img src="public/uploads/<?= $list_product->image ?>" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Số trang sách</label>
                    <input type="number" name="number_of_pages" class="form-control" value="<?= $list_product->number_of_pages ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Bản tóm tắt</label>
                    <input type="text" name="sumary" class="form-control" value="<?= $list_product->sumary ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Sku</label>
                    <input type="text" name="sku" class="form-control" value="<?= $list_product->sku ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name="qty" class="form-control" value="<?= $list_product->qty ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="price" class="form-control" value="<?= $list_product->price ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Chọn nhiều ảnh</label>
                    <input type="file" name="images" class="form-control" multiple>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Trọng lượng</label>
                    <input type="text" name="weight" class="form-control" value="<?= $list_product->weight ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Kích thước</label>
                    <input type="text" name="size" class="form-control" value="<?= $list_product->size ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Alias</label>
                    <input type="text" name="alias" class="form-control" value="<?= $list_product->alias ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Keyword</label>
                    <input type="text" name="keyword" class="form-control" value="<?= $list_product->keyword ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="<?= $list_product->title ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">ImgShare</label>
                    <input type="text" name="imgshare" class="form-control" value="<?= $list_product->imgshare ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Status</label><br>
                    <input type="radio" name="status" checked>Kích hoạt
                    <input type="radio" name="status">Không kích hoạt
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Nội dung</label><br>
                    <textarea name="content" id="" cols="70" rows="10"><?= $list_product->content ?></textarea>
                </div>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-primary" value="Sửa">
                <a name="" id="" class="btn btn-warning" href="?controller=product&action=index" role="button">Quay về</a>
            </div>
        </div>
    </form>
</div>