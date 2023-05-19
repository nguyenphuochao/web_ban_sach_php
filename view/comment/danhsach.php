<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=comment&action=index">Bình luận</a></span></li>
            <li class="breadcrumb-item active"><span>Danh sách</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<table class="table" id="myTable">
    <p>Danh sách (<?= count($list_comment) ?> dòng)</p>
    <?= $this->get_error('alert') ?>
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Tên người dùng</th>
            <th>Nội dung</th>
            <th>Tên sản phẩm</th>
            <th>Ngày bình luận</th>
            <th>Thao tác</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $count = 1;
        foreach ($list_comment as $item) { ?>
            <tr>
                <td><?= $count++ ?></td>
                <td><?= $item->user_name ?></td>
                <td><?= $item->comment_desc ?></td>
                <td><?= $item->product_name ?></td>
                <td><?= $item->comment_date ?></td>
                <td>
                    <a href="?controller=comment&action=delete&id=<?= $item->comment_id ?>" onclick="return confirm('Bạn chắc xóa chứ?')"><button class="btn btn-danger btn-md">Xóa</button></a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>