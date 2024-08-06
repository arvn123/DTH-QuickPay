<?php
session_start();
include_once("../dboperation.php");
$obj=new dboperation();
echo $sql="select * from tbllogin where loginid=".$_SESSION['loginid'];
$result=$obj->query($sql);
$display=mysqli_fetch_array($result);
$uname=$_POST["txtusername"];
$pass=$_POST["txtpassword"];
$newpwd=$_POST["txtnewpassword"];

if($pass==$display["password"])
{
    echo $sql1="update tbllogin set password='$newpwd' where loginid=".$_SESSION['loginid'];
    $result1=$obj->query($sql1);

    if($result1==1)
    {
        echo "<script>alert('Password Changed Successfully....');
        window.location='index.php' </script>";
    }
    else
    {
        echo "<script>alert('Password Changing Failed....');
        window.location='index.php' </script>";
    }
}

else
{
    echo "<script>alert('Entered password is wrong....');window.location='index.php' </script>"; 
}
?>