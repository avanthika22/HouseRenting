<?php
session_start(); 
  include_once "header1.php";
?>

<?php 
      require_once "db.php";
       if(isset($_REQUEST["update"]))
       {
             
              $pid = $_REQUEST["pid"];
              $email = $_REQUEST["email"];
              $vnum = $_REQUEST["vnum"];
              $plot = $_REQUEST["plot"];
            
              
              $sql = "update parking set residentemail='$email',vehiclenumber='$vnum',
              parkingLotid='$plot' where pid=$pid";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Parking Updated');</script>";
                   echo "<script>window.location.href='Prequest.php';</script>";
                 
              }
              
       }
       $id = $_REQUEST["id"];

       $sql = "select * from parking where pid = $id";

       $res = mysqli_query($con,$sql) or die(mysqli_error($con));

       if($row = mysqli_fetch_array($res))
       {
        $pid = $row[0];
        $email = $row[1];
        $vnum = $row[2];
        $plot = $row[3];
      
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      <h5>
        <a href="AIndividual.php">View Parking</a>
        </h5>
        <h2>
          Update Parking
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
                <input type="text" name="pid" value="<?php echo $pid; ?>" placeholder="Parking ID"  required/>
              </div>
              <div>
                <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter Email"  required/>
              </div>
              <div>
                <input type="text" name="vnum" value="<?php echo $vnum; ?>" placeholder="Vehicle Number"  required/>
              </div>
              <div>
                <input type="text" name="plot" value="<?php echo $plot; ?>" placeholder="Parking Lot Id"  required/>
              </div>
              <div class="">
                <button type="submit" name="update">
                     Update Parking
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