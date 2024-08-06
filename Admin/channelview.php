<?php
include_once("header.php");
require_once("../dboperation.php");
$obj=new dboperation();
?>
<div class="col-lg-10 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">channel view</h4>
                    <form method="post" action="" name="f1">
                    <?php
        include_once("../dboperation.php");
        $obj=new dboperation();
        $query="select * from tblchannel";
        $result=$obj->query($query);
        $s=1;
        ?>
        <table class="table table-bordered">
          
                      <thead>
                        <tr>
                          <th> SI.NO </th>
                          <th> Channel Name </th>
                          <th> Description </th>
                          <th> Channel Amount </th>
                          <th colspan="2"> Action</th>
                        </tr>
                      </thead>
                      <?php
while($display=mysqli_fetch_array($result))
{
?>
<tr>
    <td><?php echo $s++;?></td>
    <td><?php echo $display["channelname"];?></td>
    <td><?php echo $display["description"];?></td>
    <td><?php echo $display["channelamount"];?></td>
    <td>
    <a href="channeledit.php?channelid=<?php echo $display["channelid"]; ?>">
    <button type="button" class="btn  btn-icon btn-primary"><i class="feather icon-edit">Edit</i></button>
    </a>
    <a href="channeldelete.php?channelid=<?php echo $display["channelid"]; ?>"onclick="return confirm('are you sure want to delete ???')">
    <button type="button" class="btn  btn-icon btn-danger"><i class="feather icon-delete">Delete</i></button>
    </a>
</tr>
<?php   
}
?>              
                        
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