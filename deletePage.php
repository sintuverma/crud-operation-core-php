<?php include 'header.php'; 
if(isset($_POST['deletebtn'])){
    include 'sqlConnection.php';
    $std_id=$_POST['sid'];
    echo $std_id;
    //$sql1="SELECT * FROM student";
    //$result1=mysqli_query($conn,$sql1)or die("Query select is failed laaley");
    //if(mysqli_num_rows($result1)>0){
        //while($row=mysqli_fetch_assoc($result1)){
           // }
            //if($row==$std_id){

               $sql="DELETE FROM student WHERE sid = {$std_id}";
               $sql=mysqli_query($conn,$sql) or die("Query is Failed mere Bhai");
               //echo"<script> alert('data is not available.')</script>"; 
               header("Location:http://localhost/crud_html/index.php");//this is rendering function home page.
            //}
            
       // else{

       //  echo "<h2 style='color:red;text-align:center;'><b><i><u>{$std_id}</b></u></i>&nbsp; This record is not available in record now .</h2>";

       //          //echo "hello janu";
       //      }
        //}
    }
     ?>
                
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action=" <?PHP $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete"  onclick="myfunction()" />
    </form>
    <script type="text/javascript">
        function myfunction()
        {
            alert("Are you Sure Want To Delete?");
        }
    </script>
</div>
</div>
</body>
</html>
