<?php
include_once 'model/catalog.php';
$action='index';
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
switch ($action) {
    case 'index':
        # code...
        $catalogs=getAllCatalog();
        include 'view/catalog/index.php';
        break;
    case 'addnew':
        # code...
        include 'view/catalog/addnew.php';
        break;
    case 'them':
        # code...
        $name=$_POST['nameCata'];
        addNewCatalog($name);
        header('location: index.php?ctrl=catalog');      
        break;
    case 'edit':
        # code...
        $id=$_GET['id'];
        $cate=getCatalogByID($id); //lấy catalog cần sữa
        include 'view/catalog/edit.php';
        break;
    case 'del':
        # code...
        $id=$_GET['id'];
        deleteCatalog($id); //lấy catalog cần xóa
        header('location: index.php?ctrl=catalog');
        break;
    case 'update':
        # code...
        $id=$_POST['id'];
        $name=$_POST['nameCata'];
        updateCatalog($id,$name);
        header('location: index.php?ctrl=catalog');
        break;
    default:
        # code...
        break;
}


?>