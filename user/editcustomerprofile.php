<!DOCTYPE html>
<html>
<head>
<script src="../jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
// alert("a")
$("#district").change(function(){
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
session_start();
include_once("header.php");
echo "<br><br><br><br><b><br>Welcome ".$_SESSION["username"]."You can Edit Your Details</b>";
$loginid=$_SESSION["loginid"];
require_once("../dboperation.php");
$obj=new dboperation();
$qry = "SELECT * FROM tblcustomer WHERE loginid = $loginid";
$res = $obj->query($qry);
$r = mysqli_fetch_array($res);
$qry1 = "SELECT * FROM tbldistrict";
$rr = $obj->query($qry1);
$qry2="SELECT * FROM tbllocation";
$result=$obj->query($qry2);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Customer Profile</title>
</head>
<body>
<form id="form1" name="form1" action="editprofileaction.php" method="post" >
<table width="350" height="257" border="1" align="center">
<tr>
<td colspan="2">Customer Details</td>
</tr>
<tr>
    <br>
    <br>
    <br>
    <br>
<td width="112">Name</td>
<td width="195"><input type="text" name="customername"
value="<?php echo $r["customername"]; ?>" /></td>
</tr>
<tr>
<td>District</td>
<td>
<select name="district" id="district">
<?php
while ($r1 = mysqli_fetch_array($rr)) 
{
$selected = ($r["districtid"] == $r1["districtid"]) ? "selected=selected" : "";
echo "<option value='" . $r1["districtid"] . "'$selected>" . $r1["districtname"] . "</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td>Location</td>
<td>
<select name="location" id="location">
<?php
while ($r1 = mysqli_fetch_array($result)) 
{
$selected = ($r["locationid"] == $r1["locationid"]) ? "selected=selected" : "";
echo "<option value='" . $r1["locationid"] . "'$selected>" . $r1["locationname"] . "</option>";
}
?>                                         
</select>
</td>
</tr>
<tr>
<td width="112">Pincode</td>
<td width="195"><input type="text" name="pincode"
value="<?php echo $r["pincode"]; ?>" /></td>
</tr>   
<td width="112">Email</td>
<td width="195"><input type="email" name="email"
value="<?php echo $r["email"]; ?>" /></td>
</tr>
<tr>
<td width="112">Aadhar Number</td>
<td width="195"><input type="text" name="aadharno"
value="<?php echo $r["aadharno"]; ?>" /></td>
</tr>
<tr>
<td width="112">Phonenumber</td>
<td width="195"><input type="text" name="phno"
value="<?php echo $r["phone"]; ?>" /></td>
</tr>
<tr>
<tr>
<td width="112">Smartcard Number</td>
<td width="195"><input type="text" name="smartno"value="<?php echo $r["smartcardno"]; ?>" /></td>
</tr>
<tr>
<td width="112">Registration date</td>
<td width="195"><input type="date" name="regdate" value="<?php echo $r["registrationdate"]; ?>" /></td>
</tr>
<td width="112">Renewal date</td>
<td width="195"><input type="date" name="renewaldate" value="<?php echo $r["renewaldate"]; ?>" /></td>
</tr>
<tr>
<td width="112">Action</td>
<td width="195"><input type="text" name="action"
value="<?php echo $r["loginid"]; ?>" /></td>
</tr>   
</table>
<p>
<input type="submit" name="btnsubmit" value="Save Changes" />
</p>
</form>
</body>
</html>
<?php
include_once("footer.php");
?>



