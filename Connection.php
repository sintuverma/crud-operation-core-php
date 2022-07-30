<?php
$servername="localhost";
$username="root";
$password="";
$databasename="crud_operation";
//$enterormakevariable =mysqli_connect("serverName","userName","password Name","DatabaseName")
$conn =mysqli_connect($servername,$username,$password,$databasename) or die("connection failed");
//echo "hello connection";
?>