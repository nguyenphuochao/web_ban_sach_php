<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
            </li>
            <li class="breadcrumb-item"><span><a href="?controller=order&action=index">Đơn hàng</a></span></li>
            <li class="breadcrumb-item active"><span>Sửa/Chi tiết</span></li>
        </ol>
    </nav>
</div>
<!-- breadcrumb -->
<div class="container">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-12">
                    <div class="container123">
                        <h4></h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="col-md-4">Thông tin khách hàng</th>
                                    <th class="col-md-6"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Thông tin người đặt hàng</td>
                                    <td><?=$get_customer->name?></td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt hàng</td>
                                    <td><?=$get_customer->order_date?></td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td><?=$get_customer->phone?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?=$get_customer->email?></td>
                                </tr>
                                <tr>
                                    <td>Giới tính</td>
                                    <td><?=$get_customer->gender==1?'Nam':'Nữ'?></td>
                                </tr>
                                <tr>
                                    <td>Ghi chú</td>
                                    <td><?=$get_customer->order_shipping?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <table id="" class="table table-bordered table-hover">
                        <thead>
                            <tr role="row">
                                <th class="sorting col-md-1">STT</th>
                                <th class="sorting_asc col-md-4">Tên sản phẩm</th>
                                <th class="sorting col-md-2">Số lượng</th>
                                <th class="sorting col-md-2">Giá tiền</th>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            $total = 0;
                            foreach ($list_order as $item) {
                                $subtotal = $item->product_qty * $item->product_price;
                                $total += $subtotal;

                            ?>

                                <tr>
                                    <td><?= $count++ ?></td>
                                    <td><?= $item->product_name ?></td>
                                    <td><?= $item->product_qty ?></td>
                                    <td><?= number_format($item->product_price) ?></td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="3"><b>Tổng tiền</b></td>
                                <td colspan="1"><b class="text-danger"><?= number_format($total) ?> VNĐ</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <form action="?controller=order&action=update" method="post">
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <label for="">Trạng thái giao hàng:</label>
                            <select name="order_status" id="" style="width:300px;height: 35px;">
                                <option value="0">Chưa giao</option>
                                <option value="1">Đang giao</option>
                                <option value="2">Đã giao</option>
                                <option value="3">Đã hủy</option>
                            </select>
                            <input type="hidden" name="id" value="<?=$get_customer->order_id?>">
                            <input type="hidden" name="name" value="<?=$get_customer->name?>">
                            <input type="submit" class="btn btn-primary" value="XỬ LÝ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>