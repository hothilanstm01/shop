<h1 style="width:100%;float:left;text-align: center;">Quản Lý Danh  Mục</h1>
<form action="" method="post">
    <table>
        <tr>
            <td  class="col">Mã Loại</td>
            <td class="col">Tên Loại</td>
            <td class="col">DELETE</td>
            <td class="col">EDIT</td>
        </tr>
        <?php
                  foreach ($catalogs as $cata) {
                    # code...
                    echo '<tr>
                    <td>'.$cata['id'].'</td>
                    <td>'.$cata['name'].'</td>
                    <td><a href="index.php?ctrl=catalog&action=del&id='.$cata['id'].'" class="xoa">Xóa</a></td>
                    <td><a href="index.php?ctrl=catalog&action=edit&id='.$cata['id'].'" class="sua" >Sửa</a></td>
                    
                  </tr>';
                  }
                
                ?>
    </table>
    <div class="chon">
      <button><a href="index.php?ctrl=catalog&action=addnew">Thêm mới</a></button>
    </div>
</form>

