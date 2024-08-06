<?php
$rechargeid = $_GET["rechargeid"];
require_once("../dboperation.php");
$obj = new dboperation();
echo $sql = "UPDATE customerrecharge SET packagestatus='confirm' WHERE rechargeid='$rechargeid'";
$obj->query($sql);
echo "<script>alert('confirm record');</script>";
echo "<script>window.location.href='../user/rechargeview.php';</script>";
?>