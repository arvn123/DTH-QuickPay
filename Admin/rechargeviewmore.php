<?php
session_start();
include_once("header.php");
include_once("../dboperation.php"); 

$obj = new dboperation();
$loginid = $_SESSION["loginid"];
$qry = "SELECT * FROM tblcustomer WHERE loginid=$loginid";
$res = $obj->query($qry);
$r = mysqli_fetch_array($res);
$r1=$_GET["rechargeidid"];
$smartcardno = $r1;
$query = "SELECT * FROM customerrecharge c INNER JOIN tblpackage p ON p.packageid=c.packageid WHERE c.smartcardno ='$smartcardno'";
$result = $obj->query($query);
$res = mysqli_fetch_array($result);

$qry2 = "SELECT * FROM tbllocation";
$locationResult = $obj->query($qry2);
$locationData = mysqli_fetch_array($locationResult);
?>

<br><br><br><br><br><br><br><br>

<div class="col-lg-50 stretch-card">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">VIEW MORE DETAILS</h1>
      <form method="post" action="" name="f1">
        <div class="form-group">
          <strong for="form-label">CUSTOMER NAME:</strong>
          <span for="customername"><?php echo $r["customername"]; ?></span>
        </div>
        <div class="form-group">
          <strong for="form-label">LOCATION:</strong>
          <span for="locationid"><?php echo $locationData["locationname"]; ?></span>
        </div>
                  <div class="form-group">
                    <b for="exampleInputName1">Aadhar Number:</b>
                    <span for="number"><?php echo $r["aadharno"];?></span>
                  </div>
                  <div class="form-group">
                    <b for="exampleInputName1">Phone Number:</b>
                    <span for="number"><?php echo $r["phone"];?></span>
                  </div>
                  <div class="form-group">
                    <b for="exampleInputName1">Smartcard Number:</b>
                    <span for="number"><?php echo $r["smartcardno"];?></span>
                  </div>
                  <div class="form-group">
                    <b for="exampleInputName1">PACKAGE NAME:</b>
                    <span for="number"><?php echo $res["packagename"];?></span>
                  </div>
                  <div class="form-group">
                    <b for="exampleInputName1">RECHARGE DATE:</b>
                    <span for="number"><?php echo $res["rechargedate"];?></span>
                  </div>
                  <div class="form-group">
                    <b for="exampleInputName1">DUE DATE:</b>
                    <span for="number"><?php echo $res["packageduedate"];?></span>
                  </div>      
                  <a href="confirmrecharge.php?rechargeid=<?php echo $res["rechargeid"]; ?>">
    <button type="button" class="btn  btn-icon btn-danger"><i class="feather icon-delete">CONFIRM</i></button>
    </a>
      
      </form>
    </div>


<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

<?php
include_once("footer.php");
?>
