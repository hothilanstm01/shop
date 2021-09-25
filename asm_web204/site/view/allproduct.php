<div class="right">
            <h3 class="tcsp">Tất Cả Sản Phẩm >></h3>
        <hr>
        <div class="boxcenter">
            <?php
                foreach ($allproduct as $pr) {
                    # code...
                    echo '<div class="box">
                            <img src="images/'.$pr['image_link'].'" alt="">
                            <div class="name">'.$pr['name'].'</div>
                            <div class="gia">'.$pr['price'].'đ</div>
                            <div class="mua">         
                                <a href="index.php?ctrl=product&action=detail&id='.$pr['id'].'"><i class="fa fa-eye"> Xem chi tiết</i></a>
                            </div>
                        </div>';
                }
            ?>          
        </div>
</div>