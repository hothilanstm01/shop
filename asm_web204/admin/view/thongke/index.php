<form action="#" method="post">
      <div class="card mt-3">
      <h1 style="width:100%;float:left;text-align: center;">Thống Kê</h1>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="bg-info">
                  <th class="col">Mã loại</th>
                  <th class="col">Tên loại</th>
                </tr> 
              </thead>
              <tbody> 
                <?php
                  foreach ($catalogs as $hihi) {
                    # code...
                    echo '<tr>                   
                    <td>'.$hihi['id'].'</td>
                    <td>'.$hihi['name'].'</td>                   
                  </tr>';
                  }
                
                ?>
                    
              </tbody>
            </table>
          </div>
        <div class="chon">
            <button><a href="index.php?ctrl=thongke&action=chart" class="btn btn-info">Xem biểu đồ</a></button>
            
        </div>
      </div>
</form>

