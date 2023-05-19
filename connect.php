<?php
$servername = "localhost";
$username ="root";
$password="";
$dbname = "book-store";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connect fail:".$conn->connect_error);
}
?>