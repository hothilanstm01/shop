<form action="#" method="post">
      <div class="card mt-3">
      <h1 style="width:100%;float:left;text-align: center;">Quản Lý Hàng Hóa</h1>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="bg-info">
                  <th class="col">Mã hàng</th>
                  <th class="col">Tên hàng</th>
                  <th class="col">Hình</th>
                  <th class="col">Xóa</th>
                  <th class="col">Sửa</th>
                </tr> 
              </thead>
              <tbody> 
                <?php
                  foreach ($product as $pro) {
                    # code...
                    echo '<tr>
                   
                    <td>'.$pro['id'].'</td>
                    <td>'.$pro['name'].'</td>
                    <td><img src="../site/images/'.$pro['image_link'].'" style="width:50px"></td>
                    <td>
                      <a href="index.php?ctrl=product&action=del&id='.$pro['id'].'" class="xoa">Xoá</a>
                      
                    </td>
                    <td>
                      
                      <a href="index.php?ctrl=product&action=edit&id='.$pro['id'].'" class="sua" >Sửa</a>
                    </td>

                  </tr>';
                  }
                
                ?>
                    
              </tbody>
            </table>
          </div>
        <div class="chon">
            <button><a href="index.php?ctrl=product&action=addnew" class="btn btn-info">Thêm mới</a></button>
        </div>
      </div>
</form>

