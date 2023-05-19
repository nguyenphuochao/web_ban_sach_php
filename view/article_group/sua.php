<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=article_group&action=index">Danh mục tin tức</a></span></li>
            <li class="breadcrumb-item active"><span>Sửa</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
    <form action="?controller=article_group&action=update" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="name" class="form-control" value="<?= $get_article_group->name ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image" class="form-control">
                    <img src="public/uploads/<?=$get_article_group->image?>" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Bản tóm tắt</label>
                    <input type="text" name="sumary" class="form-control" value="<?= $get_article_group->sumary ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Alias</label>
                    <input type="text" name="alias" class="form-control" value="<?= $get_article_group->alias ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Keyword</label>
                    <input type="text" name="keyword" class="form-control" value="<?= $get_article_group->keyword ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="<?= $get_article_group->title ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">ImgShare</label>
                    <input type="text" name="imgshare" class="form-control" value="<?= $get_article_group->imgshare ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Parent_id</label>
                    <input type="text" name="parent_id" class="form-control" value="<?= $get_article_group->parent_id ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Status</label><br>
                    <input type="radio" name="status" checked value="1">Kích hoạt
                    <input type="radio" name="status" value="0">Không kích hoạt
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Nội dung</label><br>
                    <textarea name="content" id="" cols="70" rows="10"><?= $get_article_group->content ?></textarea>
                </div>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-primary" value="Sửa">
                <input type="hidden" name="id" value="<?=$get_article_group->id?>"> 
                <a name="" id="" class="btn btn-warning" href="?controller=article_group&action=index" role="button">Quay về</a>
            </div>
        </div>
    </form>
</div>