<div class="bleft">
    <div class="mycart">
        <h1>My Cart</h1>
    </div>
<table class="table">
    <thead>
        <tr>
        <th>Hình</th>
        <th>Tên sp</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Thành Tiền</th>
        <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_SESSION['carts'])){
        foreach ($_SESSION['carts'] as $p){
        echo '<tr>
            <td><img src="images/'.$p['image'].'" width="50px"></td>
            <td>'.$p['name'].'</td>
            <td>'.$p['quantity'].'</td>
            <td>'.$p['price'].'</td>
            <td>'.$p['price']*$p['quantity'].'</td>
            <td>
            <a href="index.php?ctrl=cart&action=dele&masp='.$p['id'].'" class="xoa">Xoá</a>
            
          </td>
        </tr>';
    }
}
    ?>
    </tbody>
</table>

<div class="dathang">
<h3 style="width:100%">Thông tin người đặt hàng</h3>
<form method="post" action="index.php?ctrl=cart&action=checkout">
    <div class="row">
        <div class="chu">
            Họ&Tên
        </div>
        <div class="form">
            <input type="text" name="fullName" class="form-control" required/>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="chu">
            Email:
        </div>
        <div class="form">
            <input type="email" name="email" required/>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="chu">
            Địa chỉ:
        </div>
        <div class="form">
            <input type="text" name="address" class="form-control" required/>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="chu">
            So điện thoại:
        </div>
        <div class="form">
            <input type="text" name="phone" class="form-control" required/>
        </div>
    </div>
    <br/> 
    <div class="row">
        <div class="col-md-12">
            <button onclick="ye()" type="submit" name="submit" class="btn btn-primary">
                Đặt hàng
            </button>
        </div>
    </div>
    <br/>
</form>
</div>
</div>
<script>
        function ye() {
            var text;
            if(confirm("Đặt hàng thành công")){
                text = "Bạn đã chọn OK";
            }else{
                text = "Bạn đã chọn Cancel";
            }
           
        }
</script>