<?php
session_start(); 
  include_once "header2.php";
?>

<?php 
       if(isset($_REQUEST["Complaint"]))
       {
             require_once "db.php";
              $ctype = $_REQUEST["ctype"];
              $cdesc = $_REQUEST["cdesc"];
              $priority = $_REQUEST["priority"];
              $remail = $_REQUEST["remail"];
             
              $sql = "insert into complaint_booking(complaint_type,description,priority,ResidentEmail,Tid,status) 
              values('$ctype','$cdesc','$priority','$remail',0,'Pending')";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Complaint Booked');</script>";
                   echo "<script>window.location.href='BookComplaint.php';</script>";
                 
              }
              
       }
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      
        <h2>
         Book Complaint
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
                <input type="text" name="ctype" placeholder="Complaint_Type"  required/>
              </div>
              <div>
                <input type="text" name="cdesc" placeholder="Complaint Description"  required/>
              </div>
              <div>
                <input type="text" name="priority" placeholder="Complaint Priority"  required/>
              </div>
              <div>
                <input type="text" name="remail" value="<?php echo $_SESSION['username'] ?>" placeholder="Residential Email"  readonly/>
              </div>
              
              
              
              <div class="">
                <button type="submit" name="Complaint">
                     Add Complaint
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