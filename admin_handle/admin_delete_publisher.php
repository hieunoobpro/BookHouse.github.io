<?php
require_once('../db/connect.php');
$publisher_id =$_GET['id'];
$sql ="DELETE FROM `publisher` WHERE publisher_id='".$publisher_id."'";
if($conn->query($sql)){
    header('Location: ../admin_publisher.php' );
}else{
    echo "error: ".$conn->error;
}
?>