<?php
require_once('../db/connect.php');
$ctg_name =$_POST['name'];
$ctg_descrip =$_POST['description'];
$sql ="INSERT INTO `category`(`ctg_name`, `ctg_description`) VALUES ('".$ctg_name."','".$ctg_descrip."')";
if($conn->query($sql)){
    header('Location: ../admin_category.php' );
}else{
    echo "error: ".$conn->error;
}
?>