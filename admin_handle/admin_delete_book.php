<?php
require_once('../db/connect.php');
$id =$_GET['id'];
$sql ="DELETE FROM `product` WHERE prd_id = '".$id."'";

if($conn->query($sql)){
    header('Location: ../admin_books.php' );
}else{
    echo "error: ".$conn->error;
}
?>