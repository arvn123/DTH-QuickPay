
<?php
include_once("header.php");
require_once("../dboperation.php");
$obj=new dboperation();
?>
<div class="col-lg-50 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Complaint Registered Customer View</h4>
                    <form method="post" action="" name="f1">
                    <?php
        include_once("../dboperation.php");
        $obj=new dboperation();
        $query="SELECT * FROM  tblcomplaint";
        $result=$obj->query($query);
        $s=1;
        ?>
        <table class="table table-bordered">
          
                      <thead>
                      <tr>
                          <th> SI.NO </th>
                          <th> Smartcard Number </th>
                          <th>Recharge Date</th>
                          <th>complaint</th>
                          <th>remark</th> 
                        </tr>
                      </thead>
                      <?php
while($display=mysqli_fetch_array($result))
{
?>
<tr>
    <td><?php echo $s++;?></td>
    <td><?php echo $display["smartcardno"];?></td>
    <td><?php echo $display["complaintdate"];?></td>
    <td><?php echo $display["complaint"];?></td> 
    <td><?php echo $display["remark"];?></td> 
 <td>
 <a href="compliantviewmore.php?complaintid=<?php echo $display["complaintid"]; ?>">
    <button type="button" class="btn  btn-icon btn-danger"><i class="feather icon-delete">View More</i></button>
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