<?php
include("header.php")
?>

<?php
 include_once("../dboperation.php ");
 $obj=new dboperation();
 $locationid= $_GET["locationid"];
$sql="select * from tbllocation where locationid=$locationid";
 $res = $obj->query($sql);
$display= mysqli_fetch_array($res); 
?>

<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">location</h4>
    <form method="post" action="locationeditaction.php">
                    <table class="table table-bordered">

                    </div>
          <!-- content-wrapper ends -->
<label>Location Name</label>
<input type="hidden" class="form-control"  name="location" value="<?php echo $display["locationid"]; ?>">
<input type="text" class="form-control" placeholder=" Location Name " name="locationname"  value="<?php echo $display["locationname"]; ?>">                                                  
</div>
<button type="submit" name="submit" class="btn btn-primary">submit</button>
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