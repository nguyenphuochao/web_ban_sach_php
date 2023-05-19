<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
      </li>
      <li class="breadcrumb-item"><span><a href="?controller=supplier&action=index">Nhà cung cấp</a></span></li>
      <li class="breadcrumb-item active"><span>Danh sách</span></li>
    </ol>
  </nav>
</div>
<!-- breadcrumb -->
<table class="table" id="myTable">
<p>Danh sách (<?= count($listsupplier) ?> dòng)</p>
<?=$this->get_error('alert')?>
  <thead class="table-dark">
    <tr>
      <th>#</th>
      <th>Hình</th>
      <th>Tên NXB</th>
      <th>Số điện thoại</th>
      <th>Email</th>
      <th>Ngày tạo</th>
      <th>Thao tác</th>
   
    </tr>
  </thead>
  <tbody>
    <?php
    $count = 1;
    foreach ($listsupplier as $item) { ?>
      <tr>
        <td><?= $count++ ?></td>
        <td><img src="public/uploads/<?= $item->image ?>" alt="" width="80"></td>
        <td><?= $item->name ?></td>
        <td><?= $item->phone ?></td>
        <td><?= $item->email ?></td>
        <td><?= $item->created_at ?></td>
       <td>
        <a href="?controller=supplier&action=detail&id=<?=$item->id ?>"><button class="btn btn-warning">Sửa</button></a>
        <a href="?controller=supplier&action=delete&id=<?=$item->id ?>" onclick="return confirm('Bạn chắc xóa chứ?')"><button class="btn btn-danger">Xóa</button></a>
       </td>
      </tr>

    <?php } ?>
  </tbody>
</table>
