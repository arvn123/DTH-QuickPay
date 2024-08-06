<?php
include_once("header.php");
require_once("../dboperation.php");
$obj=new dboperation();
?>
<div class="col-lg-12 stretch-card">
                <div class="card">
              
                  <div class="card-body">
                  <div class="form-group">
                    <form method="post" action="" name="f1">
                    <?php
                    $sql="select * from tbldistrict";
                     $res=$obj->query($sql);
                    ?>
                      <div class="form-group">
                        <label for="exampleInputName1">District Name</label>
                    <select class ="form-control" name="seldistrictid" id="seldistrictid" onchange="this.form.submit()" style="width: 344px;">
                    <option>----select----</option>
                    <?php
                    while($display=mysqli_fetch_array($res))
                    {
                        ?>
                        <option value="<?php echo $display["districtid"]?>">
                        <?php echo $display["districtname"]?>
                    </option> 
                    <?php
                    }
                    ?>
                    </select>
                      </div>
                    </form>
                  </div>
                    <h4 class="card-title">Location view</h4>
                    <?php
                    if(isset($_POST["seldistrictid"]))
                    {
                        $district_id1=$_POST["seldistrictid"];
                        ?>
                    <script>
                    document.getElementByid("seldistrictid").value=<?php echo $district_id1;?>;
                    </script>
                    <a href="locationreg.php?district_id=<?php echo $district_id1?>" class="btn btn-outline-primary" style="margin-left:717px;">Add location</a>
                    <?php
                    }
                    ?>
                    <!--<p class="card-description"> Add class <code>.table-{color}</code>-->
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> SI.NO </th>
                          <th>Location Name </th>
                          <th colspan="2"> Action</th>
                        </tr>
                      </thead>
                      <?php
                      if(isset($_POST["seldistrictid"]))
                      {
                        $district_id=$_POST["seldistrictid"];
                        $sql="select * from tbllocation where districtid='$district_id'";
                        $res=$obj->query($sql);
                        $s=1;
                        ?>
                      <tbody>
                      <?php
                                    while($display=mysqli_fetch_array($res))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $s++ ?></td>
                                        <td><?php echo $display["locationname"] ; ?></td>
                                      <td>
                                        <a href="locationedit.php?locationid=<?php echo $display["locationid"]; ?>">
                                      <button type="button" class="btn  btn-icon btn-primary"><i class="feather icon-edit">Edit</i></button>
                                    </a>
                                    <a href="locationdelete.php?locationid=<?php echo $display["locationid"]; ?>"onclick="return confirm('are you sure want to delete ???')">
                                    <button type="button" class="btn  btn-icon btn-danger"><i class="feather icon-delete">Delete</i></button>
                                    </a>
                                    </td>
                                    </tr>
                                   <?php
                                    }
            
                                }
                                   ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <?php
include_once("footer.php");
?>
