<?php
include_once("header.php");
require_once("../dboperation.php");
$obj=new dboperation
?>
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Location Registration</h4>
                    <!--<p class="card-description"> Basic form elements </p>-->
                    <form method="post" action="locationregaction.php" name="f1">
                        <a href="locationview.php" class="form-control" style="margin-left:717px;">view locationview</a>
                    
                      <div class="form-group">
                        <label for="exampleInputName1">District Name</label>
                        <?php
                        $district_id=$_GET["district_id"];
                        $sql="select * from tbldistrict where districtid='$district_id'";
                        $res=$obj->query($sql);
                        $display=mysqli_fetch_array($res);
                        ?>
                        <input type="hidden" class="form-control"  name="districtid"  value="<?php echo $display["districtid"]?>">
                        <input type="text" class="form-control" id="districtname" name="districtname" value="<?php echo $display["districtname"]?>" readonly>
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputName1">Location Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="locationname" placeholder="location Name">
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends  -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- <script src="../../assets/vendors/js/vendor.bundle.base.js"></script> -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script> -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <!-- <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script> -->
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    End custom js for this page -->
  </body>
</html>
<?php
include_once("footer.php");
?>