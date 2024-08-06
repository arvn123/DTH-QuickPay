<?php
include("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["channelid"]))
{
  $channelid=$_GET["channelid"];
    echo$sql="delete from tblchannel where channelid=$channelid";
  $res=$obj->query($sql);
  if($res)  
  {
   echo"<script>alert('channel details  deleted successfully');</script>";
    echo"<script>window.location.href='channelview.php';</script>";
  }
  else{
    echo"<script>alert('Error deleting  channel');</script>";
    echo"<script>window.location.href='channelview.php';</script>";
  }
}
?>
