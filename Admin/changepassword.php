<?php
include("header.php");
?>
<br><br>
<br><br><br><br><br>
<div class="expert_doctors_area">
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-lg-6">
            <div class="section_title mb-55 text-center">
                <h3>Your Details</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
    </div>
    <div class="row ">
    <form name="f1" method="post" action="changepasswordaction.php">
                    <div class="row">
                        <div class="col-xl-12">
                        <div class="col-xl-9">
                       <b>  Username:<br><b>   <input type="text"  name="txtusername" placeholder=" Your username">
                        </div>
                        <div class="col-xl-3">
                        Password:<br>  <input type="text" name="txtpassword" placeholder="current password">
                        </div>
                        <div class="col-xl-6">
                        New Password:<br>   <input type="text"  name="txtnewpassword" placeholder="New password">
                        </div>

                        <div class="col-xl-6">
                       Confirm  Password:<br>   <input type="text" name="txtconfirmpwd" placeholder="Confirm Password">
                        </div>
<br>
<br>
                        <div class="col-xl-6">
                            <input type="submit"  text="changepassword" value="changepassword">
                        </div>
</form>
                  
                    <div class="social_links">
                        
                    </div>
                </div>
            </div>
        </div>
        <div>
                    </div>
       
							  
    </div>
</div>
</div>
<?php
include("footer.php");
?>

