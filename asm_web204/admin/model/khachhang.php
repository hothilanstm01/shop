<?php
include_once ('database.php');
function getAllKh(){
    $sql="SELECT * from donhang order by madh";
    return query($sql);
}
function getAllCtKh($madh){
    $sql="SELECT * from chitietdonhang where madh='$madh'";
    return query($sql);
}


?>