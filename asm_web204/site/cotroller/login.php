<?php
session_start();
include "model/user.php";
if(isset($_POST['login'])&&($_POST['login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $checkuser=checkuser($user,$pass);
    if(is_array($checkuser)){ 
        $_SESSION['sid']=$checkuser['id'];
        $_SESSION['suser']=$checkuser['user'];
        if($checkuser['role']==1){
            header('location: admin.php');
        } 
        else header('location: index.php');
    }else{
        $canhbao="<h2 style='color:red'> VIRRUS CORONA - ĐĂNG NHẬP LẠI </h2>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .login{
                width: 100%;float: left;
                color: rgb(39, 107, 124);
                text-align: center;
            }
            .keke{
                width: 100%;
                float:left;
                text-align: center;
            }
        input[type="text"]{
            width: 400px; height:20px        
        }
        input[type="submit"]{
            
            width: 100px; height:40px        
        }
    </style>
</head>
<body>
    <div class="bleft">
        <h1 class="login">LOGIN</h1>
        <form class="keke" action="login.php" method="post">
            <input type="text" name="user" id="" placeholder="User"><br><br>
            <input type="text" name="pass" id=""placeholder="Pass"><br><br>
            <input type="submit" value="LOGIN" name="login">
        </form>
        <?php
        if(isset($canhbao)&&($canhbao!="")) echo $canhbao;
        
        ?>
    </div>
</body>
</html>