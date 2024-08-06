<?php
include_once("../dboperation.php");
$obj = new dboperation();

if (isset($_POST["submit"])) {
    $districtid = $_POST["districtid"];
    $locationname = $_POST["locationname"];

    $query1 = "select * from tbllocation where locationname='$locationname'";
    $result = $obj->query($query1);
    $row = mysqli_num_rows($result);

    if ($row == 0) 
    {
        $query = "insert into tbllocation(districtid, locationname) values($districtid, '$locationname')";
        $result = $obj->query($query);

        if ($result == 1) 
        {
            echo "<script>alert('Location Added Successfully');window.location.href='locationview.php'</script>";
        } 
        else
         {
            echo "<script>alert('Location registration failed');window.location.href='locationview.php'</script>";
        }
    } else
     {
        echo "<script>alert('Location is Already Registered');</script>";
    }
}
?>
