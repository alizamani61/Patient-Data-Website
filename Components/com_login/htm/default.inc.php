<div style="background-color: #eee;height: 800px;">
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form  role="form" action="<?= $_SERVER["PHP_SELF"] ?>?com_dashboard=1" method='POST'> 
                    <h1>Login Form</h1>
                    <p>Demo User: admin</p>
                    <p>Demo Pass: 12345</p>
                    <div>
                        <input name='user'  type='text' value="<?= $form["user"] ?>" class="form-control" placeholder="<?= USERNAME ?>" required autofocus>
                        <font face='verdana' color='red'><?= $error["user"] ?></font>
                    </div>
                    <div>
                        <input name='pass' type="password" class="form-control" placeholder="<?= PASSWORD ?>" required>
                        <font face='verdana' color='red'><?php echo $error["pass"] ?></font>
                    </div>
                    <div>
                        <?php if (SECURITY_CODE): ?>
                            <input name='security_code' class='security_code form-control' placeholder="<?= SEC_CODE ?>" type='text' value='' autocomplete="off"/>
                            <font face='verdana' color='red'><?php echo $error["security_code"] ?></font>
                            <img src='securityimages.php' alt='' style="margin: 5px 30% 0px 30%;border: 1px solid #ccc;padding: 2px;"/>
                        <?php endif; ?>
                    </div>

                    <div>
                        <input  name='login' type='hidden' value='1'/>
                        <input  name='token' type='hidden' size="50" value="<?php echo $this->getToken() ?>"/>
                        <button class="btn btn-default submit" type="submit"><?= LOGIN ?></button>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="#" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><img src='images/obesity-logo-blue.png' /></i> Mother and child obesity center!</h1>
                            <p>©2016 All Rights Reserved. Mother and child Hospital</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>


    </div>
</div> 








<!--<div class="container login-container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= LOGIN ?></h3>
                </div>
                <div class="panel-body">
                    <form  role="form" action="<?= $_SERVER["PHP_SELF"] ?>" method='POST'> 
                        <fieldset>
                            <div class="form-group">
                                <input name='user'  type='text' value="<?= $form["user"] ?>" class="form-control" placeholder="<?= USERNAME ?>" required autofocus>
                                <font face='verdana' color='red'><?= $error["user"] ?></font>
                            </div>
                            <div class="form-group">
                            <input name='pass' type="password" class="form-control" placeholder="<?= PASSWORD ?>" required>
                            <font face='verdana' color='red'><?php echo $error["pass"] ?></font>
                            </div>
                            <div class="form-group">
<?php if (SECURITY_CODE): ?>
                                                    <input name='security_code' class='security_code form-control' placeholder="<?= SEC_CODE ?>" type='text' value='' autocomplete="off"/>
                                                    <font face='verdana' color='red'><?php echo $error["security_code"] ?></font>
                                                    <img src='securityimages.php' alt='' style="margin: 5px 30% 0px 30%;border: 1px solid #ccc;padding: 2px;"/>
<?php endif; ?>
                            </div>
                            <input  name='login' type='hidden' value='1'/>
                            <input  name='token' type='hidden' size="50" value="<?php echo $this->getToken() ?>"/>
                            <button class="btn btn-lg btn-primary btn-block" type="submit"><?= LOGIN ?></button>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>-->
