<?php
 include_once("header.php");
 include_once("../dboperation.php");
 $obj = new dboperation();
 $rechargeid = $_GET["rechargeid"];
 $amount=$_GET["amount"];
 //echo $sql="SELECT * FROM  tblpayment p INNER JOIN tblpackage c  on p.amount=c.packageamount WHERE p.rechargeid='$rechargeid'";
 //$res = $obj->query($sql);
 //$display=mysqli_fetch_array($sql);
 //$sql1="select * from tblpayement where rechargeid='$rechargeid'";
// $res1=$obj->query($sql1);
 //$display1=mysqli_fetch_array($sql1);
?>
<div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Get In Touch
                            </p>

                            <h1 class="display-5 mb-5">PAYEMENT</h1>
                            <form method="post" action="payementaction.php" name="f1">
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="fromaccount" name="fromaccount"placeholder="From Account">
                                    <label for="account">FROM ACCOUNT</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="toaccount" name="toaccount" placeholder="To Account">
                                    <label for="account">TO ACCOUNT</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                <label class="form label">Amount</label><br><br>
                          <input type="amount" id="amount"name="amount" value="<?php echo $amount;?>"/>
                          <input type="rechargeid" hidden id="rechargeid"name="rechargeid" value="<?php echo $rechargeid;?>"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                <input type="text" id="paydate" name="paydate" class="form-control" value="<?php echo date ('Y/m/d');?>"/>
                                    <label for="payement">PAYEMENT DATE</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                <input type="number" class="form-control" id="status" name="CVV" >
                                      
                                    <label for="status">CVV</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                <input type="date" class="form-control" id="expirydate" name="expirydate" >
                                 <label for="status">EXPIRY DATE</label>
                                </div>
                            </div>
                            
                            <div class="col-12 text-center">
                              
                            <button type="proceed" class="btn btn-warning btn-lg ms-2" name="PROCEED">PROCEED</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
 include_once("footer.php");
?>