<?php
include_once("../dboperation.php");
$obj = new dboperation();
$smartcardno= $_POST['smartcardno'];
$complaintdate=date('Y/m/d');
$complaint = $_POST['complaint'];
$remark = $_POST['remark'];
echo $query = "insert into tblcomplaint(smartcardno,complaintdate,complaint,remark) values('$smartcardno','$complaintdate','$complaint ','$remark')";
$result = $obj->query($query);
?>