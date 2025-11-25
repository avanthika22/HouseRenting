<?php
session_start(); 
  include_once "header1.php";
?>

<?php 
      require_once "db.php";
       if(isset($_REQUEST["update"]))
       {
             
              $iid = $_REQUEST["iid"];
              $type = $_REQUEST["type"];
              $add = $_REQUEST["add"];
              $rent = $_REQUEST["rent"];
              $pid = $_REQUEST["pid"];
              
              $sql = "update  gated_community set g_type='$type',g_add='$add',
              g_rent='rent',pid = '$pid'where g_id=$iid";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Gated Community   Updated');</script>";
                   echo "<script>window.location.href='AGated.php';</script>";
                 
              }
              
       }
       $id = $_REQUEST["id"];

       $sql = "select * from gated_community where g_id = $id";

       $res = mysqli_query($con,$sql) or die(mysqli_error($con));

       if($row = mysqli_fetch_array($res))
       {
        $ind_id = $row[0];
        $ind_type = $row[1];
        $ind_add = $row[2];
        $ind_rent = $row[3];
        $property_id = $row[4];
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      <h5>
        <a href="AApartment.php">View Apartment</a>
        </h5>
        <h2>
         Update Apartment
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
                <input type="text" name="iid" value="<?php echo $ind_id; ?>" placeholder="Property ID"  required/>
              </div>
              <div>
                <input type="text" name="type" value="<?php echo $ind_type; ?>" placeholder=" Individual ID"  required/>
              </div>
              <div>
                <input type="text" name="add" value="<?php echo $ind_add; ?>" placeholder="Type"  required/>
              </div>
              <div>
                <input type="text" name="rent" value="<?php echo $ind_rent; ?>" placeholder="Address"  required/>
              </div>
              <div>
                <input type="text" name="pid" value="<?php echo $property_id; ?>" placeholder="Property Id"  required/>
              </div>
              <div class="">
                <button type="submit" name="update">
                     Update Gated
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