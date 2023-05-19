<?php
require_once('../db/connect.php');
$ctg_id =$_GET['id'];
$sql ="DELETE FROM `category` WHERE ctg_id='".$ctg_id."'";
if($conn->query($sql)){
    header('Location: ../admin_category.php' );
}else{
    echo "error: ".$conn->error;
}
?>