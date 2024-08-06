<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
require_once("../dboperation.php");
$obj=new dboperation();
 $sql="select * from tbllogin where username='$username' and password='$password'";
$res=$obj->query($sql);
if(mysqli_num_rows($res)==1)
{
$row=mysqli_fetch_array($res);
$_SESSION["loginid"]=$row["loginid"];
$_SESSION["username"]=$row["username"];
if($row["role"]=="Admin" && $row["status"]=="confirm" )
{
header("location:..\Admin\index.php");
}
else if($row["role"]=="customer" && $row["status"]=="confirm" )
{
header("location:..\user\index.php");
}
if($row["role"]=="customer")
{
    echo "<script>alert('PLEASE WAIT FOR CONFIRMATION!!');window.location='login.php'</script>";
}
else
{ 
    echo "<script>alert('Invalid Username/Password!!');window.location='login.php'</script>";
}
}
?>