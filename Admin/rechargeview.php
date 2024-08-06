<?php
include_once("header.php");
require_once("../dboperation.php");
$obj=new dboperation();
?>
<div class="col-lg-50 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Paid Customer View</h4>
                    <form method="post" action="" name="f1">
                    <?php
        include_once("../dboperation.php");
        $obj=new dboperation();
      echo  $query="SELECT * FROM  customerrecharge c INNER JOIN tblpackage p on p.packageid=c.packageid 
        INNER JOIN tblpayment py on c.rechargeid=py.rechargeid where c.packagestatus='requested'" ;
        $result=$obj->query($query);
        $s=1;
        ?>
        <table class="table table-bordered">
          
                      <thead>
                      <tr>
                          <th> SI.NO </th>
                          <th> Smartcard Number </th>
                          <th>Package</th>
                          <th>Recharge Date</th>
                          <th>Package Due Date</th>
                          <th>Status</th> 
                        </tr>
                      </thead>
                      <?php
while($display=mysqli_fetch_array($result))
{
?>
<tr>
    <td><?php echo $s++;?></td>
    <td><?php echo $display["smartcardno"];?></td>
    <td><?php echo $display["packagename"];?></td>
    <td><?php echo $display["rechargedate"];?></td>
    <td><?php echo $display["packageduedate"];?></td> 
    <td>
    <a href="rechargeviewmore.php?rechargeidid=<?php echo $display["smartcardno"]; ?>">
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