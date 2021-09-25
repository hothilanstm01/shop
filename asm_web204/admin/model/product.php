<?php
include_once ('database.php');
function getAllProduct(){
    $sql="SELECT * from product order by id";
    return query($sql);
}
function addProduct($catalogId,$name,$img){
    $sql="insert into product(catalog_id,name,image_link) values('$catalogId','$name','$img')";
    execute($sql);
}
function getProductById($id){
    $sql="SELECT * from product where id='$id'";
    return queryOne($sql);
}
function deleteProduct($id){
    $sql="delete from product where id='$id'";
    execute($sql);
}
function updateProduct($id,$name,$img){
    $sql="update product set name='$name', image_link='$img' where id='$id'";
    return execute($sql);
}



?>