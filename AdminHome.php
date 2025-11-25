<?php
session_start(); 
  include_once "header1.php";
?>
  
  <section class="about_section layout_padding-bottom">
    <div class="square-box">
      <img src="images/square.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                 Welcome To <?php echo $_SESSION["username"]; ?>
              </h2>
            </div>
            <p>
              Admin Can take care of all details.
            </p>
          
          </div>
        </div>
      </div>
    </div>
  </section>

  
<?php 
 include_once "footer.php";
?>