<?php
session_start(); 
  include_once "header1.php";
?>
  
  <section class="about_section layout_padding-bottom">
    <div class="square-box">
      <img src="images/square.png" alt="">
    </div>
    <div class="container-fluid">
      <div class="row">
       
        <div class="col-md-12">
          <div class="detail-box">
             
            <div class="heading_container">
              <h2>
                  Individual Bookings
              </h2>
            </div>
            <?php  
               require_once "db.php";
            ?>
          </div><table class="table table-hover">
  <tr style='background: whitesmoke;'>
  <th>Id</th>
  <th>Name</th>
  <th>Proof</th>
  <th>Proof Type</th>
  <th>Email</th>
  <th>Password</th>
  <th>Mobile</th>
  <th>Gender</th>
  <th>Leasing Period</th>
  <th>Payment</th>
  <th>Individual id</th>
  <th>Status </th>
  
  </tr>

  <?php 
  $query = "SELECT * FROM application_form";

  $result = mysqli_query($con,$query);
  
  $count = 1;
  while($row = mysqli_fetch_array($result) ){


  ?>
    <tr>
     <td><?php echo $row[0]; ?></td>
     <td><?php echo $row[1]; ?></td>
     <td>  <img  width="200px" height="250px" src = "imageView.php?id=<?php echo $row[0];?>">
         </td>
    
     <td><?php echo $row[4]; ?></td>
     <td><?php echo $row[5]; ?></td>
     <td><?php echo $row[6]; ?></td>
     <td><?php echo $row[7]; ?></td>
     <td><?php echo $row[8]; ?></td>
     <td><?php echo $row[9]; ?></td>
     <td><?php echo $row[10]; ?></td>
     <td><?php echo $row[11]; ?></td>
     <td>
        <?php
     if($row[12]=="Pending")
     {
       ?>
     <a href="Approved.php?id=<?php echo $row[0]; ?>">    
     <?php echo $row[12]; ?>
   
     </a>
     <?php 
     }
     else
     {
        ?> 
     <?php echo $row[12]; ?>
     <?php 
     }
     ?>
    </td>
    
     

     
    
    </tr>
  <?php
   
  }
 ?>
  </table>
        </div>
        
      </div>
    </div>
  </section>

  
  
<?php 
 include_once "footer.php";
?>