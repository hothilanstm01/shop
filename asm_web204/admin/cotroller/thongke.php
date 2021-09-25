<?php
include_once 'model/catalog.php';
include_once 'model/thongke.php';
$action='index';
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
switch ($action) {
    case 'index':
        # code...
        $catalogs=getAllThongke();
        include 'view/thongke/index.php';
        break;
    case 'chart':
        # code...
        $items=coutOfCatalogByProduct();
        include 'view/thongke/chart.php';
        break;
    
    default:
        # code...
        break; 
}


?>