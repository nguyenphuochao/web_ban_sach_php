<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=order&action=index">Đơn hàng</a></span></li>
            <li class="breadcrumb-item active"><span>Danh sách</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<table class="table" id="myTable">
    <p>Danh sách (<?= count($list_order) ?> dòng)</p>
    <?= $this->get_error('alert') ?>
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Tên khách hàng</th>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt hàng</th>
            <th>Trạng thái đơn hàng</th>
            <th>Phương thức thanh toán</th>
            <th>Thao tác</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $count = 1;
        foreach ($list_order as $item) { ?>
            <tr>
                <td><?= $count++ ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->code ?></td>
                <td><?= $item->order_date ?></td>

                <td><?php
                    if ($item->order_status == 0)
                        echo '<span class="badge bg-warning text-dark">Chưa giao</span>';
                    else if ($item->order_status == 1)
                        echo '<span class="badge bg-primary">Đang giao hàng</span>';
                    else if ($item->order_status == 2)
                        echo '<span class="badge bg-success">Đã giao hàng</span>';
                    else
                        echo '<span class="badge bg-danger">Đã hủy đơn</span>';
                    ?></td>
                <td><?= $item->payment ?></td>
                <td>
                    <a href="?controller=order&action=detail&id=<?= $item->id ?>"><button class="btn btn-warning">Sửa/Xem chi tiết</button></a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>