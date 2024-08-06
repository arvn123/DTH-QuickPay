<?php
include("header.php")
?>

<?php
 include_once("../dboperation.php ");
 $obj=new dboperation();
 $channelid= $_GET["channelid"];
$sql="select * from tblchannel where channelid=$channelid";
 $res = $obj->query($sql);
$display= mysqli_fetch_array($res); 
?>

<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">channel</h4>
    <form method="post" action="channeleditaction.php">
                    <table class="table table-bordered">

                    </div>
          <!-- content-wrapper ends -->
<label>ChannelName</label>
<input type="hidden" class="form-control"  name="channel" value="<?php echo $display["channelid"]; ?>">
<input type="text" class="form-control" placeholder=" Channel Name " name="channelname"  value="<?php echo $display["channelname"]; ?>">  
<label>Channel Description</label>      
<input type="text" class="form-control" placeholder=" Description" name="description"  value="<?php echo $display["description"]; ?>">  
<label>ChannelAmount</label>
<input type="text" class="form-control" placeholder=" Channel Amout " name="channelamount"  value="<?php echo $display["channelamount"]; ?>">                                              
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