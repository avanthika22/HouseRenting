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
                 <a href="CreateTechnician.php"> Create New Technician </a>
              </h5>
            <div class="heading_container">
              <h2>
                  Technican
              </h2>
            </div>
            <?php  
               require_once "db.php";
            ?>
           
          
          </div><table class="table table-hover">
  <tr style='background: whitesmoke;'>
  <th>Tech ID</th>
  <th>NAME</th>
  <th>MAIL</th>
  <th>ADDRESS</th>
  <th>No of services Provided</th>
  <th>SERVICE ID</th>
  <th>WORKING HOURS</th>
  
  <th>Edit</th>
  <th>Delete</th>
  
  </tr>

  <?php 
  $query = "SELECT * FROM techinican";

  $result = mysqli_query($con,$query);
  
  $count = 1;
  while($row = mysqli_fetch_array($result) ){
    $id = $row[0];
    $name = $row[1];
    $mail = $row[2];
    $address = $row[3];
    $sprovided = $row[4];
    $sid = $row[5];
    $whours = $row[6];

  ?>
    <tr>
     <td><?php echo $id; ?></td>
     <td><?php echo $name; ?></td>
     <td><?php echo $mail; ?></td>
     <td><?php echo $address; ?></td>
     <td><?php echo $sprovided; ?></td>
     <td><?php echo $sid; ?></td>
     <td><?php echo $whours; ?></td>
     <td><a href="EditTech.php?id=<?php echo $id; ?>">Edit</a></td>
     <td><a href="DeleteTech.php?id=<?php echo $id; ?>">Delete</a></td>

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