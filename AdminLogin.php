<?php
session_start(); 
  include_once "header.php";
?>
  
  <?php 
       if(isset($_REQUEST["admin"]))
       {
             require_once "db.php";
              $uname = $_REQUEST["uname"];
              $password = $_REQUEST["password"];

              $sql = "select * from admin_login where username='$uname' and password = '$password'";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($row = mysqli_fetch_array($res))
              {
                   $_SESSION["username"] = $uname;
                   echo "<script>alert('Login Success');</script>";
                   echo "<script>window.location.href='AdminHome.php';</script>";
                 
              }
              
       }
  ?>
   <section class="contact_section layout_padding-top">
    <div class="container">
      <div class="heading_container">
        <h2>
        Admin Login 
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
                <input type="text" name="uname" placeholder="User Name"  required/>
              </div>
              <div>
                <input type="password" name="password" placeholder="Password"  required/>
              </div>
              <div class="">
                <button type="submit" name="admin">
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