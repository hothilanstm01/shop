<?php
    if(!is_array($info)){
        echo 'Sản phẩm không tồn tại';
    }else{
        
        $name=$info['name'];
        $view=$info['view'];
        $price=$info['price'];
        $content=$info['content'];
        $img=$info['image_link'];
        $path='../site/images/'.$img;
        
        if(is_file($path)){
            $path='<img src="'.$path.'" alt="">';
        }else{
            $path="";
        }
            
    

?>
<div class="bleft">
    <div class="ct">
    <?=$path;?>
        <!-- <img src="img/lan.jpg" alt=""> -->
    </div>
    <div class="chiti">
        <p class="ten"><?=$name;?></p>  
        <p class="view"> View : <span><?=$view;?></span>   
        | Giá: <span><?=$price;?>đ</span></p>
        <p><?=$content;?></p>
        <button><a href="index.php?ctrl=cart&action=addtocart&id=<?=$_GET['id']?>">Mua ngay</a></button><br>
        <img class="gh" src="img/gh.png" alt="">     
        <p class="giaohang">GIAO HÀNG COD TOÀN QUỐC<br>
        <span class="giaohang1">(Nhận hàng, kiểm tra xong thanh toán sau)</span></p>
        <br>
        <img class="gh" src="img/dt.png" alt="">     
        <p class="giaohang">ĐỔI TRẢ DỄ DÀNG<br>
        <span class="giaohang1">(Đổi trả 7 ngày cho sản phẩm còn nguyên tem mác)</span></p>
        <br>
        <img class="gh" src="img/dt.png" alt="">     
        <p class="giaohang">TỔNG ĐÀI BÁN HÀNG 0123456789 <br>
        <span class="giaohang1">(Phí dịch vụ 1.000đ/phút)</span></p>
        
    </div>
    <!-- <div class="cmt">
        <a href="index.php?ctrl=cmt">Đến trang bình luận >></a>
        </div> -->
</div>
<?php } ?>
