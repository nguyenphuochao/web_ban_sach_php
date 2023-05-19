<!-- breadcrumb -->
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span><a href="?controller=system&action=index">Home</a></span>
      </li>
      <li class="breadcrumb-item"><span><a href="?controller=user&action=index">User</a></span></li>
      <li class="breadcrumb-item active"><span>Danh sách user</span></li>
    </ol>
  </nav>
</div>
<!-- breadcrumb -->
<table class="table" id="myTable">
<p>Danh sách(<strong><?=count($list_role)?></strong> dòng)</p>
<?=$this->get_error('alert')?>
  <thead class="table-dark">
    <tr>
      <th>#</th>
      <th>Hình</th>
      <th>Tên</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Ngày tạo</th>
      <th>Thao tác</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $count = 1;
    foreach ($list_role as $item) { ?>
      <tr>
        <td><?= $count++ ?></td>
        <td><img src="public/uploads/<?=$item->image ?>" alt="" width="40px"></td>
        <td><?= $item->name ?></td>
        <td><?= $item->email ?></td>
        <td><?= $item->phone ?></td>
        <td><?= $item->created_at ?></td>
        <td>
          <a href="?controller=role&action=edit&id=<?=$item->id?>"><button class="btn btn-warning">Cấp quyền</button></a>
        </td>
      </tr>

    <?php } ?>
  </tbody>
</table>
