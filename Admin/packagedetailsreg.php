<?php
include_once("header.php");
require_once("../dboperation.php");
$obj = new dboperation();
?>

<div class="col-10 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Channel Registration</h4>
            <!--<p class="card-description"> Basic form elements </p>-->
            <form method="post" action="packagedetailsregaction.php" name="f1">
                <a href="packagedetailsview.php" style="margin-left:717px;">Package view</a>
                <div class="form-group">
                    <label for="exampleInputName1">Package Name</label>
                    <?php
                    if (isset($_GET["packageid"]) && isset($_GET["packagename"])) {
                        $package_id = $_GET["packageid"];
                        $package_name = urldecode($_GET["packagename"]);
                        ?>
                        <input type="text" class="form-control" value="<?php echo $package_name; ?>" readonly>
                        <input type="hidden" name="packageid" value="<?php echo $package_id; ?>">
                        <?php
                    }
                    ?>
                </div>
                <?php
                $sql = "SELECT * FROM tblchannel";
                $res = $obj->query($sql);
                ?>
                <div class="form-group">
                    <label for="exampleInputName1">Channel Name</label>
                    <select class="form-control" name="selchannelid" id="selchannelid" style="width: 844px;">
                        <option>----select----</option>
                        <?php
                        while ($display = mysqli_fetch_array($res)) {
                            ?>
                            <option value="<?php echo $display["channelid"]; ?>"><?php echo $display["channelname"]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>

<?php
include_once("footer.php");
?>
