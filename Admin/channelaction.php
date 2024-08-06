<?php
include_once("../dboperation.php");
$obj=new dboperation();
if(isset($_POST["submit"]))
{
$channelname=$_POST["channelname"];
$desp=$_POST["description"];
$channelamount=$_POST["channelamount"];
}

echo $query1="select * from tblchannel where channelname='$channelname'";
$result=$obj->query($query1);
$row=mysqli_num_rows($result);
if($row==1)
{
    echo "<script>alert('already exists');windows.location='channelview.php'</script>";
}
else
{
    echo $sql="insert into tblchannel(channelname,description,channelamount) values ('$channelname','$desp','$channelamount')";
    $obj->query($sql);
    echo "<script>alert('saved successfully');window.location='channelview.php'</script>";
   
}
?>