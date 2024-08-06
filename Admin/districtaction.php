<?php
include_once("../dboperation.php");
$obj = new dboperation();
$name = $_POST["txt_name"];
$query1 = "select * from tbldistrict where districtname='$name'";
$result = $obj->query($query1);
$row = mysqli_num_rows($result);
if ($row == 0)
 {
    $query = "insert into tbldistrict(districtname) values('$name')";
    $result = $obj->query($query);
    if ($result == 1)
     {
        echo "<script>alert('District Added successfully');</script>";
        echo "<script>window.location.href='district.php';</script>";
    } 
    else 
    {
        echo "<script>alert('District addition failed');</script>";
        echo "<script>window.location.href='district.php';</script>";
    }
} 
else 
{
    echo "<script>alert('District is already registered');</script>";
}
?>
