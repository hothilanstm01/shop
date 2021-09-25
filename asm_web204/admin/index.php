<!doctype html>
<html lang="en">
  <head>
    <title>Hồ Thị Lann</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../admin/view/css/style.css">
  </head>
  <body>
    <div class="menu">
    <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?ctrl=catalog">Danh Mục</a></li>
        <li><a href="index.php?ctrl=product&action=manager">Sản Phẩm</a></li>
        <li><a href="index.php?ctrl=khachhang">Đơn Hàng</a></li>
        <li><a href="#">Bình Luận</a></li>
        <li><a href="index.php?ctrl=thongke">Thống Kê</a></li>
        <li><a href="#">Tài Khoản</a></li>
    </ul>
    </div>
   <div class="home">
   <?php
    $ctrl='home';
      if(isset($_GET['ctrl'])){
        $ctrl=$_GET['ctrl'];
      }
      include 'cotroller/'.$ctrl.'.php';
    
    ?>
   </div>
     
    
  </body>
</html>
