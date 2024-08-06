<?php
include_once("../dboperation.php");
$obj = new dboperation();

if(isset($_POST["submit"]))
{
    $packagename = $_POST["packageid"]; 
    $channelname = $_POST["selchannelid"];

    $query1 = "select * from tblpackagedetails where packageid='$packagename' and channelid='$channelname'";
    $result = $obj->query($query1);
    $row = mysqli_num_rows($result);

    if($row == 1)
    {
        echo "<script>alert('Already exists');window.location.href='packagedetailsview.php'</script>";
    }
    else
    {
        $sql = "insert into tblpackagedetails(packageid, channelid) values ('$packagename', '$channelname')";
        $obj->query($sql);
        echo "<script>alert('Added successfully');window.location.href='packagedetailsview.php'</script>";
    }
}
?>
