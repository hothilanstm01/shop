<!-- <?php
    session_start();
    include "../model/connect.php";
    include "../model/binhluan.php";
    if(isset($_SESSION['sid'])&&($_SESSION['sid']>0)){
        if(isset($_SESSION['suser'])&&($_SESSION['suser']!="")){
            $user=$_SESSION['suser'];
        }else{
            $user="";
        }
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $name=$_POST['name'];
            $idsp=$_POST['idsp'];
            $iduser=$_SESSION['suser'];
            $noidung=$_POST['noidung'];

            thembl($name,$iduser,$idsp,$noidung);
        }
        $dsbl=showbl();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cmt</title>
        <style>
            .boxcenter{
                width:80%;
                margin:0 auto;
            }
            .ten input[type="text"]{
                width:80px;
                float:left;
                height:40px;
                margin-right:10px;
                padding:0px 10px;
            }
            input[type="text"]{
                width:680px;
                height:40px;
                float:left;
                margin-right:10px;
                padding:0px 10px;
            }
            input[type="submit"]{
                width:100px;
                height:45px;
                float:left;
                border:0;
                background-color: rgb(23, 112, 108);
                color:white;
                
            }
            .box{
                width:calc(100% - 40px);
                float:left;
                padding:20px;
                font-size:15pt;
            }
            .box span{
                color:blue;
                font-weight:bold;
            }
        </style>
    </head>
    <body>
        
        <hr><br>
        <form action="binhluan.php" method="post">
            <div class="boxcenter">
                <div class="ten"><input type="text" name="name" id="" value="<?=$user?>"></div>
                <input type="hidden" name="idsp" value="<?=$_GET['idsp']?>">
                <input type="text" name="noidung" id="">
                <input type="submit" value="Gửi" name="guibinhluan">
            </div>
        </form>
        <?php 
            foreach ($dsbl as $bl) {
                # code...
                echo '<div class="box"> Bình luận <br> <br> 
                    <span>'.$bl['name'].'</span> - '
                    .$bl['noidung'].'
                
                    </div>';
            }
        
        ?>
        
    </body>
    </html>
    <?php }else{
        
        echo "<a href='index.php?act=user' target='_parent'>Đăng nhập để bình luận!</a>";
    }?> -->