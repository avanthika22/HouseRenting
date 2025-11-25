<?php
session_start(); 
  include_once "header1.php";
?>

<?php 
       if(isset($_REQUEST["properties"]))
       {
             require_once "db.php";
              $pid = $_REQUEST["pid"];
              $name = $_REQUEST["name"];
              $location = $_REQUEST["location"];
              $mail = $_REQUEST["mail"];
              $mobile = $_REQUEST["mobile"];
              $service = $_REQUEST["service"];
              $sql = "insert into property_details (property_id,apt_name,location,mail_id,mobile_num,services) 
              values($pid,'$name','$location','$mail','$mobile','$service')";
               
              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Property Added');</script>";
                   echo "<script>window.location.href='AProperties.php';</script>";
                 
              }
              
       }
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      <h5>
        <a href="AProperties.php">View Properties</a>
        </h5>
        <h2>
         Create Properties 
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
                <input type="text" name="pid" placeholder="Property ID"  required/>
              </div>
              <div>
                <input type="text" name="name" placeholder="Name"  required/>
              </div>
              <div>
                <input type="text" name="location" placeholder="Location"  required/>
              </div>
              <div>
                <input type="text" name="mail" placeholder="Mail"  required/>
              </div>
              <div>
                <input type="text" name="mobile" placeholder="Mobile"  required/>
              </div>
              <div>
                <input type="text" name="service" placeholder="Services"  required/>
              </div>
              <div class="">
                <button type="submit" name="properties">
                     Add Properties
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>


  
<?php 
 include_once "footer.php";
?>