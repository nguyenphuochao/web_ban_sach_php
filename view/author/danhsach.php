<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=author&action=index">Tác giả</a></span></li>
            <li class="breadcrumb-item active"><span>Danh sách</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<table class="table" id="myTable">
<p>Danh sách (<?= count($list_author) ?> dòng)</p>
    <?= $this->get_error('alert') ?>
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Avatar</th>
            <th>Tên tác giả</th>
            <th>Tóm tắt</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Thao tác</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $count = 1;
        foreach ($list_author as $item) { ?>
            <tr>
                <td><?= $count++ ?></td>
                <td><img src="public/uploads/<?= $item->avatar ?>" alt="" width="80"></td>
                <td><?= $item->name ?></td>
                <td><?= $item->sumary ?></td>
                <td><?= $item->phone ?></td>
                <td><?= $item->address ?></td>
                <td><?= $item->email ?></td>
                <td>
                    <a href="?controller=author&action=detail&id=<?= $item->id ?>"><button class="btn btn-warning">Sửa</button></a>
                    <a href="?controller=author&action=delete&id=<?= $item->id ?>" onclick="return confirm('Bạn chắc xóa chứ?')"><button class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>
