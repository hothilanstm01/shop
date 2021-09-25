<?php
include_once 'model/catalog.php';
include_once 'model/khachhang.php';
$action='index';
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
switch ($action) {
    case 'index':
        # code...
        $kh=getAllKh();
        include 'view/khachhang/index.php';
        break;
    case 'chitietkh':
        # code...
        $madh=$_GET['madh'];
        $ctkh=getAllCtKh($madh);
        include 'view/khachhang/chitietkh.php';
        break;
}


?>