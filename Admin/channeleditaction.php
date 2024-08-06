<?php
include_once("../dboperation.php");
$obj=new dboperation();
$channelname=$_POST["channelname"];
$description=$_POST["description"];
$channelamount=$_POST["channelamount"];
$channelid=$_POST["channel"];
echo $query="update tblchannel set channelname='$channelname',description='$description',channelamount=$channelamount where channelid=$channelid";
$result=$obj->query($query);
if($result==1)
{
    echo "<script>alert('channel details updated successfully');window.location='channelview.php'</script>";
}
else
{
    echo "<script>alert('error updating Channel record');</script>";
    echo "<script>window.loction.href='channelview.php';</script>";
}

?>