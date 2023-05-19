<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <title>Website bán sách</title>
  <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Vendors styles-->
  <link rel="stylesheet" href="public/assets/vendors/simplebar/css/simplebar.css">
  <link rel="stylesheet" href="public/assets/css/vendors/simplebar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Main styles for this application-->
  <link href="public/assets/css/style.css" rel="stylesheet">
  <!-- We use those styles to show code examples, you should remove them in your application.-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
  <link href="public/assets/css/examples.css" rel="stylesheet">
  <!-- Datatable css -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <!-- Datatable js -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics-->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    // Shared ID
    gtag('config', 'UA-118965717-3');
    // Bootstrap ID
    gtag('config', 'UA-118965717-5');
  </script>
  <link href="public/assets/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
</head>

<body>
  <!-- nav -->
  <?php include "view/widgets/nav.php" ?>
  <!-- endnav-->
  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <!-- header -->
    <?php include "view/widgets/header.php" ?>
    <!-- endheader -->
    <?php include "{$view}.php" ?>
    <!-- footer -->
    <?php include "view/widgets/footer.php" ?>
    <!-- endfooter -->
  </div>

  <!-- CoreUI and necessary plugins-->
  <script src="public/assets/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
  <script src="public/assets/vendors/simplebar/js/simplebar.min.js"></script>
  <!-- Plugins and scripts required by this view-->
  <script src="public/assets/vendors/chart.js/js/chart.min.js"></script>
  <script src="public/assets/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
  <script src="public/assets/vendors/@coreui/utils/js/coreui-utils.js"></script>
  <script src="public/assets/js/main.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable({
        language: {
          processing: "Message khi đang tải dữ liệu",
          search: "Tìm kiếm",
          lengthMenu: "Điều chỉnh số lượng bản ghi trên 1 trang _MENU_ ",
          info: "Bản ghi từ _START_ đến _END_ Tổng công _TOTAL_ bản ghi",
          infoEmpty: "Khi không có dữ liệu, Hiển thị 0 bản ghi trong 0 tổng cộng 0 ",
          infoFiltered: "(Message bổ sung cho info khi không search đc record nào _MAX_)",
          infoPostFix: "", // Cái này khi thêm vào nó sẽ đứng sau info
          loadingRecords: "",
          zeroRecords: "Khi tìm kiếm không match với record nào",
          emptyTable: "Không có dữ liệu",
          paginate: {
            first: "Trang đầu",
            previous: "Trang trước",
            next: "Trang sau",
            last: "Trang cuối"
          },
          aria: {
            sortAscending: ": Message khi đang sắp xếp theo column",
            sortDescending: ": Message khi đang sắp xếp theo column",
          }
        },
      });
    });
  </script>



</body>

</html>