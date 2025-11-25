<?php
session_start(); 
  include_once "header.php";
?>
  
  <?php 
       if(isset($_REQUEST["resident"]))
       {
             require_once "db.php";
              $uname = $_REQUEST["uname"];
              $password = $_REQUEST["password"];

              $sql = "select * from application_form where application_mail='$uname' and password = '$password'";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));
              $sql1 = "select * from application_form1 where application_mail='$uname' and password = '$password'";

              $res1 = mysqli_query($con,$sql1) or die(mysqli_error($con));
              $sql2 = "select * from application_form2 where application_mail='$uname' and password = '$password'";

              $res2 = mysqli_query($con,$sql2) or die(mysqli_error($con));

              if($row = mysqli_fetch_array($res))
              {
                   $_SESSION["username"] = $uname;
                   $_SESSION["Type"] = "Individual";
                   echo "<script>alert('Login Success');</script>";
                   echo "<script>window.location.href='ResidentialHome.php';</script>";
                 
              }
              else if($row = mysqli_fetch_array($res1))
              {
                   $_SESSION["username"] = $uname;
                   $_SESSION["Type"] = "Apartment";
                   echo "<script>alert('Login Success');</script>";
                   echo "<script>window.location.href='ResidentialHome.php';</script>";
                 
              }
              else if($row = mysqli_fetch_array($res2))
              {
                   $_SESSION["username"] = $uname;
                   $_SESSION["Type"] = "Gated";
                   echo "<script>alert('Login Success');</script>";
                   echo "<script>window.location.href='ResidentialHome.php';</script>";
                 
              }

              
       }
  ?>
   <section class="contact_section layout_padding-top">
    <div class="container">
      <div class="heading_container">
        <h2>
        Resident Login 
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
                <input type="email" name="uname" placeholder="Email"  required/>
              </div>
              <div>
                <input type="password" name="password" placeholder="Password"  required/>
              </div>
              <div class="">
                <button type="submit" name="resident">
                     Login
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