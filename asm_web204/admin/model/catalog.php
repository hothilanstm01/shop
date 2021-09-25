<?php
include_once ('database.php');
function getAllCatalog(){
    $sql="SELECT * from catalog order by id";
    return query($sql);
}
function addNewCatalog($name){
    $sql="insert into catalog(name) values('$name')";
    execute($sql);
}
function getCatalogByID($id){
    $sql="SELECT * from catalog where id='$id'";
    return queryOne($sql);
}
function updateCatalog($id,$name){
    $sql="update catalog set name='$name' where id='$id'";
    execute($sql);
} 
function deleteCatalog($id){
    $sql="delete from catalog where id='$id'";
    execute($sql);
}

?>