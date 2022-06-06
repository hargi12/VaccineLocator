<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Healthcare information for all.">
    <meta name="keywords" content="Health Information Management System">
    <meta name="author" content="HykarTech Ltd">
    <title>Vaccine Locator Login Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&display=swap" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <?= link_tag('bootstrap/vendors/css/vendors.min.css');?>
    <?= link_tag('bootstrap/vendors/css/forms/icheck/icheck.css');?>
    <?= link_tag('bootstrap/vendors/css/forms/icheck/custom.css');?>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <?= link_tag('bootstrap/css/bootstrap.min.css');?>
    <?= link_tag('bootstrap/css/bootstrap-extended.min.css');?>
    <?= link_tag('bootstrap/css/colors.min.css');?>
    <?= link_tag('bootstrap/css/components.min.css');?>
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <?= link_tag('bootstrap/css/core/menu/menu-types/vertical-menu.min.css');?>
    <?= link_tag('bootstrap/css/core/colors/palette-gradient.min.css');?>
    <?= link_tag('bootstrap/css/pages/login-register.min.css');?>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <?= link_tag('bootstrap/css/style.css');?>
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="row flexbox-container">
  <div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
      <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
        <div class="card-header border-0">
          <div class="card-title text-center">
            <img src="<?php echo base_url('bootstrap/images/logo/logo-dark.png');?>" height="150px" width="150px" alt="VaccineLocator">
          </div>
          <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Vaccine Locator</span></h6>
        </div>
        <div class="card-content">
         
          <div class="card-body">
            <form class="form-horizontal" action="<?php echo site_url('login/auth');?>" method="POST" validate>
              <fieldset class="form-group position-relative has-icon-left">
                <input type="text" class="form-control" id="user-name" name="username" placeholder="Your Email Address" required>
                <div class="form-control-position">
                  <i class="la la-user"></i>
                </div>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <input type="password" class="form-control" id="user-password" name="password" placeholder="Enter Password" required>
                <div class="form-control-position">
                  <i class="la la-key"></i>
                </div>
              </fieldset>
              <div class="form-group row">
                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                  <fieldset>
                    <input type="checkbox" id="remember-me" class="chk-remember">
                    <label for="remember-me"> Remember Me</label>
                  </fieldset>
                </div>
                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html"
                    class="card-link">Forgot Password?</a></div>
              </div>
              <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
            </form>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url('bootstrap/vendors/js/vendors.min.js');?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url('bootstrap/vendors/js/forms/validation/jqBootstrapValidation.js');?>"></script>
    <script src="<?php echo base_url('bootstrap/vendors/js/forms/icheck/icheck.min.js');?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url('bootstrap/js/core/app-menu.min.js');?>"></script>
    <script src="<?php echo base_url('bootstrap/js/core/app.min.js');?>"></script>
    <!-- END: Theme JS-->

  </body>
  <!-- END: Body-->
</html>