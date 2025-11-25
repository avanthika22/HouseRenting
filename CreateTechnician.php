<?php
session_start(); 
  include_once "header1.php";
?>

<?php 
       if(isset($_REQUEST["technician"]))
       {
             require_once "db.php";
              $tid = $_REQUEST["tid"];
              $tname = $_REQUEST["tname"];
              $tmail = $_REQUEST["tmail"];
              $taddr = $_REQUEST["taddr"];
              $sprovide = $_REQUEST["sprovide"];
              $sid = $_REQUEST["sid"];
              $whours = $_REQUEST["whours"];
              $sql = "insert into techinican(techinican_id,techinican_name,techinican_mail,techinican_address,service_provided,service_id,working_hours) 
              values($tid,'$tname','$tmail','$taddr','$sprovide','$sid','$whours')";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Technician Added');</script>";
                   echo "<script>window.location.href='ATech.php';</script>";
                 
              }
              
       }
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      <h5>
        <a href="ATech.php">View Technican</a>
        </h5>
        <h2>
         Create Technican 
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
                <input type="text" name="tid" placeholder="Technican ID"  required/>
              </div>
              <div>
                <input type="text" name="tname" placeholder="Technican Name"  required/>
              </div>
              <div>
                <input type="text" name="tmail" placeholder="Technican Mail"  required/>
              </div>
              <div>
                <input type="text" name="taddr" placeholder="Technican Address"  required/>
              </div>
              <div>
                <input type="text" name="sprovide" placeholder="Services Provided"  required/>
              </div>
              <div>
                <input type="text" name="sid" placeholder="Service Id"  required/>
              </div>
              <div>
                <input type="text" name="whours" placeholder="Working Hours"  required/>
              </div>
              
              
              
              <div class="">
                <button type="submit" name="technician">
                     Add Technician
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