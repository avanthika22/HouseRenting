<?php
session_start(); 
  include_once "header.php";
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
                      View Properties
              </h2>
            </div>
            <?php  
               $id = $_GET['id'];
               require_once "db.php";
            ?>
          </div><table class="table table-hover" style="background-color:white;">
  <tr style='background: whitesmoke;'>
  <th>Id</th>
  <th>Name</th>
  <th>Location</th>
  <th>Maild id</th>
  <th>Mobile</th>
  <th>Services</th>
  
  </tr>

  <?php 
  $query = "SELECT * FROM property_details where property_id = $id";

  $result = mysqli_query($con,$query);
  
  $count = 1;
  while($row = mysqli_fetch_array($result) ){
    $id = $row[0];
    $name = $row[1];
    $location = $row[2];
    $mailid= $row[3];
    $mobile = $row[4];
    $services = $row[5];
  ?>
    <tr>
     <td><?php echo $id; ?></td>
     <td><?php echo $name; ?></td>
     <td><?php echo $location; ?></td>
     <td><?php echo $mailid; ?></td>
     <td><?php echo $mobile; ?></td>
     <td><?php echo $services; ?></td>
     
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