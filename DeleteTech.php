
<?php 
  $id = $_GET["id"];

  include_once "db.php";

  $sql = "delete from techinican where techinican_id=$id";

  $res = mysqli_query($con,$sql) or die(mysqli_error($con));

  if($res == 1)
  {
       
       echo "<script>alert('Technician Deleted');</script>";
       echo "<script>window.location.href='ATech.php';</script>";
     
  }


?>