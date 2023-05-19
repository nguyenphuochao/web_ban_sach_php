<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=customer&action=index">Khách hàng</a></span></li>
            <li class="breadcrumb-item active"><span>Danh sách</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<table class="table" id="myTable">
    <p>Danh sách (<?= count($list_customer) ?> dòng)</p>
    <?= $this->get_error('alert') ?>
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Giới tính</th>
            <th>Thao tác</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $count = 1;
        foreach ($list_customer as $item) { ?>
            <tr>
                <td><?= $count++ ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->email ?></td>
                <td><?= $item->phone ?></td>
                <td><?= $item->gender == 1 ? 'Nam' : 'Nữ' ?></td>
                <td>
                    <a href="?controller=customer&action=detail&id=<?= $item->id ?>"><button class="btn btn-warning btn-md">Sửa</button></a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>