<?php
require_once("../dboperation.php");
$obj = new dboperation();

if (isset($_GET['packagedetailsid'])) {
    $package_id = $_GET['packagedetailsid'];

    $sql = "DELETE FROM tblpackagedetails WHERE packagedetailsid = '$package_id'";
    $result = $obj->query($sql);

    if ($result == 1) {
        echo "<script>alert('Package deleted successfully');</script>";
        echo "<script>window.location.href='packagedetailsview.php';</script>";
    } else {
        echo "<script>alert('Error deleting package record');</script>";
        echo "<script>window.location.href='packagedetailsview.php';</script>";
    }
}
?>

        
        




