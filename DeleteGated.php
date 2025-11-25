
<?php 
  $id = $_GET["id"];

  include_once "db.php";

  $sql = "delete from gated_community where g_id=$id";

  $res = mysqli_query($con,$sql) or die(mysqli_error($con));

  if($res == 1)
  {
       
       echo "<script>alert('Gated Community Deleted');</script>";
       echo "<script>window.location.href='AGated.php';</script>";
     
  }


?>