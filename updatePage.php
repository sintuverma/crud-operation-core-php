<?php
# us- mean update student data
$usid= $_POST['sid'];
$usname=$_POST['sname'];
$usaddress=$_POST['saddress'];
$usclass=$_POST['sclass'];
$usphone=$_POST['sphone'];
//echo $usclass=$_POST['sclass'];
//$updata=[$usid,$usname,$usaddress,$usclass,$usphone];
//print_r($updata);
$conn=mysqli_connect("localhost","root","","crud_operation")or die("Connection is Failed");
$sql= "UPDATE student SET sname ='{$usname}',saddress='{$usaddress}',sclass='{$usclass}',sphone='{$usphone}' where sid='{$usid}'";
$result=mysqli_query($conn,$sql)or die("Query is unsuccessful ho gaya beta");
header("Location:http://localhost/crud_html/index.php");//this is rendering function.
mysqli_close($conn);

?>