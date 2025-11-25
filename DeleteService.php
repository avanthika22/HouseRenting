
<?php 
  $id = $_GET["id"];

  include_once "db.php";

  $sql = "delete from services where service_id=$id";

  $res = mysqli_query($con,$sql) or die(mysqli_error($con));

  if($res == 1)
  {
       
       echo "<script>alert('Services Deleted');</script>";
       echo "<script>window.location.href='AServices.php';</script>";
     
  }


?>