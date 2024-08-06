<?php
include("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["locationid"]))
{
  $locationid=$_GET["locationid"];
    echo$sql="delete from tbllocation where locationid=$locationid";
  $res=$obj->query($sql);
  if($res)  
  {
   echo"<script>alert('location  deleted successfully');</script>";
    echo"<script>window.location.href='locationview.php';</script>";
  }
  else{
    echo"<script>alert('Error deleting location record');</script>";
    echo"<script>window.location.href='locationview.php';</script>";
  }
}
?>
