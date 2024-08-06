<?php
include("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["customerid"]))
{
  $customerid=$_GET["customerid"];
    $sql="delete from tblcustomer where customerid=$customerid";
  $res=$obj->query($sql);
  if($res)  
  {
   echo"<script>alert('customer details  deleted successfully');</script>";
    echo"<script>window.location.href='viewcustomer.php';</script>";
  }
  else{
    echo"<script>alert('Error deleting  channel');</script>";
   echo"<script>window.location.href='viewcustomer.php';</script>";
  }
}
?>
