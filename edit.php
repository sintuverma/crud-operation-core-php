<?php include 'header.php'; ?>
<?php
 $std_id=$_GET['id'];
//echo $std_id;
 //echo print_r($std_id);
?>
<div id="main-content">
    <h2>Update Record</h2>
    <?php
   // $conn =include 'Connection.php';
    $sql_q="SELECT * FROM student WHERE sid = {$std_id}";
    $conn=mysqli_connect("localhost","root","","crud_operation") or die("not connected");
    $result= mysqli_query($conn, $sql_q) or die("connection not established");
    if(mysqli_num_rows($result)>0){

     echo "condition is work";
        while($row=mysqli_fetch_assoc($result)){
            //print_r($row);//for debug and testing;
                
            ?>
    
    <form class="post-form" action="updatePage.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid'];?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname'];?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress'];?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php
          $conn= mysqli_connect("localhost","root","","crud_operation") or die("Connection is failed");
            $sqlc="SELECT * FROM studentclass";
            $resultc= mysqli_query($conn,$sqlc);


            if(mysqli_num_rows($resultc) > 0){
                echo '<select name="sclass">';
                while($rowc = mysqli_fetch_assoc($resultc)){
                    if($row['sclass']== $rowc['cid']){
                        $select="selected";
                        //echo "helloo trrue".$row['sclass']."=>".$rowc['cid'];
                    }else{
                        $select="";
                        //echo "hello false".$row['sclass']."=>".$rowc['cid'];
                    }
                    
           echo"<option {$select} value='{$rowc['cid']}'>{$rowc['cname']}</option>";
       }
           echo"</select>";
       }
          ?>

          
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone'];?>"/>
   
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php 
     }//while loop curly brackets end.
    }//if condition curly braces end.

    ?>
</div>
</div>
</body>
</html>
