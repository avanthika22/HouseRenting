<?php
session_start(); 
  include_once "header1.php";
?>

<?php 
       if(isset($_REQUEST["Gated"]))
       {
             require_once "db.php";
              $iid = $_REQUEST["iid"];
              $type = $_REQUEST["type"];
              $addr = $_REQUEST["addr"];
              $rent = $_REQUEST["rent"];
              $pid = $_REQUEST["pid"];
              $sql = "insert into gated_community(g_id,g_type,g_add,g_rent,pid) 
              values($iid,'type','$addr','$rent',$pid)";
               
              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Gated Community  Added');</script>";
                   echo "<script>window.location.href='AGated.php';</script>";
                 
              }
              
       }
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    
      <div class="heading_container">
      <h5>
        <a href="AGated.php">View Gated Community</a>
        </h5>
        <h2>
         Create Apartment
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
                <input type="text" name="iid" placeholder=" Individual ID"  required/>
              </div>
              <div>
                <input type="text" name="type" placeholder="Type"  required/>
              </div>
              <div>
                <input type="text" name="addr" placeholder="Address"  required/>
              </div>
              <div>
                <input type="text" name="rent" placeholder="Rent"  required/>
              </div>
              <div>
                <input type="text" name="pid" placeholder="Property Id"  required/>
              </div>
              <div class="">
                <button type="submit" name="Gated">
                     Add Gated
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