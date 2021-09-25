<?php
include_once ('database.php');
function getAllProduct(){
    $sql="SELECT * from product order by id";
    return query($sql);
}
function getTopProduct(){
    $sql="SELECT * from product order by view DESC limit 6";
    return query($sql);
}
function getLowProduct(){
    $sql="SELECT * from product order by price limit 6";
    return query($sql);
}
function getProductByCateID($cataId)
{
    $sql="SELECT * from product where catalog_id='$cataId' order by id";
    return query($sql);
}
function chitiet($id)
{
    $sql="SELECT * from product where id='$id'";   
    return queryOne($sql);
}




?>