
<?php 
  $id = $_GET["id"];

  include_once "db.php";

  $sql = "delete from property_details where property_id=$id";

  $res = mysqli_query($con,$sql) or die(mysqli_error($con));

  if($res == 1)
  {
       
       echo "<script>alert('Property Deleted');</script>";
       echo "<script>window.location.href='AProperties.php';</script>";
     
  }


?>