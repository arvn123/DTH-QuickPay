<?php
include_once("header.php");
require_once("../dboperation.php");
$obj=new dboperation();
?>
<div class="col-lg-10 stretch-card">
                <div class="card">
                  <div class="card-body">
                   
                    <h3>class="card-title">Package view</h3>

                    <form method="post" action="" name="f1">
                    <?php
        include_once("../dboperation.php");
        $obj=new dboperation();
        $query="select * from tblpackage";
        $result=$obj->query($query);
        $s=1;
        ?>
       
       <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> SI.NO </th>
                          <th> Package Name </th>
                          <th> Description </th>
                          <th> Package Duration</th>
                          <th> Package Amount</th>
                          <th colspan="2"> Action</th>
                        </tr>
                      </thead>
                      <?php
while($display=mysqli_fetch_array($result))
{
?>
<tr>
    <td><?php echo $s++;?></td>
    <td><?php echo $display["packagename"];?></td>
    <td><?php echo $display["packagedescription"];?></td>
    <td><?php echo $display["packageduration"];?></td>
    <td><?php echo $display["packageamount"];?></td>
    <td>
    <a href="packageedit.php?packageid=<?php echo $display["packageid"]; ?>">
    <button type="button" class="btn  btn-icon btn-primary"><i class="feather icon-edit">Edit</i></button>
    </a>
    <a href="packagedelete.php?packageid=<?php echo $display["packageid"]; ?>"onclick="return confirm('are you sure want to delete ???')">
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