<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
$loginid = $_SESSION["loginid"];
  echo $query1 = "select * from tblcustomer where loginid='$loginid'";
    $result = $obj->query($query1);
    $row= mysqli_num_rows($result);
    $result=$obj->query($query1);
    $display=mysqli_fetch_array($result);
   echo $smartcardno= $display["smartcardno"];
    $rechargedate=date('Y/m/d');
    $package_id = $_GET["selpackageid"];
     echo $query="select * from tblpackage WHERE packageid='$package_id'";
    $res=$obj->query($query);
    $row = mysqli_num_rows($res);
    $result=$obj->query($query);
    $display=mysqli_fetch_array($result);
     echo $packageduration=$display["packageduration"];
    echo $packageduedate=date('y-m-d',strtotime($rechargedate."+$packageduration days"));
    echo $query = "insert into customerrecharge(smartcardno,packageid,rechargedate,packageduedate,packagestatus) values('$smartcardno','$package_id','$rechargedate','$packageduedate','requested')";
     $result = $obj->query($query);
     echo "<script>window.location.href='rechargeview.php';</script>"
    
?>