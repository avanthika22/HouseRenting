<?php
session_start(); 
  include_once "header2.php";
?>

<?php 
       if(isset($_REQUEST["Complaint"]))
       {
             require_once "db.php";
              $amount = $_REQUEST["amount"];
              $type = $_REQUEST["type"];
              $baddress = $_REQUEST["baddress"];
              $remail = $_REQUEST["remail"];
             
              $sql = "insert into payment(Amount,PaymentType,BillingAddress,ResidentEmail) 
              values('$amount','$type','$baddress','$remail')";

              $res = mysqli_query($con,$sql) or die(mysqli_error($con));

              if($res == 1)
              {
                   
                   echo "<script>alert('Rent Paid');</script>";
                   echo "<script>window.location.href='PayRent.php';</script>";
                 
              }
              
       }
  ?>
  
  <section class="contact_section layout_padding-top">
    <div class="container">
    <h2>
          <a href="viewrent.php">View Rent</a>
        </h2>
      <div class="heading_container">
      
        <h2>
         Pay Rent
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
                <input type="text" name="amount" placeholder="Enter Amount"  required/>
              </div>
              <div>
                 <br>
                <select name="type" class="form-control" required>
                       <option value="">Payment Type</option>
                       <option value="Phone pay">Phone Pay</option>
                       <option value="G pay">G Pay</option>
                       <option value="Debit card">Debit Card</option>
                       <option value="Credit Card">Credit Card</option>
                </select>
              </div>
              <div>
                <input type="text" name="baddress" placeholder="Billing Address"  required/>
              </div>
              <div>
                <input type="text" name="remail" value="<?php echo $_SESSION['username'] ?>" placeholder="Residential Email"  readonly/>
              </div>
              
              
              
              <div class="">
                <button type="submit" name="Complaint">
                     Add Payment
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