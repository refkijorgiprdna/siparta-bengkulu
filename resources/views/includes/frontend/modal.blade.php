<div id="login-form" class="popup-login-register mfp-hide">
    <ul class="nav" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-menu" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Login</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-menu active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Register</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <h3 class="box-title mb-30">Sign in to your account</h3>
            <div class="th-login-form">
                <form action="mail.php" method="POST" class="login-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Username or email</label>
                            <input type="text" class="form-control" name="email" id="email" required="required">
                        </div>
                        <div class="form-group col-12">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pasword" id="pasword" required="required">
                        </div>

                        <div class="form-btn mb-20 col-12">
                            <button class="th-btn btn-fw th-radius2 ">Send Message</button>
                        </div>
                    </div>
                    <div id="forgot_url">
                        <a href="my-account.html">Forgot password?</a>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
        <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <h3 class="th-form-title mb-30">Sign in to your account</h3>
            <form action="mail.php" method="POST" class="login-form ajax-contact">
                <div class="row">
                    <div class="form-group col-12">
                        <label>Username*</label>
                        <input type="text" class="form-control" name="usename" id="usename" required="required">
                    </div>
                    <div class="form-group col-12">
                        <label>First name*</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" required="required">
                    </div>
                    <div class="form-group col-12">
                        <label>Last name*</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" required="required">
                    </div>
                    <div class="form-group col-12">
                        <label for="new_email">Your email*</label>
                        <input type="text" class="form-control" name="new_email" id="new_email" required="required">
                    </div>
                    <div class="form-group col-12">
                        <label for="new_email_confirm">Confirm email*</label>
                        <input type="text" class="form-control" name="new_email_confirm" id="new_email_confirm" required="required">
                    </div>
                    <div class="statement">
                        <span class="register-notes">A password will be emailed to you.</span>
                    </div>

                    <div class="form-btn mt-20 col-12">
                        <button class="th-btn btn-fw th-radius2 ">Sign up</button>
                    </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </form>
        </div>
    </div>
</div>
