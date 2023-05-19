<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
      </li>
      <li class="breadcrumb-item"><span><a href="?controller=category&action=index">Danh mục</a></span></li>
      <li class="breadcrumb-item active"><span>Danh sách</span></li>
    </ol>
  </nav>
</div>
<!-- breadcrumb -->
<table class="table" id="myTable">
<p>Danh sách (<?= count($listcategory) ?> dòng)</p>
  <?= $this->get_error('alert') ?>
  <thead class="table-dark">
    <tr>
      <th>#</th>
      <th>Hình</th>
      <th>Tên sản phẩm</th>
      <th>Bản tóm tắt</th>
      <th>Ngày tạo</th>
      <th>Thao tác</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $count = 1;
    foreach ($listcategory as $item) { ?>
      <tr>
        <td><?= $count++ ?></td>
        <td><?= $item->image ?></td>
        <td><?= $item->name ?></td>
        <td><?= $item->sumary ?></td>
        <td><?= $item->created_at ?></td>
        <td>
          <a href="?controller=category&action=detail&id=<?= $item->id ?>"><button class="btn btn-warning">Sửa</button></a>
          <a href="?controller=category&action=delete&id=<?= $item->id ?>" onclick="return confirm('Bạn chắc xóa chứ?')"><button class="btn btn-danger">Xóa</button></a>
        </td>
      </tr>

    <?php } ?>
  </tbody>
</table>
