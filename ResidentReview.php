<?php
session_start(); 
  include_once "header2.php";
?>

<?php 
       if(isset($_REQUEST["Review"]))
       {
             require_once "db.php";
              $rname = $_REQUEST["rname"];
              $desc = $_REQUEST["desc"];
              
              $sql = "insert into review(resident_name,description) 
              values('$rname','$desc')";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Review Send');</script>";
                   echo "<script>window.location.href='ResidentReview.php';</script>";
                 
              }
              
       }
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      
        <h2>
           Resident Review
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
                <input type="text" name="rname" value="<?php echo $_SESSION['username'] ?>" readonly/>
              </div>
              <div>
                <input type="text" name="desc" placeholder="Enter Description"  required/>
              </div>
              
              
              
              <div class="">
                <button type="submit" name="Review">
                     Add Review
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