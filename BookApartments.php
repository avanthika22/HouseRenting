<?php
session_start(); 
  include_once "header.php";
?>

<?php 
 require_once "db.php";
       if(isset($_REQUEST["Add"]))
       {
            
        require_once "connect.php";
        $aname = $_REQUEST['aname'];
        $email = $_REQUEST['email'];
        $vtype = $_REQUEST['vtype'];
        $password = $_REQUEST['password'];
        $mobile = $_REQUEST['mobile'];
        $gender = $_REQUEST['gender'];
        $leasing = $_REQUEST['leasing'];
        $payment = $_REQUEST['payment'];
        $iid = $_REQUEST['iid'];
        $status= "Pending";
        if (is_uploaded_file($_FILES['image']['tmp_name'])) {
         $imgData = file_get_contents($_FILES['image']['tmp_name']);
         $imgType = $_FILES['image']['type'];
         $sql = "INSERT INTO application_form1(application_name,id_proff,imgType,vtype,application_mail,password,application_mobile,application_gender,leasing,payment,iid,status) 
         values (?,?,?,?,?,?,?,?,?,?,?,?)";
         $statement = $con->prepare($sql);
         $statement->bind_param('ssssssssssss', $aname, $imgData,$imgType,$vtype,$email,$password,$mobile,$gender,$leasing,$payment,$iid,$status);
         $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
         if($current_id>=1)
         echo "<script>alert('Booking Successfully');</script>";
         echo "<script>window.location.href='Apa.php';</script>";
       
       }

      }
  ?>
  <?php 
  
  $iid = $_REQUEST["iid"];
  ?>
<section class="contact_section layout_padding-top">
<div class="container">

<div class="heading_container">

 <h2>
   Apartment  Application Form
 </h2>
</div>
</div>
<div class="container-fluid">
<div class="row">
 <div class="col-md-4 px-0">
   
 </div>
 <div class="col-lg-4 col-md-5 ">
   <div class="form_container">
     <form action="" method="post" enctype="multipart/form-data">
      
       
       <div>
         <input type="text" name="aname" value="" placeholder="Applicant Name"  required/>
       </div>
       <div>
         <br>
         select id proof:
         <input type="file" name="image"  placeholder="select id proff"  required/>
       </div>
       <div>
       <br>
            <select name="vtype" class="form-control" required>
              <option value="">Verification Type</option>
              <option value="Passport">Passport</option>
              <option value="Driving License">Driving License</option>
              <option value="SSN">SSN</option>
             
            </select>
       <div>
         <input type="email" name="email"  placeholder="Enter Email"  required/>
       </div>
       <div>
         <input type="password" name="password"  placeholder="Enter Password"  required/>
       </div>
       <div>
         <input type="text" name="mobile"  placeholder="Enter Mobile"  required/>
       </div>
       <div>
         Select Gender<br>
          <Select name= "gender" class="form-control" required> 
             <option value="">Select Gender</option>
             <option value="Male">Male</option>
             <option value="Female">Female</option>
          </Select>
       </div>
       <div>
         <input type="text" name="leasing"  placeholder="Leasing Period"  required/>
       </div>
       <div>
         <input type="text" name="payment" value="200"  placeholder="Leasing Period"  readonly/>
       </div>
       <div>
         <br>
            Apartment Id 
         </br>
         <input type="text" name="iid" value= <?php echo $iid; ?>    readonly/>
       </div>

       <div class="">
         <button type="submit" name="Add">
              Booking
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