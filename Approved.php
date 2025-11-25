
<?php 
  $id = $_GET["id"];

  include_once "db.php";

  $sql = "update application_form  set Status ='Approved' where application_id=$id";

  $res = mysqli_query($con,$sql) or die(mysqli_error($con));

  if($res == 1)
  {
       
       echo "<script>alert('Approved');</script>";
       echo "<script>window.location.href='ibook.php';</script>";
     
  }


?>