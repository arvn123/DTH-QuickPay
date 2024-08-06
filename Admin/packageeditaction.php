<?php
include_once("../dboperation.php");
$obj=new dboperation();
$packagename=$_POST["packagename"];
$description=$_POST["description"];
$duration=$_POST["duration"];
$packageamount=$_POST["amount"];
$packageid=$_POST["package"];
echo $query="update tblpackage set packagename='$packagename',packagedescription='$description',packageduration='$duration',packageamount=$packageamount where packageid=$packageid";
$result=$obj->query($query);
if($result==1)
{
    echo "<script>alert('package details updated successfully');window.location='packageview.php'</script>";
}
else
{
    echo "<script>alert('error updating package record');</script>";
    echo "<script>window.loction.href='packageview'.php';</script>";
}

?>