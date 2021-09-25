<?php
include_once 'model/catalog.php';
include_once 'model/product.php';
$action='index';
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
switch ($action) {
    case 'index':
        # code...        
        $top=getTopProduct();
        $giathap=getLowProduct();
        include 'view/home.php';
        break;  
    case 'product':
        //lay product theo id cate
        $cataId=$_GET['cataId'];
        $product=getProductByCateID($cataId);
        //load view product
        include 'view/product.php';
    break;
    case 'allproduct':
        $allproduct=getAllProduct();
        include 'view/allproduct.php';
    break;
    case 'detail':
        //lay product theo id
        $id=$_GET['id'];
        $info=chitiet($id); //load view detail
        include 'view/detail.php';
    break;
    case 'tintuc':
        include 'view/tintuc.php';
    break;
    case 'about':   
        include 'view/about.php';
    break;

   
}


?> 