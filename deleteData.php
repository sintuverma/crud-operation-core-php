<?php
$stud_id=$_GET['id'];
echo $stud_id;
$conn=mysqli_connect("localhost","root","","crud_operation") or die("connection is failed");
//include 'sqlConnection.php';
$sql="DELETE FROM student WHERE sid = {$stud_id}";
$sql=mysqli_query($conn,$sql) or die("Query is Failed mere Bhai");
header("Location:http://localhost/crud_html/index.php");//this is rendering function home page.
mysqli_close($conn);
?>