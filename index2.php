<?php
include 'header.php';
echo"hii";
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php include 'Connection.php';
    $conn =mysqli_connect($servername,$username,$password,$databasename)or die("Connection is Failed");
    $sql = " SELECT* FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
    $result = mysqli_query($conn, $sql) or die("query Unsuccessful");
    
    //$row =mysqli_fetch_assoc($result);
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
    // while ($row = mysqli_fetch_assoc($result) ){
    //     echo"<br/>";
    //     echo  $row['cname'];
    
    if(mysqli_num_rows($result)>0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody >
            <?php  while ($row = mysqli_fetch_assoc($result) ){
               // echo"<pre>";
               // print_r($row);
                //echo"</pre>";//for check what kind data coming from data base
            ?>
            <tr>
                <td><?php echo $row['sid'];?></td>
               <td><?php echo $row['sname'];?></td>
                <td><?php echo $row ['saddress'];?></td>                       
                <td><?php echo $row['cname'];?></td>
                <!-- <td><?php $row['']?></td> -->
                <td> <?php echo $row['sphone'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row ['sid'];?>'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
           <?php }?>
        </tbody>
    </table>
   <?php } else {
    echo"<h2>No Record Found</h2>";
   } 
   mysqli_close($conn);
   ?>
</div>
</div>
</body>
</html>
