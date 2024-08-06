<?php
include("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["packageid"]))
{
  $packageid=$_GET["packageid"];
    echo$sql="delete from tblpackage where packageid=$packageid";
  $res=$obj->query($sql);
  if($res)  
  {
   echo"<script>alert('Package details  deleted successfully');</script>";
    echo"<script>window.location.href='packageview.php';</script>";
  }
  else{
    echo"<script>alert('Error deleting  package');</script>";
    echo"<script>window.location.href='packageview.php';</script>";
  }
}
?>
