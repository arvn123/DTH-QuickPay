
<?php
session_start();
include_once("header.php");
echo "<br><br><br><br><b>Welcome <b> ".$_SESSION["username"]; 
?>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              
            </div>
<?php
require_once("../dboperation.php");
$obj=new dboperation();
$loginid=$_SESSION["loginid"]; 
echo $qry="select * from tblcustomer where loginid='$loginid'";
$res=$obj->query($qry);
$r=mysqli_fetch_array($res);
$qry1="select * from tbldistrict";
$rr=$obj->query($qry1);
$qry2="select * from tbllocation";
$result=$obj->query($qry2);
?>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Customer registration form</h3>
                <form method="post" action="customeraction.php" name="f1">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="form-label">Customer Name:</label>
                        <label for="customername"><?php echo
$r["customername"];?></label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                      <label class="form-label" for="">District:</label>
                      <select name="districtname" id="districtname" >
                      <?php
while($r1=mysqli_fetch_array($rr))
{
?>
<option value="<?php echo $r1["districtid"];?>" <?php echo
($r["districtid"]==$r1["districtid"])?"selected=selected":"";?>><?php echo
$r1["districtname"];?></option>
<?php
}
?>
</select>
                    
                 
                  
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                      <div class="form-outline" id="location">
                      <label class="form-label" for="">Location:</label>
                      <select name="locationname" id="locationname" >
<?php
while($r1=mysqli_fetch_array($result))
{
?>
<option value="<?php echo $r1["locationid"];?>" <?php echo
($r["locationid"]==$r1["locationid"])?"selected=selected":"";?>><?php echo
$r1["locationname"];?></option>
<?php
}
?>
</select>          
                                   
                                     
                     
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="form-label">PINCODE:</label>
                    <label for="pincode"><?php echo
$r["pincode"];?></label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Email Address:</label>
                    <label for="email"><?php echo
$r["email"];?></label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Aadhar Number:</label>
                    <label for="number"><?php echo $r["aadharno"];?></label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Phone Number:</label>
                    <label for="number"><?php echo
$r["phone"];?></label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Smartcard Number:</label>
                    <label for="number"><?php echo $r["smartcardno"];?></label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Registration Date:</label>
                    <label for="regdate"><?php echo
$r["registrationdate"];?></label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Renewal Date</label>
                    <label for="regdate"><?php echo
$r["renewaldate"];?></label>
                  </div>
                  <div class="form-group">
                  <label class="form-label">Action:</label>
                  <label for="action"><?php echo
$r["loginid"];?></label>
</div><p><a href="editcustomerprofile.php">Editprofile</a>&nbsp;</p>
<p>&nbsp;</p>
                 
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include_once("footer.php");
?>