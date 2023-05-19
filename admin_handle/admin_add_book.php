<?php
require_once('../db/connect.php');
$name =$_POST['name'];
$author =$_POST['author'];
$category =$_POST['category'];
$publisher =$_POST['publisher'];
$img =$_POST['img'];
$price =$_POST['price'];
$stock =$_POST['stock'];
$descrip =$_POST['descrip'];
$date = date("Y/m/d");
$sql = "INSERT INTO `product`( `prd_name`, `prd_in_stock`, `prd_in_order`, `prd_price`, `prd_img`, `prd_release`, `publisher_id`, `author_id`, `ctg_id`, `prd_description`) 
VALUES ('".$name."','".$stock."',0,'".$price."','".$img."','".$date."','".$publisher."','".$author."','".$category."','".$descrip."')";

if($conn->query($sql)){
    header('Location: ../admin_books.php' );
}else{
    echo "error: ".$conn->error;
}


?>