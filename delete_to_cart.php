<?php
session_start();
require_once('./db/connect.php');
$prd_id =$_GET['prd_id'];
$sql ="DELETE FROM `cart` WHERE prd_id = '".$prd_id."' and user_id = '".$_SESSION['user_id']."'";

if($conn->query($sql)){
    header('Location: ./checkout.php' );
}else{
    echo "error: ".$conn->error;
}
?>