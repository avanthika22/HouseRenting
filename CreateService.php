<?php
session_start(); 
  include_once "header1.php";
?>

<?php 
       if(isset($_REQUEST["service"]))
       {
             require_once "db.php";
              $sid = $_REQUEST["sid"];
              $sname = $_REQUEST["sname"];

              $sql = "insert into services(service_id,service_name) values($sid,'$sname')";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Service Added');</script>";
                   echo "<script>window.location.href='AServices.php';</script>";
                 
              }
              
       }
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      <h5>
        <a href="AServices.php">View Services</a>
        </h5>
        <h2>
         Create Services 
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
                <input type="text" name="sid" placeholder="Service ID"  required/>
              </div>
              <div>
                <input type="text" name="sname" placeholder="Service Name"  required/>
              </div>
              <div class="">
                <button type="submit" name="service">
                     Add Services
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