<?php
require_once('../db/connect.php');
$author =$_GET['id'];
$sql ="DELETE FROM `author` WHERE author_id='".$author."'";
if($conn->query($sql)){
    header('Location: ../admin_author.php' );
}else{
    echo "error: ".$conn->error;
}
?>