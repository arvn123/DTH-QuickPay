<?php
include_once("../dboperation.php");
$obj = new dboperation();
$fromaccount = $_POST['fromaccount'];
$toaccount = $_POST['toaccount'];
$amount = $_POST['amount'];
$payementdate=date('Y/m/d');
$rechargeid = $_POST["rechargeid"];
echo $query = "insert into tblpayment(fromaccount,toaccount,amount,paymentdate,status,rechargeid) values('$fromaccount','$toaccount','$amount','$payementdate','completed','$rechargeid')";
$result = $obj->query($query);
?>
