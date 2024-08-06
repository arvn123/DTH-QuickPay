<?php
session_start();
include_once("header.php");

?>
<br><br><br><br><br><br><br><br>
<div class="col-lg-50 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">My current plan</h4>
                    <form method="post" action="" name="f1">
                    <?php
        include_once("../dboperation.php");
        $obj=new dboperation();
$loginid = $_SESSION["loginid"];
$qry="select * from tblcustomer where loginid=$loginid";
$res=$obj->query($qry);
$r=mysqli_fetch_array($res);
$smartcardno= $r["smartcardno"];

        $query="SELECT * FROM  customerrecharge c INNER JOIN tblpackage p on p.packageid=c.packageid WHERE c.smartcardno ='$smartcardno'";
        $result=$obj->query($query);
        $s=1;
        ?>
        <table class="table table-bordered">
          
                      <thead>
                        <tr>
                          <th> SI.NO </th>
                          <th> Smartcard Number </th>
                          <th>Package</th>
                          <th>Package Amount</th>
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
    <td><?php echo $display["packageamount"];?></td>
    <td><?php echo $display["rechargedate"];?></td>
    <td><?php echo $display["packageduedate"];?></td> 
   
    <td>
    <?php 
    if($display["packagestatus"]=='requested')
    {
    ?> 
    <a href="payement.php?rechargeid=<?php echo $display["rechargeid"]; ?>&amount=<?php echo $display["packageamount"];?>">
    <button type="button" class="btn  btn-icon btn-danger"><i class="feather icon-delete">Payement</i></button>
    </a>

    <?php   
    }
    else
    {?>
      <?php echo $display["packagestatus"];?>
    <?php
    }
?>   

    </td>
  
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