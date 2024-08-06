<?php
$customerid = $_GET["customerid"];
require_once("../dboperation.php");
$obj = new dboperation();
echo $sql = "update tbllogin set status='confirm' where loginid=$customerid";
$obj->query($sql);
echo "<script>alert('CONFIRMED record');</script>";
echo "<script>window.location.href='viewcustomer.php';</script>";
?>
