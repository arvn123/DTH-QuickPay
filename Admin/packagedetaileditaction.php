<?php
include_once("../dboperation.php");
$obj = new dboperation();
if(isset($_POST["submit"]))
{
    $package_id = $_POST['packageid'];
    $channel_id = $_POST['selchannelid'];
    $packagedetailsid= $_POST['packagedetailsid'];
    echo $sql = "UPDATE tblpackagedetails SET channelid='$channel_id' where packagedetailsid='$packagedetailsid'";
    $result = $obj->query($sql);

    if ($result==1)
     {
       
       echo "<script>alert('channel record updated successfully');window.location='packagedetailsview.php'</script>";
     }
     else
{
    echo "<script>alert('error updating  record');</script>";
   echo "<script>window.loction.href='packagedetailsview.php';</script>";
}
}

?>
