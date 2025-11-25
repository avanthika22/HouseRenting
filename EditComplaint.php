<?php
session_start(); 
  include_once "header1.php";
?>

<?php 
      require_once "db.php";
       if(isset($_REQUEST["update"]))
       {
             
            $cid = $_REQUEST["cid"];
            $ctype = $_REQUEST["ctype"];
            $desc = $_REQUEST["desc"];
            $priority = $_REQUEST["priority"];
            $remail = $_REQUEST["remail"];
            $tid = $_REQUEST["tid"];
            $status = $_REQUEST["status"];

            $sql = "update complaint_booking set complaint_type='$ctype', 
            description='$desc', priority='$priority', residentemail='$remail',
            tid=$tid,status= '$status' where complaint_id=$cid";

            $res = mysqli_query($con,$sql) or die(mysqli_error($con));

            if($res == 1)
              {
                   
                   echo "<script>alert('Complaint Updated');</script>";
                   echo "<script>window.location.href='AComplaints.php';</script>";
                 
              }
              
       }
       $id = $_REQUEST["id"];

       $sql = "select * from complaint_booking where complaint_id = $id";

       $res = mysqli_query($con,$sql) or die(mysqli_error($con));

       if($row = mysqli_fetch_array($res))
       {
        $cid = $row[0];
        $ctype = $row[1];
        $desc = $row[2];
        $priority = $row[3];
        $remail = $row[4];
        $Tid = $row[5];
        $status =$row[6];
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      <h5>
        <a href="ATech.php">View Technician</a>
        </h5>
        <h2>
         Update Complaint 
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
                <input type="text" name="cid" value="<?php echo $cid; ?>" placeholder="Technican ID"  readonly />
              </div>
              <div>
                <input type="text" name="ctype" value="<?php echo $ctype; ?>" placeholder="Complaint Type"  required/>
              </div>
              <div>
                <input type="text" name="desc" value="<?php echo $desc; ?>" placeholder="Description"  required/>
              </div>
              <div>
                <input type="text" name="priority" value="<?php echo $priority; ?>" placeholder="Priority"  required/>
              </div>
              <div>
                <input type="text" name="remail" value="<?php echo $remail; ?>" placeholder="Resident Email"  required/>
              </div>
              <div>
                <input type="text" name="tid" value="<?php echo $Tid; ?>" placeholder="Technician id"  required/>
              </div>
              <div>
                <input type="text" name="status" value="<?php echo $status; ?>" placeholder="Status"  required/>
              </div>
              
             
              <div class="">
                <button type="submit" name="update">
                     Update Complaint
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