<?php
require_once('../db/connect.php');
$publisher_id =$_POST['id'];
$publisher_name =$_POST['name'];
$sql ="UPDATE `publisher` SET `publisher_name`='".$publisher_name."' WHERE `publisher_id`='".$publisher_id."'";
if($conn->query($sql)){
    header('Location: ../admin_publisher.php' );
}else{
    echo "error: ".$conn->error;
}
?>