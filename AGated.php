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
                 <a href="CreateGated.php"> Create New Gated Community </a>
              </h5>
            <div class="heading_container">
              <h2>
                   Gated Community
              </h2>
            </div>
            <?php  
               require_once "db.php";
            ?>
          </div><table class="table table-hover">
  <tr style='background: whitesmoke;'>
  <th>Id</th>
  <th>Type</th>
  <th>Address</th>
  <th>Rent</th>
  <th>Property Id</th>
  <th>Edit</th>
  <th>Delete</th>
  
  </tr>

  <?php 
  $query = "SELECT * FROM gated_community";

  $result = mysqli_query($con,$query);
  
  $count = 1;
  while($row = mysqli_fetch_array($result) ){
    $id = $row[0];
    $type = $row[1];
    $addr = $row[2];
    $rent = $row[3];
    $prop_id = $row[4];
  ?>
    <tr>
     <td><?php echo $id; ?></td>
     <td><?php echo $type; ?></td>
     <td><?php echo $addr; ?></td>
     <td><?php echo $rent; ?></td>
     <td><?php echo $prop_id; ?></td>
     <td><a href="EditGated.php?id=<?php echo $id; ?>">Edit</a></td>
     <td><a href="DeleteGated.php?id=<?php echo $id; ?>">Delete</a></td>

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