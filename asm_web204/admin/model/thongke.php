<?php
include_once ('database.php');
function getAllThongke(){
    $sql="SELECT * from catalog order by id";
    return query($sql);
}
function addNewProduct($catalogId,$name,$img){
    $sql="insert into product(catalog_id,name,image_link) values('$catalogId','$name','$img')";
    execute($sql);
}

function getProductById($id){
    $sql="SELECT * from product where id='$id'";
    return queryOne($sql);
}

function updateProduct($id,$name,$img){
    $sql="update product set name='$name', image_link='$img' where id='$id'";
    return execute($sql);
}

function deleteProduct($id){
    $sql="delete from product where id='$id'";
    return execute($sql);
}
function coutOfCatalogByProduct(){
    $sql="SELECT catalog.name,COUNT(product.catalog_id) as soluong
    FROM catalog,product 
    WHERE product.catalog_id=catalog.id
    GROUP BY catalog.name;";
    return query($sql);
}

?>