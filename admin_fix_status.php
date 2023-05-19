<?php
require_once('../db/connect.php');
$status = $_GET['status'];
$order = $_GET['order'];
$sql ="UPDATE `order` SET `status_id`='".$status."' WHERE `order_id`='".$order."'";
if($conn->query($sql)){
    header('Location: ../admin_order.php' );
}else{
    echo "error: ".$conn->error;
}
?>