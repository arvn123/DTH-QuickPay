<?php
 include_once("header.php");
?>
<div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Get In Touch
                            </p>
                            <h1 class="display-5 mb-5">COMPLAINT REGISTRATION FORM</h1>
                            <form method="post" action="complaintregaction.php" name="f1">
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="number" name="smartcardno" placeholder="Smartcardnumber">
                                    <label for="name">Your Smartcardnumber</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                <input type="text" id="complaintdate" name="complaintdate" class="form-control" value="<?php echo date ('Y/m/d');?>"/>
                                    <label for="mail">Complaint Date</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a complaint here" id="complaint" name="complaint"
                                        style="height: 100px"></textarea>
                                    <label for="message">Type your complaint here</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                <textarea class="form-control" placeholder="leave your remark here" id="remark" name="remark"
                                style="height: 100px"></textarea>
                                    <label for="mail">remark</label>
                                </div>
                            </div>
    </td>
                            <div class="col-12 text-center">
                            <button type="SUBMIT" class="btn btn-warning btn-lg ms-2" name="SUBMIT">SUBMIT NOW</button>
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