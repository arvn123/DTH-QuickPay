<?php
include_once("header.php");
require_once("../dboperation.php");
$obj = new dboperation();
?>

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <form method="post" action="" name="f1">
                    <?php
                    $sql = "SELECT * FROM tblpackage";
                    $res = $obj->query($sql);
                    ?>
                    <div class="form-group">
                        <label for="exampleInputName1">Package Name</label>
                        <select class="form-control" name="selpackageid" id="selpackageid" onchange="this.form.submit()" style="width: 344px;">
                            <option>----select----</option>
                            <?php
                            while ($display = mysqli_fetch_array($res)) {
                                ?>
                                <option value="<?php echo $display["packageid"] ?>" <?php if (isset($_POST["selpackageid"]) && $_POST["selpackageid"] == $display["packageid"]) echo "selected"; ?>>
                                    <?php echo $display["packagename"] ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </form>
            </div>
            <h4 class="card-title">Package Details View</h4>
            <?php
            if (isset($_POST["selpackageid"])) {
                $package_id = $_POST["selpackageid"];
                $sql = "SELECT * FROM tblpackage WHERE packageid = '$package_id'";
                $res = $obj->query($sql);
                $display = mysqli_fetch_array($res);
                ?>
                <a href="packagedetailsreg.php?packageid=<?php echo $package_id ?>&packagename=<?php echo $display["packagename"] ?>" class="btn btn-outline-primary" style="margin-left:717px;">Add channel</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SI.NO</th>
                            <th>Channel Name</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "SELECT * FROM tblpackagedetails p INNER JOIN tblpackage k ON p.packageid=k.packageid INNER JOIN tblchannel c ON c.channelid=p.channelid WHERE p.packageid='$package_id'";
                    $res = $obj->query($sql);
                    $s = 1;
                    ?>
                    <tbody>
                        <?php
                        while ($display = mysqli_fetch_array($res)) {
                            ?>
                            <tr>
                                <td><?php echo $s++ ?></td>
                                <td><?php echo $display["channelname"]; ?></td>
                                <td>
                                    <a href="packagedetailedit.php?channelid=<?php echo $display["channelid"]; ?>">
                                        <button type="button" class="btn  btn-icon btn-primary"><i class="feather icon-edit"></i>EDIT</button>
                                    </a>
                                    <a href="packagedetaildelete.php?packagedetailsid=<?php echo $display["packagedetailsid"]; ?>"onclick="return confirm('are you sure want to delete ???')">
                                        <button type="button" class="btn  btn-icon btn-danger"><i class="feather icon-delete"></i>DELETE</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            <?php
            }
            ?>
        </div>
    </div>
</div>
</div>
<!-- content-wrapper ends -->
<?php
include_once("footer.php");
?>
