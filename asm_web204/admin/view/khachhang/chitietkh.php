<h1 style="width:100%;float:left;text-align: center;">Chi Tiết Đơn Hàng</h1>
<form action="" method="post">
    <table>
        <tr>
            <td  class="col">Mã Đơn Hàng</td>
            <td class="col">Mã Sản Phẩm</td>
            
            <td class="col">Số Lượng</td>
            
        </tr>
        <?php
                  foreach ($ctkh as $cata) {
                    # code...
                    echo '<tr>
                    <td>'.$cata['madh'].'</td>
                    <td>'.$cata['masp'].'</td>
                    <td>'.$cata['soluong'].'</td>              
                  </tr>';
                  }
                
                ?>
    </table>
    <!-- <div class="chon">
      <button><a href="index.php?ctrl=catalog&action=addnew">Thêm mới</a></button>
    </div> -->
</form>