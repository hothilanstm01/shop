<h1 style="width:100%;float:left;text-align: center;">Quản Lý Danh Mục</h1>
<form action="index.php?ctrl=catalog&action=update" method="post">
  <div class="themmoi">
      <label for="">Mã danh mục</label><br><br>
      <input type="text" readonly name="id" class="form-control" value="<?php echo $id?>">
    </div>
    <div class="themmoi">
      <label for="">Tên danh mục</label><br><br>
      <input type="text" value="<?php echo $cate['name']?>" name="nameCata" class="form-control">

    </div>

    <div class="themmoi">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <button><a href="index.php?ctrl=catalog" class="btn btn-danger">Danh sách</a></button>
    </div>
</form>
 