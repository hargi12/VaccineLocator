<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Healthcare information for all.">
    <meta name="keywords" content="Health Information Management System">
    <meta name="author" content="HykarTech Ltd">
    <title>Vaccine Locator Login Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet"/>

    <!-- BEGIN: Vendor CSS-->
    <?= link_tag('bootstrap/vendors/css/vendors.min.css');?>
    <?= link_tag('bootstrap/vendors/css/pickers/daterange/daterangepicker.css');?>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <?= link_tag('bootstrap/css/bootstrap.min.css');?>
    <?= link_tag('bootstrap/css/bootstrap-extended.min.css');?>
    <?= link_tag('bootstrap/css/components.min.css');?>
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <?= link_tag('bootstrap/css/core/menu/menu-types/vertical-menu.min.css');?>
    <?= link_tag('bootstrap/css/plugins/pickers/daterange/daterange.min.css');?>
    <?= link_tag('bootstrap/css/plugins/forms/wizard.min.css');?>
    
    <!-- END: Page CSS-->
    <!-- BEGIN: Toastr CSS-->
    <?= link_tag('bootstrap/css/toastr.min.css');?>
    <!-- END: Toastr CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="vaccineLocator" src="<?php echo base_url('bootstrap/images/logo/logo-dark.png');?>" height="50px" width="200px">
                
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="dropdown nav-item mega-dropdown d-none d-lg-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Vaccine Locator</a>
                
              </li>
              <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                  <input class="input" type="text" placeholder="Search through Health Facility Database..." tabindex="0" data-search="template-list">
                  <div class="search-input-close"><i class="ft-x"></i></div>
                  <ul class="search-list"></ul>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
             
            
              
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">Hello <?php echo $this->session->userdata('username');?></span><span class="avatar avatar-online"><img src="<?php echo base_url('bootstrap/images/portrait/small/avatar-s-19.png')?>" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo site_url('login/logout');?>"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->

     <!-- BEGIN: Main Menu-->

     <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         
         </li>
          
          <li class=" nav-item"><a href="<?=base_url('dashboard/hospitals')?>"><i class="la la-stethoscope"></i><span class="menu-title">Health Facilities</span></a>
            <ul class="menu-content">
              
              <li class="active"><a class="menu-item" href="<?=base_url('dashboard/index')?>"><i></i><span>Add Health Facility</span></a>
              </li>
              <li><a class="menu-item" href="<?=base_url('dashboard/hospitals')?>"><i></i><span>All Health Facilities</span></a>
              </li>
              
            </ul>
          </li>
          
          </li>
         
    
        </ul>
      </div>
    </div>

    <!-- END: Main Menu-->