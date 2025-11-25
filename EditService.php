<?php
session_start(); 
  include_once "header1.php";
?>

<?php 
      require_once "db.php";
       if(isset($_REQUEST["update"]))
       {
             
              $sid = $_REQUEST["sid"];
              $sname = $_REQUEST["sname"];

              $sql = "update services set service_name='$sname' where service_id=$sid";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Service Updated');</script>";
                   echo "<script>window.location.href='AServices.php';</script>";
                 
              }
              
       }
       $id = $_REQUEST["id"];

       $sql = "select * from services where service_id = $id";

       $res = mysqli_query($con,$sql) or die(mysqli_error($con));

       if($row = mysqli_fetch_array($res))
       {
        $sid = $row[0];
        $sname = $row[1];
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      <h5>
        <a href="AServices.php">View Services</a>
        </h5>
        <h2>
         Update Services 
        </h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 px-0">
          
        </div>
        <div class="col-lg-4 col-md-5 ">
          <div class="form_container">
            <form action="" method="post">
              <div>
                <input type="text" name="sid" value="<?php echo $sid; ?>" placeholder="Service ID"  readonly />
              </div>
              <div>
                <input type="text" name="sname" value="<?php echo $sname; ?>" placeholder="Service Name"  required/>
              </div>
              <div class="">
                <button type="submit" name="update">
                     Update Services
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
   <?php 
       }
   ?>

  
<?php 
 include_once "footer.php";
?>