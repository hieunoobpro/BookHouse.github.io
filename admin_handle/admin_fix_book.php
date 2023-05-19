<?php
require_once('../db/connect.php');
$id = $_POST['id'];
$name =$_POST['name'];
$author =$_POST['author'];
$category =$_POST['category'];
$publisher =$_POST['publisher'];
$img_new =$_POST['img_new'];
$img_old =$_POST['img_old'];
$price =$_POST['price'];
$stock =$_POST['stock'];
$descrip =$_POST['descrip'];
if($img_new ==''){
    $img = $img_old;
}else{
    $img = $img_new;
}
$sql ="UPDATE `product` SET `prd_name`='".$name."',`prd_in_stock`='".$stock."',
`prd_price`='".$price."',`prd_img`='".$img."',`publisher_id`='".$publisher."',
`author_id`='".$author."',`ctg_id`='".$category."',`prd_description`='".$descrip."' 
WHERE  `prd_id`='".$id."'";
if($conn->query($sql)){
    header('Location: ../admin_books.php' );
}else{
    echo "error: ".$conn->error;
}
?>