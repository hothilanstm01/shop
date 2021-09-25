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
        //$catalogs=getAllCatalog();
        include 'view/product/index.php';
        break;
    case 'addnew':
        # code...
        $catalogs=getAllCatalog();
        include 'view/product/add-product.php';
        break;
    case 'manager':
        # code...
        $product=getAllProduct();
        include 'view/product/index.php';
        break;
    case 'del':
        $catalogId=$_GET['id'];
        deleteProduct($catalogId);
        $product=getAllProduct();
        header('location:index.php?ctrl=product&action=manager');
        break;
    case'edit':
        $id=$_GET['id'];
        $cata=getProductById($id); 
        include 'view/product/edit.php';
    break;
    case'thaydoi':
        $id=$_POST['catalogId'];
        $name=$_POST['productName']; 
        $img=$_POST['productImage'];
        updateProduct($id,$name,$img);         
        header('location:index.php?ctrl=product&action=manager');
    break;
    case 'insert':
        //lay du lieu tu form
        $catalogId=$_POST['catalogId'];
        $name=$_POST['productName'];
        $img=$_FILES['productImage']['name'];
        //upload hinh
        $path='../site/images/'.$img;
        if(move_uploaded_file($_FILES['productImage']['tmp_name'],$path)){
            addProduct($catalogId,$name,$img);//them vao databse
        }
        header('location:index.php?ctrl=product&action=manager');
        break;
        
    
}


?>