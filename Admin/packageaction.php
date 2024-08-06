<?php
include_once("../dboperation.php");
$obj=new dboperation();
if(isset($_POST["submit"]))
{
$packagename=$_POST["packagename"];
$desp=$_POST["description"];
$packageduration=$_POST["duration"];
$packageamount=$_POST["amount"];
}
echo $query1="select * from tblpackage where packagename='$packagename'";

$result=$obj->query($query1);
$row=mysqli_num_rows($result);
if($row==1)
{
    echo "<script>alert('already exists');windows.location='packageview.php'</script>";
}
else
{
    echo $sql="insert into tblpackage(packagename,packagedescription,packageduration,packageamount)values ('$packagename','$desp','$packageduration','$packageamount')";
    $obj->query($sql);
    echo "<script>alert('saved successfully');window.location='packageview.php'</script>";
}
?>