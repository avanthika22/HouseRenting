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
                 <a href="CreateProperties.php"> Create New Properties </a>
              </h5>
            <div class="heading_container">
              <h2>
                  Properties
              </h2>
            </div>
            <?php  
               require_once "db.php";
            ?>
           
          
          </div><table class="table table-hover">
  <tr style='background: whitesmoke;'>
  <th>Id</th>
  <th>NAME</th>
  <th>LOCATION</th>
  <th>MAIL ID</th>
  <th>MOBILE</th>
  <th>SERVICES</th>
  <th>Edit</th>
  <th>Delete</th>
  
  </tr>

  <?php 
  $query = "SELECT * FROM property_details";

  $result = mysqli_query($con,$query);
  
  $count = 1;
  while($row = mysqli_fetch_array($result) ){
    $id = $row[0];
    $name = $row[1];
    $location = $row[2];
    $mailid = $row[3];
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
     <td><a href="EditProperties.php?id=<?php echo $id; ?>">Edit</a></td>
     <td><a href="DeleteProperties.php?id=<?php echo $id; ?>">Delete</a></td>

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