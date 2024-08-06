<?php
include_once("../dboperation.php");
$obj = new dboperation();
$customername = $_POST['customername'];
$district = $_POST['seldistrictid'];
$location = $_POST['sellocation'];
$pincode = $_POST['pincode'];
$email = $_POST['email'];
$aadhar = $_POST['Aadhar'];
$phoneNumber = $_POST['phno'];
$smartcardNumber = $_POST['smartcardno'];
$registrationDate = $_POST['regdate'];
$username = $_POST['username'];
$password = $_POST['password'];
echo $sql1="select * from tbllogin where username='$username '";
$res = $obj->query($sql1);
$rows = mysqli_num_rows($res);
if($rows==1)
{
    echo "<script>alert('Username already exists')</script>";
}
else
{
    $sql = "INSERT INTO tbllogin (username, password, role, status) VALUES ('$username', '$password', 'customer', 'notconfirmed')";
    $res = $obj->query($sql);
   if($res==1)
   {
    $loginid=mysqli_insert_id($obj->con);

          $sql = "INSERT INTO tblcustomer (customername, districtid, locationid, pincode, email, aadharno, phone, smartcardno, registrationdate, loginid) 
             VALUES ('$customername', '$district', '$location', '$pincode', '$email', '$aadhar', '$phoneNumber', '$smartcardNumber', '$registrationDate', '$loginid')";
        $result = $obj->query($sql);

       if ($result == 1) 
        {
            echo "<script>alert('Registration Successful')</script>";
         } 
         else
          {
           echo $s="delete from tbllogin where loginid='$loginid'";
           $res2=$obj->query($s);
           echo "<script>alert('Failed)</script>";
         }
        }
    }
    ?>
