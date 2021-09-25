<?php
include_once ('database.php');
function getAllCatalog(){
    $sql="SELECT * from catalog order by id";
    return query($sql);
}


?>