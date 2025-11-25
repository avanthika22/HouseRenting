<?php
session_start(); 
  include_once "header1.php";
?>

<?php 
      require_once "db.php";
       if(isset($_REQUEST["update"]))
       {
             
              $pid = $_REQUEST["pid"];
              $name = $_REQUEST["name"];
              $location = $_REQUEST["location"];
              $mail = $_REQUEST["mail"];
              $mobile = $_REQUEST["mobile"];
              $service = $_REQUEST["service"];
              $sql = "update property_details set apt_name='$name',location='$location',
              mail_id='$mail',mobile_num = '$mobile',services='$service' where property_id=$pid";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Property  Updated');</script>";
                   echo "<script>window.location.href='AProperties.php';</script>";
                 
              }
              
       }
       $id = $_REQUEST["id"];

       $sql = "select * from property_details where property_id = $id";

       $res = mysqli_query($con,$sql) or die(mysqli_error($con));

       if($row = mysqli_fetch_array($res))
       {
        $pid = $row[0];
        $name = $row[1];
        $location = $row[2];
        $mail = $row[3];
        $mobile = $row[4];
        $services = $row[5];
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      <h5>
        <a href="AServices.php">View Services</a>
        </h5>
        <h2>
         update Services 
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
                <input type="text" name="pid" value="<?php echo $pid; ?>" placeholder="Property ID"  required/>
              </div>
              <div>
                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Name"  required/>
              </div>
              <div>
                <input type="text" name="location" value="<?php echo $location; ?>" placeholder="Location"  required/>
              </div>
              <div>
                <input type="text" name="mail" value="<?php echo $mail; ?>" placeholder="Mail"  required/>
              </div>
              <div>
                <input type="text" name="mobile" value="<?php echo $mobile; ?>" placeholder="Mobile"  required/>
              </div>
              <div>
                <input type="text" name="service" value="<?php echo $services; ?>" placeholder="Services"  required/>
              </div>
              <div class="">
                <button type="submit" name="update">
                     Update Properties
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