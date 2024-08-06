<?php
$locationname=$_POST["locationname"];
$locationid=$_POST["location"];
include_once("../dboperation.php");
$obj=new dboperation();
echo $query="update tbllocation set locationname='$locationname' where locationid='$locationid'";
$result=$obj->query($query);
if($result==1)
{
    echo "<script>alert('location record updated successfully');window.location='locationview.php'</script>";
}
else
{
    echo "<script>alert('error updating location record');</script>";
    echo "<script>window.loction.href='locationview.php';</script>";
}

?>