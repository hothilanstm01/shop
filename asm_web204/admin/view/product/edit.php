<div class="card mt-3">
<h1 style="width:100%;float:left;text-align: center;">Quản Lý Loại Hàng</h1>
<div class="card-body">
<form action="index.php?ctrl=product&action=thaydoi" method="post">
    <div class="themmoi">
      <label for="">Mã sản phẩm</label>
      <input type="text" name="catalogId" readonly name="id" class="form-control" value="<?php echo $id?>">
    </div>
    <div class="themmoi">
      <label for="">Tên sản phẩm</label>
      <input type="text" name="productName"  class="form-control" value="<?php echo $cata['name']?>">
    </div>
      <label for="">Hình ảnh</label> <br><br><br>
      <img style="width:50px" src="../site/images/<?php echo $cata['image_link']?>" alt=""> <br><br>

      <label for="">File hình cần đổi</label>
      <input name="productImage" type="file">

    <div class="themmoi"><br>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
       <button> <a href="index.php?ctrl=product" class="btn btn-danger">Danh sách</a></button>
    </div>
</form>
</div>
</div>
 