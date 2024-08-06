<?php
include("header.php")
?>
<?php
 include_once("../dboperation.php ");
 $obj=new dboperation();
 $packageid= $_GET["packageid"];
$sql="select * from tblpackage where packageid=$packageid";
 $res = $obj->query($sql);
$display= mysqli_fetch_array($res); 
?>

<div class="col-lg-10 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Package</h4>
    <form method="post" action="packageeditaction.php">
                    <table class="table table-bordered">

                    </div>
          <!-- content-wrapper ends -->
<label>Package Name</label>
<input type="hidden" class="form-control"  name="package" value="<?php echo $display["packageid"]; ?>">
<input type="text" class="form-control" placeholder=" package Name " name="packagename"  value="<?php echo $display["packagename"]; ?>">  
<label>Package Description</label>      
<input type="text" class="form-control" placeholder=" Description" name="description"  value="<?php echo $display["packagedescription"]; ?>">  
<label>Package Duration</label>
<input type="text" class="form-control" placeholder="duration" name="duration"  value="<?php echo $display["packageduration"]; ?>"> 
<label>Package Amount</label>
<input type="text" class="form-control" placeholder="amount" name="amount"  value="<?php echo $display["packageamount"]; ?>">                                            
</div>
<button type="submit" name="UPDATE" class="btn btn-primary">UPDATE</button>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>                                   

                                    </form>
                                </div>
                            </div>



                        </div>                                                                
                 </div>
             </div>
         </div>
</div>
<?php
include("footer.php")
?>