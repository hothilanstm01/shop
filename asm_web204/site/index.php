<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTLShop</title>
    <link rel="stylesheet" href="../site/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <a href="index.php"><h1>HTL<span>Shop</span> </h1></a>
        <input type="search" name="search" id="search" placeholder="Search store">
        <input type="submit" value="Tiềm kiếm" >
        <div class="lienhe">
            <div class="t1">Welcome to our online store</div>
            <div class="t2">Call us now: <span>0123456781</span></div>
        </div>

    </header>
    <section>
        <div class="menu">
            <ul> 
                <a class="me" href="index.php">Home</a>
                <a class="me" href="index.php?ctrl=product&action=about">Giới Thiệu</a>
                <a class="me" href="index.php?ctrl=product&action=allproduct">Sản Phẩm</a>
                <a class="me" href="index.php?ctrl=product&action=tintuc">Tin Tức</a>
                <a class="me" href="index.php?ctrl=login">Đăng nhập</a>
                
            </ul> 
        </div>
        <!-- het me nu -->
        <div class="left">
            <div class="danhmuc">
            <div class="top">
                <p>Danh Mục</p>
            </div>
            <?php
                include_once 'model/catalog.php';
                $catalog=getAllCatalog();
                foreach($catalog as $cata){
                    echo '<div class="dm"><a href="index.php?ctrl=product&action=product&cataId='.$cata['id'].'">'.$cata['name'].'</a></div> <br><br>';
                }
                 
            ?>
            </div>
            
            <div class="giohang">
               <a href="index.php?ctrl=cart&action=addtocart"><img src="img/gih.png" alt=""><p>MY CART</p></a>
           </div>
        </div>
        <!-- het danh mục -->
        <?php
            $ctrl='product';
            if(isset($_GET['ctrl'])){
                $ctrl=$_GET['ctrl'];
            }
            include 'cotroller/'.$ctrl.'.php';
        ?>

        <!-- load controller -->
      
    </section>
<footer>
    <div class="boxleft">
        <p class="inbong">CÔNG TY CỔ PHẦN ĐẦU TƯ T&L VIỆT NAM</p>
        <p>Mã số thuế: 010859797</p>
        <p>Địa chỉ: Phòng 803-812, Tầng 8, Tòa nhà 315 Trường Chinh, Phường Khương Mai, Quận Thanh Xuân, Thành phố Hà Nội.</p>
    </div>
    <div class="boxgiua">
        <p class="inbong">VỀ CHÚNG TÔI</p>
        <p>Giới thiệu</p>
        <p>Liên hệ</p>
        <p>Tuyển dụng</p>
        <p>Tìm đại lý</p>
    </div>
    <div class="boxright">
        <p class="inbong">HỖ TRỢ KHÁCH HÀNG</p>
        <p>Hướng dẫn chọn size</p>
        <p>Chính sách khách hàng thân thiết</p>
        <p>Chính sách Đổi/Trả</p>
        <p>Chính sách bảo mật</p>
        <p>Thanh toán, Giao nhận</p>
        <p>Câu hỏi thường gặp</p>
    </div>
    <div class="boxcuoi">
        <p class="inbong">THEO DÕI CHÚNG TÔI</p> <br>
        <a href="https://www.facebook.com/hothilan01"><i class="fa fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/hothilann/"><i class="fa fa-instagram"></i></a>
    </div>
</footer>
    
</body>
</html>