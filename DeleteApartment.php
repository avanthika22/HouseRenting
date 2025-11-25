
<?php 
  $id = $_GET["id"];

  include_once "db.php";

  $sql = "delete from apartment where a_id=$id";

  $res = mysqli_query($con,$sql) or die(mysqli_error($con));

  if($res == 1)
  {
       
       echo "<script>alert('Apartment Deleted');</script>";
       echo "<script>window.location.href='AApartment.php';</script>";
     
  }


?>