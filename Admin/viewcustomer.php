<?php
include_once("header.php");
require_once("../dboperation.php");
$obj=new dboperation();
?>
<div class="col-lg-50 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Customer view</h4>
                    <form method="post" action="" name="f1">
                    <?php
        include_once("../dboperation.php");
        $obj=new dboperation();
        $query="select * from tblcustomer";
        $result=$obj->query($query);
        $s=1;
        ?>
        <table class="table table-bordered">
          
                      <thead>
                        <tr>
                          <th> SI.NO </th>
                          <th> Customer Name </th>
                          <th>Districtid </th>
                          <th>Locationid</th>
                          <th>Pincode</th>
                          <th>Email</th>
                          <th>AadharNumber</th>
                          <th>Phno</th>
                          <th>Smartcardno</th>
                          <th>RegDate</th>
                         
                          <th colspan="2"> Action</th>
                        </tr>
                      </thead>
                      <?php
while($display=mysqli_fetch_array($result))
{
?>
<tr>
    <td><?php echo $s++;?></td>
    <td><?php echo $display["customername"];?></td>
    <td><?php echo $display["districtid"];?></td>
    <td><?php echo $display["locationid"];?></td>
    <td><?php echo $display["pincode"];?></td>
    <td><?php echo $display["email"];?></td>
    <td><?php echo $display["aadharno"];?></td>
    <td><?php echo $display["phone"];?></td>
    <td><?php echo $display["smartcardno"];?></td>
    <td><?php echo $display["registrationdate"];?></td>
    <!-- <td><?php echo $display["renewaldate"];?></td> -->
    <td>
    <a href="confirmcustomer.php?customerid=<?php echo $display["loginid"]; ?>">
    <button type="button" class="btn  btn-icon btn-danger"><i class="feather icon-delete">CONFIRM</i></button>
    </a>
    <a href="customerdelete.php?customerid=<?php echo $display["customerid"]; ?>"onclick="return confirm('are you sure want to delete ???')">
    <button type="button" class="btn  btn-icon btn-danger"><i class="feather icon-delete">Delete</i></button>
    </a>
    <!-- <a href="confirmcustomer.php?customerid=<?php echo $display["loginid"]; ?>">
    <button type="button" class="btn  btn-icon btn-danger"><i class="feather icon-delete">CONFIRM</i></button>
    </a> -->
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