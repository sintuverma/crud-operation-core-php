<?php include 'header.php';?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $conn=mysqli_connect("localhost","root","","crud_operation") or die("Connection is Failed");
    $sql=" SELECT* FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
    $result=mysqli_query($conn,$sql) or die("queryis Failed");
    //print_r($result);
    if(mysqli_num_rows($result)>0){
       
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
        <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){//mysqli_fetch_assoc()is fetching data in assciative array, while loop roop run until row is finish.
                // echo "hello"." ";
                // echo "<pre>";  
                // print_r($row); for testing.
                // echo "</pre>";
            ?>

            <tr>
                <td><?php echo $row['sid'];?></td>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['saddress'];?></td>
                <td><?php echo $row['cname'];?></td>
                <td><?php echo $row['sphone'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
                    <a href='deleteData.php?id=<?php echo $row['sid'];?>'onclick="mydelete()" >Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
        echo "<h2> No record found....</h2>";
    } 
    mysqli_close($conn);//connection going to close
    ?>
</div>
</div>
<script type="text/javascript">
    function mydelete(){
        alert("Do You Want Delete The Data");
    }
</script>
</body>
</html>
