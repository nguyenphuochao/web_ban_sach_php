<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=article&action=index">Tin tức</a></span></li>
            <li class="breadcrumb-item active"><span>Sửa</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
    <form action="?controller=article&action=update" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="group_id" id="" class="form-control" name="category" required>
                        <option value="">Vui lòng chọn danh mục</option>
                        <?php foreach ($list_article_group as $item) { ?>
                            <option value="<?= $item->id ?>"
                            <?=$item->id==$get_article->group_id?'selected':''?>
                            ><?= $item->name ?></option>
                        <?php  } ?>

                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tên tin tức</label>
                    <input type="text" name="name" class="form-control" value="<?=$get_article->name?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image" class="form-control">
                    <img src="public/uploads/<?=$get_article->image?>" alt="" width="200px">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Bản tóm tắt</label>
                    <input type="text" name="sumary" class="form-control" value="<?=$get_article->sumary?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Alias</label>
                    <input type="text" name="alias" class="form-control" value="<?=$get_article->alias?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Keyword</label>
                    <input type="text" name="keyword" class="form-control" value="<?=$get_article->keyword?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="<?=$get_article->title?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">ImgShare</label>
                    <input type="text" name="imgshare" class="form-control" value="<?=$get_article->imgshare?>">
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
                    <textarea name="content" id="" cols="70" rows="10"><?=$get_article->content?></textarea>
                </div>
            </div>
            <div class="mt-3">
                <input type="hidden" name="id" value="<?=$get_article->id?>">
                <input type="submit" class="btn btn-primary" value="Sửa">
                <a name="" id="" class="btn btn-warning" href="?controller=article&action=index" role="button">Quay về</a>
            </div>
        </div>
    </form>
</div>