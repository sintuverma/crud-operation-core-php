<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
       
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php
    //$_SERVER['PHP_SELF'] form data ko usi page me show karne ke kaam ata hai action me property me. ya to action me koi aur page ko enter karo jaise update.php
     if (isset($_POST['showbtn'])) {
        $std_id=$_POST['sid'];
         echo $std_id;
         $conn=mysqli_connect("localhost","root","","crud_operation") or die ("Connection is Failed");
         $sql= "SELECT * FROM `student` WHERE sid={$std_id}";
         $result=mysqli_query($conn,$sql) or die("Query Failed Ho gaya hai beta");
         if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                //print_r($row);
    ?>


    <form class="post-form" action="updatePage.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid'];?>" />
            <input type="text" name="sname" value="<?php echo $row['sname'];?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress'];?>" />
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
          ?>        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone'];?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
           }// first if closing curly braces.
     }//second if closing curly braces.
     else{
        echo " <h3 style='color:red;text-align:center;' >{$std_id} record is not found.</h3> ";
     }
 }// while loop closing curly braces;
    ?>
</div>
</div>
</body>
</html>
