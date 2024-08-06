<?php
function generateRandomString($length = 5) 
{
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $randomString = substr(str_shuffle($characters), 0, $length);

   return $randomString;
}


?>
<?php
include_once("../dboperation.php");
$obj=new dboperation();
$uname=$_POST["txtusername"];
$sql="select l.*,p.* from tbllogin l inner join 
tblcustomer p on l.loginid=p.loginid where l.username='$uname'";
$result=$obj->query($sql);
$display=mysqli_fetch_array($result);
$row=mysqli_num_rows($result);
if($row==0)
{
    echo "<script>alert('Entered username is wrong....');window.location='forgotpassword.php' </script>"; 
}
else
{
$randomString = generateRandomString();
$sql2="update tbllogin set password='$randomString' where username='$uname'";
$result=$obj->query($sql2);
$bodyContent="Dear $uname, Your New Password is:$randomString";
$mailtoaddress=$display["email"];
require('phpmailer.php');
echo "<script>window.location='login.php'</script>";
}
?>