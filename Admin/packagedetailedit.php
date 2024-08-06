<?php
include_once("header.php");
require_once("../dboperation.php");
$obj = new dboperation();

if (isset($_GET['channelid']))
 {
    $channelid= $_GET['channelid'];
    $sql = "select * from tblpackagedetails where channelid='$channelid'";
    $res = $obj->query($sql);
    $display = mysqli_fetch_array($res);
    $sql1="select * from tblchannel";
    $res1=$obj->query($sql1);
}
?>

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Package Details</h4>
            <form method="post" action="packagedetaileditaction.php" name="f1">
                <input type="hidden" name="packageid" value="<?php echo $channelid; ?>">
                <div class="form-group">
                    <label for="channelname">Channel Name</label>
                    <select class="form-control" name="selchannelid" id="selchannelid" style="width: 844px;">
                    <?php
                    while($display1=mysqli_fetch_array($res1))
                    {
                        ?>
                    
                    <option value="<?php echo $display1["channelid"];?>"<?php echo ($display["channelid"]==$display1["channelid"])?"selected=selected":"";?>><?php echo $display1["channelname"];?></option>
                    <?php
                    }
                    ?>
</select>
                </div>
                <input type="hidden" class="form-control"  name="packagedetailsid" value="<?php echo $display["packagedetailsid"]; ?>">
                <button type="submit" name="submit" class="btn btn-primary">Update Details</button>
            </form>
        </div>
    </div>
</div>
</div>
<!-- content-wrapper ends -->
<?php
include_once("footer.php");
?>
