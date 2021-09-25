<h1 style="width:100%;float:left;text-align: center;">Quản Lý Đơn Hàng</h1>
<form action="" method="post">
    <table>
        <tr>
            <td  class="col">Mã Đơn Hàng</td>
            <td class="col">Họ Tên</td>
            
            <td class="col">Địa Chỉ</td>
            <td class="col">Email</td>
            <td class="col">Điện Thoại</td>
            <td class="col">Ngày Đặt</td>
            <td class="col">Chi tiết</td>
        </tr>
        <?php
                  foreach ($kh as $cata) {
                    # code...
                    echo '<tr>
                    <td>'.$cata['madh'].'</td>
                    <td>'.$cata['hoten'].'</td>
                    <td>'.$cata['diachi'].'</td>
                    <td>'.$cata['email'].'</td>
                    <td>'.$cata['dienthoai'].'</td>
                    <td>'.$cata['ngaydat'].'</td>     
                    <td><a href="index.php?ctrl=khachhang&action=chitietkh&madh='.$cata['madh'].'" class="xoa">Chi tiết</a></td>               
                  </tr>';
                  }
                
                ?>
    </table>
    <!-- <div class="chon">
      <button><a href="index.php?ctrl=catalog&action=addnew">Thêm mới</a></button>
    </div> -->
</form>
