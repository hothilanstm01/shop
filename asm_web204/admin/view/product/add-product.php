
      <div class="card mt-3">
        <h1 style="width:100%;float:left;text-align: center;">Thêm Sản Phẩm Mới</h1>
        <div class="card-body">
          <form action="index.php?ctrl=product&action=insert" method="post" enctype="multipart/form-data">
        
         
              <div class="themmoi">
                <label for="">Tên hàng hóa</label><br><br>
                <input type="text" name="productName" class="form-control" placeholder="Tên hàng">
              </div>

              <div class="themmoi">
                <label for="">Catalog name</label>
                <select name="catalogId">
                <?php
                  foreach ($catalogs as $cate) {
                    # code...
                    echo '<option value="'.$cate['id'].'">'.$cate['name'].'</option>';
                  }
                ?>   
                </select>

              </div>
              <div class="themmoi">
                <label for="">Hình ảnh</label>
                <input type="file" name="productImage" class="form-control">
              </div>

              <div class="themmoi">
                  <button type="submit" class="luu">Lưu</button>
                  <button><a href="#" class="btn btn-danger">Danh sách</a></button>
              </div>
          </form>
        </div>
      </div>
