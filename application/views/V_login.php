

<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>

        <title></title>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">

    </head>
    <body background="<?php echo base_url();?>assets/img/background.jpg" style="overflow:hidden">
        <div class="content overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <div class="block block-themed animated fadeIn">
                        <div class="block-header bg-primary">
                            <ul class="block-options">
                                
                            </ul>
                            <h3 class="block-title text-center" style="color:white"><br></h3>
                        </div>
                        <div class="block-content block-content-full block-content-narrow">

                            <center>
                            <h1 class="h3 font-w600 push-30-t push-5" style="color:white">Sistem Admin Rentalin</h4>
                            </center>
                            <br><br><br><br>
                            <p style="color:white" class="text-center">Welcome, please login.</p>

                            <form class="js-validation-login form-horizontal push-30-t push-50" action="<?php echo site_url("login/login_proses");?>" method="post">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="text" id="username" name="username">
                                            <label for="login-username" style="color:white">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="password" id="login-password" name="password">
                                            <label for="login-password" style="color:white">Password</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label class="css-input switch switch-sm switch-primary" style="color:white">
                                            <input type="checkbox" id="login-remember-me" name="login-remember-me" style="color:white"><span></span> Remember Me?
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <center><button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right" style="color:white"></i> Log in</button></center>
                                    </div>
                                </div>
                            </form>
                            <!-- END Login Form -->
                        </div>
                    </div>
                    <!-- END Login Block -->
                </div>
            </div>
        </div>
        <!-- END Login Content -->

        <!-- Login Footer -->
        <div class="push-10-t text-center animated fadeInUp">
            <small class="text-muted font-w600"><span class="js-year-copy"></span> </small>
        </div>
        <!-- END Login Footer -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    </body>
</html>