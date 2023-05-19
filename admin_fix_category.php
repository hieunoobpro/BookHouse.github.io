<?php
require_once('../db/connect.php');
$ctg_id =$_POST['id'];
$ctg_name =$_POST['name'];
$ctg_descrip =$_POST['description'];
$sql ="UPDATE `category` SET `ctg_name`='".$ctg_name."',`ctg_description`='".$ctg_descrip."' WHERE `ctg_id`='".$ctg_id."'";
if($conn->query($sql)){
    header('Location: ../admin_category.php' );
}else{
    echo "error: ".$conn->error;
}
?>