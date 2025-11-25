<?php
session_start(); 
  include_once "header2.php";
?>

<?php 
       if(isset($_REQUEST["Parking"]))
       {
             require_once "db.php";

              $remail = $_REQUEST["remail"];
              $vnum = $_REQUEST["vnum"];
              
             
              $sql = "insert into parking(residentemail,vehiclenumber) 
              values('$remail','$vnum')";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Parking Request Sent');</script>";
                   echo "<script>window.location.href='rfp.php';</script>";
                 
              }
              
       }
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      
        <h2>
         Request Parking
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
                <input type="text" name="vnum" placeholder="vehicle number"  required/>
              </div>
              <div>
                <input type="text" name="remail" value="<?php echo $_SESSION['username'] ?>" placeholder="Residential Email"  readonly/>
              </div>
              
              
              
              <div class="">
                <button type="submit" name="Parking">
                     Request Parking
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