<?php
class productcontroller extends controller
{
  function index()
  {
    $product = new product();
    $listproduct = $product->list_product_all();
    $this->render('view/product/danhsach', ['listproduct' => $listproduct]);
  }
  function create()
  {
    $category = new category();
    $list_cate = $category->select('categories', ['status' => 1]);
    $supplier = new supplier();
    $list_supplier = $supplier->select('suppliers', ['status' => 1]);
    $author = new author();
    $list_author = $author->select('authors', ['status' => 1]);
    if (isset($_POST['name'], $_POST['sku'], $_POST['qty'], $_POST['price'])) {
      $product = new product();
      $list_product = $product->insert('products', [
        'category_id' => $_POST['category_id'],
        'supplier_id' => $_POST['supplier_id'],
        'author_id' => $_POST['author_id'],
        'name' => $_POST['name'],
        'image' => $_FILES['image']['name'],
        'number_of_pages' => $_POST['number_of_pages'],
        'sumary' => $_POST['sumary'],
        'content' => $_POST['content'],
        'sku' => $_POST['sku'],
        'qty' => $_POST['qty'],
        'price' => $_POST['price'],
        'images' => $_FILES['images']['name'],
        'size' => $_POST['size'],
        'weight' => $_POST['weight'],
        'alias' => $_POST['alias'],
        'keyword' => $_POST['keyword'],
        'desc' => $_POST['content'],
        'imgshare' => $_POST['imgshare'],
        'title' => $_POST['title'],
        'status' => $_POST['status']
      ]);
      if ($list_product) {
        move_uploaded_file($_FILES['image']['tmp_name'], "public/uploads/" . $_FILES['image']['name']);
        move_uploaded_file($_FILES['images']['tmp_name'], "public/uploads/" . $_FILES['images']['name']);
        $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
        <strong>Thêm thành công sản phẩm tên: ' . $_POST['name'] . '</strong>
       </div>']);
        header('Location:?controller=product&action=index');
      }
    }
    $this->render('view/product/them', ['list_cate' => $list_cate, 'list_supplier' => $list_supplier, 'list_author' => $list_author, 'thongbao' => $thongbao ?? '']);
  }
  function detail()
  {
    if (isset($_GET['id']) && $_GET['id']) {
      $product = new product();
      $list_product = $product->item('products', ['id' => $_GET['id']]);
      $category = new category();
      $list_cate = $category->select('categories', ['status' => 1]);
      $supplier = new supplier();
      $list_supplier = $supplier->select('suppliers', ['status' => 1]);
      $author = new author();
      $list_author = $author->select('authors', ['status' => 1]);
    } else {
      header('Location:?controller=product&action=index');
    }
    $this->render('view/product/sua', ['list_cate' => $list_cate, 'list_product' => $list_product, 'list_supplier' => $list_supplier, 'list_author' => $list_author]);
  }
  function update()
  {
    $product = new product();
    $list_product = $product->item('products', ['id' => $_POST['id']]);
    $update_product = $product->update('products', [
      'category_id' => $_POST['category_id'],
      'supplier_id' => $_POST['supplier_id'],
      'author_id' => $_POST['author_id'],
      'name' => $_POST['name'],
      'image' => $_FILES['image']['name'] ? $_FILES['image']['name'] : $list_product->image,
      'number_of_pages' => $_POST['number_of_pages'],
      'sumary' => $_POST['sumary'],
      'content' => $_POST['content'],
      'sku' => $_POST['sku'],
      'qty' => $_POST['qty'],
      'price' => $_POST['price'],
      'images' => $_FILES['images']['name'] ? $_FILES['images']['name'] : $list_product->images,
      'size' => $_POST['size'],
      'weight' => $_POST['weight'],
      'alias' => $_POST['alias'],
      'keyword' => $_POST['keyword'],
      'desc' => $_POST['content'],
      'imgshare' => $_POST['imgshare'],
      'title' => $_POST['title'],
      'status' => $_POST['status']
    ], ['id' => $_POST['id']]);
    if ($update_product) {
      $this->set_error(['alert' => '<div class="alert alert-success" role="alert">
        <strong>Sửa thành công sản phẩm có tên:' . $_POST['name'] . '</strong>
      </div>']);
      header('Location:?controller=product&action=index');
    }
  }
  function delete()
  {
    if (isset($_GET['id']) && $_GET['id']) {
      $product = new product();
      $list_product = $product->delete('products', ['id' => $_GET['id']]);
      if ($list_product) {
        $this->set_error(['alert' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <strong>Xóa thành công ID:' . $_GET['id'] . '</strong> 
              </div>
              
              <script>
                $(".alert").alert();
              </script>']);
        header('Location:?controller=product&action=index');
      } else {
        $this->set_error(['alert' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <strong>Xóa thất bại</strong> 
              </div>
              
              <script>
                $(".alert").alert();
              </script>']);
        header('Location:?controller=product&action=index');
      }
    } else {
      header('Location:?controller=product&action=index');
    }
  }
}
