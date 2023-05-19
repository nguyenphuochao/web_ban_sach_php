<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=article_group&action=index">Danh mục tin tức</a></span></li>
            <li class="breadcrumb-item active"><span>Danh sách</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<table class="table" id="myTable">
    <?= $this->get_error('alert') ?>
    <p>Danh sách (<?= count($list_article_group) ?> dòng)</p>
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Hình</th>
            <th width="20%">Tên danh mục</th>
            <th>Nội dung tóm tắt</th>
            <th>Ngày tạo</th>
            <th>Thao tác</th>
        </tr>

    </thead>
    <tbody>
        <?php
        $count = 1;
        foreach ($list_article_group as $item) { ?>
            <tr>
                <td><?= $count++ ?></td>
                <td><img src="public/uploads/<?= $item->image ?>" alt="" width="120px"></td>
                <td><?= $item->name ?></td>
                <td><?= $item->sumary ?></td>
                <th><?=$item->created_at?></th>
                <td>
                    <a href="?controller=article_group&action=detail&id=<?= $item->id ?>"><button class="btn btn-warning">Sửa</button></a>
                    <a href="?controller=article_group&action=delete&id=<?= $item->id ?>" onclick="return confirm('Bạn chắc xóa chứ?')"><button class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>