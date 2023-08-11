<?php
$servername="localhost";
$username="root";
$password="123456789";

$con=new mysqli($servername,$username,$password);
if($con->connect_error)
{
   die("connection failed".$con->connect_error);

}
$sql="create database skydb";
$con->query($sql);

?>
