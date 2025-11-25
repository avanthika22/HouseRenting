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
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="detail-box">
             <h5>
                 <a href="CreateService.php"> Create New Service </a>
              </h5>
            <div class="heading_container">
              <h2>
                  Services
              </h2>
            </div>
            <?php  
               require_once "db.php";
            ?>
           
          
          </div><table class="table table-hover">
  <tr style='background: whitesmoke;'>
  <th>SERVICE ID</th>
  <th>SERVICE NAME</th>
  <th>Edit</th>
  <th>Delete</th>
  
  </tr>

  <?php 
  $query = "SELECT * FROM services";

  $result = mysqli_query($con,$query);
  
  $count = 1;
  while($row = mysqli_fetch_array($result) ){
    $service_id = $row['service_id'];
    $service_name = $row['service_name'];
   

  ?>
    <tr>
     <td><?php echo $service_id; ?></td>
     <td><?php echo $service_name; ?></td>
     <td><a href="EditService.php?id=<?php echo $service_id; ?>">Edit</a></td>
     <td><a href="DeleteService.php?id=<?php echo $service_id; ?>">Delete</a></td>

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