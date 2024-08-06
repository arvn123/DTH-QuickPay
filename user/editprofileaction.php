
<?php
session_start();
include_once("header.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
$loginid = $_SESSION["loginid"];
$customerName = $_POST["customername"];
$districtid = $_POST["district"];
$locationid = $_POST["location"];
$pincode= $_POST["pincode"];
$email = $_POST["email"];
$aadharno = $_POST["aadharno"];
$phonenumber = $_POST["phno"];
$smartcardnumber = $_POST["smartno"];
$registrationdate=$_POST["regdate"];
$renewaldate=$_POST["renewaldate"];
$action=$_POST["action"];
require_once("../dboperation.php");
$obj = new dboperation();
$qry = "UPDATE tblcustomer SET customername = '$customerName', districtid ='$districtid', locationid = '$locationid',pincode='$pincode', email= '$email', aadharno =
'$aadharno', phone = '$phonenumber',smartcardno='$smartcardnumber',registrationdate='$registrationdate',renewaldate='$renewaldate',loginid='$action' WHERE loginid = $loginid";
$result = $obj->query($qry);
if ($result)
 {
  
echo "<br><br><br><br><b>Profile updated successfully..............</b>";
} 
else
 {
echo "Error updating profile.";
}
}
?>
<?php
include_once("footer.php");
?>
