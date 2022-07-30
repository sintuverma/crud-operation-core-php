<?php
// $student_name=$_POST['sname'];
// $student_address=$_POST['saddress'];
// $student_class=$_POST['class'];
// $student_phone=$_POST['sphone'];
// //$conn=include 'Connection.php';
// print_r($student_class);
// $conn =mysqli_connect('localhost','root','','crud_operation') or die ("connection not establish.");
// $sql="INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$student_name}','{$student_address}','{$student_class}','{$student_phone}')";
// $result=mysqli_query($conn, $sql)or die("connection failed");
// header("Location:http://localhost/crud_html/index.php");
// mysqli_close()
$student_name=$_POST['sname'];
$student_address=$_POST['saddress'];
$student_class=$_POST['class'];
$student_phone=$_POST['sphone'];
//$form_data=[$student_name,$student_address,$student_class,$student_phone];
//print_r($form_data);for testing data is coming from form.
$conn= mysqli_connect("localhost","root","","crud_operation") or die("Connection is failed");
$sql="INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$student_name}','{$student_address}','{$student_class}','{$student_phone}')";
$result=mysqli_query($conn,$sql) or die("Query is failed");
header("Location:http://localhost/crud_html/index.php");//this is rendering function.
mysql_close();
?>