<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
      </li>
      <li class="breadcrumb-item"><span><a href="?controller=product&action=index">Sản phẩm</a></span></li>
      <li class="breadcrumb-item active"><span>Danh sách</span></li>
    </ol>
  </nav>
</div>
<!-- breadcrumb -->
<table class="table" id="myTable">
  <?= $this->get_error('alert') ?>
  <p>Danh sách (<?= count($listproduct) ?> dòng)</p>
  <thead class="table-dark">
    <tr>
      <th>#</th>
      <th>Hình</th>
      <th>Tên sản phẩm</th>
      <th>Giá</th>
      <th>Số lượng</th>
      <th>Tác giả</th>
      <th>Danh mục</th>
      <th width="130">Nhà xuất bản</th>
      <th>Thao tác</th>
    </tr>

  </thead>
  <tbody>
    <?php
    $count = 1;
    foreach ($listproduct as $item) { ?>
      <tr>
        <td><?= $count++ ?></td>
        <td><img src="public/uploads/<?= $item->image ?>" alt="" width="100px"></td>
        <td><?= $item->product_name ?></td>
        <td><?= number_format($item->price)?> VNĐ</td>
        <td><?= $item->qty ?></td>
        <td><?= $item->author_name ?? 'Không có'  ?></td>
        <td><?= $item->cate_name   ?></td>
        <td><?= $item->supplier_name ?></td>
        <td>
          <a href="?controller=product&action=detail&id=<?= $item->product_id ?>"><button class="btn btn-warning">Sửa</button></a>
          <a href="?controller=product&action=delete&id=<?= $item->product_id ?>" onclick="return confirm('Bạn chắc xóa chứ?')"><button class="btn btn-danger">Xóa</button></a>
        </td>
      </tr>

    <?php } ?>
  </tbody>
</table>
