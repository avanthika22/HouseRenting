
<?php 
  $id = $_GET["id"];

  include_once "db.php";

  $sql = "delete from individaul where ind_id=$id";

  $res = mysqli_query($con,$sql) or die(mysqli_error($con));

  if($res == 1)
  {
       
       echo "<script>alert('Individual Deleted');</script>";
       echo "<script>window.location.href='AIndividual.php';</script>";
     
  }


?>