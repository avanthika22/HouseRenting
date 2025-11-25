<?php
session_start(); 
  include_once "header2.php";
?>
  
  <section class="about_section layout_padding-bottom">
    <div class="square-box">
      <img src="images/square.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="detail-box">
            
            <div class="heading_container">
              <h2>
                   View Complaints
              </h2>
            </div>
            <?php  
               require_once "db.php";
            ?>
           
          
          </div><table class="table table-hover">
  <tr style='background: whitesmoke;'>
  <th>Complaint ID</th>
  <th>TYPE</th>
  <th>Description</th>
  <th>PRIORITY</th>
  <th>RESIDENT EMAIL</th>
  <th>TID</th>
  <th>STATUS</th>
  
  
  </tr>

  <?php 
  $query = "SELECT * FROM complaint_booking where ResidentEmail='".$_SESSION["username"]."'";

  $result = mysqli_query($con,$query);
  
  $count = 1;
  while($row = mysqli_fetch_array($result) ){
   

  ?>
    <tr>
     <td><?php echo $row[0]; ?></td>
     <td><?php echo $row[1]; ?></td>
     <td><?php echo $row[2]; ?></td>
     <td><?php echo $row[3]; ?></td>
     <td><?php echo $row[4]; ?></td>
     <td><?php echo $row[5]; ?></td>
     <td><?php echo $row[6]; ?></td>
    
    </tr>
  <?php
   
  }
 ?>
  </table>
        </div>
        <div class="col-md-2">
          
        
          </div>
      </div>
    </div>
  </section>

  
<?php 
 include_once "footer.php";
?>