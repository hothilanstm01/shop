<?php
   include_once 'product.php';
   function addToCart($id){
   //lay thong tin san pham can them vao gio hang
   $pr=chitiet($id);
   $bool=false;
   $i=0;
   if(!isset($_SESSION['carts']))
   {
       $_SESSION['carts']=array( '0'=> array("id"=>$id,"name"=> $pr['name'],  "price"=> $pr['price'],"image"=> $pr['image_link'],"quantity"=>1));
   }
   else 
   {
     foreach ($_SESSION['carts'] as $item) {
       if($item['id']==$id){
         array_splice($_SESSION['carts'],$i,1,array(array("id"=>$id,"name"=> $pr['name'], "price"=> $pr['price'],"image"=> $pr['image_link'],"quantity"=>$item['quantity']+1)));
         $bool=true;
       }
       $i++;
     }
     if($bool==false){
       array_push($_SESSION['carts'],array("id"=>$id,"name"=> $pr['name'],  "price"=> $pr['price'],"image"=> $pr['image_link'],"quantity"=>1));
     }
 
   }
}

function addToOrder($fname,$add,$email,$phone,$ngay)
{
  $query="insert into donhang(hoten,diachi,email,dienthoai,ngaydat)
  values('$fname','$add','$email','$phone','$ngay')";
  $lastId = executeReturnID($query);
  return $lastId;//tra ve ma don hang moi vua them
}

function addToOrderDetail($madh)
{
  foreach ($_SESSION['carts'] as $item) 
  {
    $masp=$item['id'];
    $sl=$item['quantity'];
    $query="insert into chitietdonhang(madh,masp,soluong)
    values('$madh','$masp','$sl')";
    $STH = execute($query);
  }
}
function delete($masp)
{
  foreach ($_SESSION['carts'] as $item) 
  {
    $mdh=$item['id'];
    $query="delete from chitietdonhang where masp='$masp'";
    $STH = execute($query);
  }
}

?>