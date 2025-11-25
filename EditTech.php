<?php
session_start(); 
  include_once "header1.php";
?>

<?php 
      require_once "db.php";
       if(isset($_REQUEST["update"]))
       {
             
            $tid = $_REQUEST["tid"];
            $tname = $_REQUEST["tname"];
            $tmail = $_REQUEST["tmail"];
            $taddr = $_REQUEST["taddr"];
            $sprovide = $_REQUEST["sprovide"];
            $sid = $_REQUEST["sid"];
            $whours = $_REQUEST["whours"];

            $sql = "update techinican set techinican_name='$tname',techinican_mail='$tmail',techinican_address='$taddr',service_provided='$sprovide',service_id='$sid',working_hours='$whours' where techinican_id=$tid";

            $res = mysqli_query($con,$sql) or die(mysqli_error($con));

            if($res == 1)
              {
                   
                   echo "<script>alert('technician Updated');</script>";
                   echo "<script>window.location.href='ATech.php';</script>";
                 
              }
              
       }
       $id = $_REQUEST["id"];

       $sql = "select * from techinican where techinican_id = $id";

       $res = mysqli_query($con,$sql) or die(mysqli_error($con));

       if($row = mysqli_fetch_array($res))
       {
        $tid = $row[0];
        $tname = $row[1];
        $tmail = $row[2];
        $taddr = $row[3];
        $sprovide = $row[4];
        $sid = $row[5];
        $whours =$row[6];
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      <h5>
        <a href="ATech.php">View Technician</a>
        </h5>
        <h2>
         Update Technician 
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
                <input type="text" name="tid" value="<?php echo $tid; ?>" placeholder="Technican ID"  readonly />
              </div>
              <div>
                <input type="text" name="tname" value="<?php echo $tname; ?>" placeholder="Technican Name"  required/>
              </div>
              <div>
                <input type="text" name="tmail" value="<?php echo $tmail; ?>" placeholder="Technican Mail"  required/>
              </div>
              <div>
                <input type="text" name="taddr" value="<?php echo $taddr; ?>" placeholder="Technican Address"  required/>
              </div>
              <div>
                <input type="text" name="sprovide" value="<?php echo $sprovide; ?>" placeholder="Services Provided"  required/>
              </div>
              <div>
                <input type="text" name="sid" value="<?php echo $sid; ?>" placeholder="Service Id"  required/>
              </div>
              <div>
                <input type="text" name="whours" value="<?php echo $whours; ?>" placeholder="Working Hours"  required/>
              </div>
              
             
              <div class="">
                <button type="submit" name="update">
                     Update Technician
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