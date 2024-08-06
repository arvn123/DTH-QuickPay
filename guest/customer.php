<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
<script src="../jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
// alert("a")
$("#seldistrictid").change(function(){
var districtid=$(this).val();
// alert(districtid)
$.ajax({
url: "getlocation.php",
method: "POST",
data: { districtid: districtid },
success: function(response) 
{
$("#location").html(response);
},
error: function() 
{
$("#location").html("Error occurred while getting!");
}
});
});
});
</script>
</head>
<?php
include_once("../dboperation.php");
$obj=new dboperation();
$sql="select * from tbldistrict";
$res=$obj->query($sql);
$sql1="select * from tbllocation";
$rs=$obj->query($sql1);
?>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="../free.jpg"
                alt="Sample photo" class="img-fluid" height="500"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                <img src="../download.png"
                alt="Sample photo" class="img-fluid" height="1000" width="1000"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Customer registration form</h3>
                <form method="post" action="customeraction.php" name="f1">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                        <label for="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customername" name="customername" placeholder="Customer Name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                      <label class="form-label" for="">District</label>
                      <select class="select form-control-lg" name="seldistrictid" id="seldistrictid">
                    <option  >Choose District</option>
                                                   <?php
                                                    while($display=mysqli_fetch_array($res))
                                                    {
                                                    ?>
                        <option value="<?php echo $display["districtid"] ?>"><?php echo $display["districtname"] ;?></option>
                                                   <?php
                                                    }
                                                    ?>
                  </select>
                 
                  
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-group">
                      <div class="form-outline" id="location">
                      <label class="form-label" for="">Location</label>
                                       <select class="select form-control-lg" id="sellocationid" class="form-control" name="sellocationid"   >
                                         <option  >Choose Location</option>
                                         <?php
                                                    while($display=mysqli_fetch_array($rs))
                                                    {
                                                    ?>
                        <option value="<?php echo $display["locationid"] ?>"><?php echo $display["locationname"] ;?></option>
                                                   <?php
                                                    }
                                                    ?>                       
                                       </select>
                                   
                                     
                     
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="form-label">PINCODE</label>
                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Aadhar Number</label>
                    <input type="text" class="form-control" id="Aadhar" name="Aadhar" placeholder="Aadhar Number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Phone Number</label>
                    <input type="text" class="form-control" id="phno" name="phno" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Smartcard Number</label>
                    <input type="text" class="form-control" id="smartcardno" name="smartcardno" placeholder="Smartcard Number">
                  </div>
                  <div class="form-group">
                    
                    <input type="text"hidden id="regdate" name="regdate" class="form-control form-control-lg" value="<?php echo date ('Y/m/d');?>"/>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputName1">Renewal Date</label>
                    <input type="date" class="form-control" id="renewaldate" name="renewaldate" placeholder="Renewal Date">
                  </div> -->
                  <div class="form-group">
                  <label class="form-label">User name</label>
                  <input type="text" id="username" name="username" class="form-control form-control-lg" />
</div>
<div class="form-group">
<label class="form-label">Password</label>
  <input type="password" id="password" name="password" class="form-control form-control-lg" />
</div>
            
                 
                  <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-warning btn-lg ms-2" name="Submit">Submit form</button>
                    <button type="reset" class="btn btn-light btn-lg" name="Reset all">Reset all</button>
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
include("footer.php");
?>