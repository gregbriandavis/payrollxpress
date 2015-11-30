<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!doctype html>
<html class="no-js" lang="<?php echo LANGUAGE?>">
  <head>
  <?php Loader::element('header_required'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Payroll Xpress</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic,900' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?=$this->getThemePath()?>/favicon.4ac495e7.ico">
    <link rel="apple-touch-icon" href="<?=$this->getThemePath()?>/apple-touch-icon.163221d3.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$this->getThemePath()?>/apple-touch-icon-72x72.6fe82cec.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$this->getThemePath()?>/apple-touch-icon-114x114.4ac495e7.png">
    <link rel="stylesheet" href="<?=$this->getThemePath()?>/styles/screen.6697d731.css">
    <link rel="stylesheet" href="<?=$this->getThemePath()?>/styles/vendor.9376fa06.css">
    <script src="<?=$this->getThemePath()?>/scripts/vendor/modernizr.fbe20327.js"></script>
      <?php
      $c = Page::getCurrentPage();
      $cp = new Permissions($c);
        if (is_object($cp) && ($cp->canWrite() || $cp->canAddSubContent() || $cp->canAdminPage())) {
          ?>
          <style type="text/css">
            nav{position:relative}
            .navbar-fixed-top
              {
                margin-top: 49px;
                z-index: 998;
              }
          </style>
        <?php
        }
      ?>
  </head>
  <body id="top">
    <!--[if lt IE 10]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
    <header>
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="<?=$this->getThemePath()?>/images/logo.bd6d3060.png" alt="Payroll Xpress"/></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo DIR_REL?>/about">About</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <span class="caret"></span></a>
                <ul class="dropdown-menu inverse-dropdown" role="menu">
                  <li><a href="<?php echo DIR_REL?>/services/payroll-services">Payroll</a></li>
                  <li><a href="<?php echo DIR_REL?>/services/bookkeeping">Bookkeeping</a></li>
                  <li><a href="<?php echo DIR_REL?>/services/income-tax">Income Tax</a></li>
                  <li><a href="<?php echo DIR_REL?>/services/human-resources">Human Resources</a></li>
                  <li><a href="<?php echo DIR_REL?>/services/time-attendance">Time &amp; Attendance</a></li>
                  <li><a href="<?php echo DIR_REL?>/services/group-benefits">Group Benefits</a></li>
                </ul>
              </li>
              <li><a href="<?php echo DIR_REL?>/XERO">Xero</a></li>
              <li><a href="<?php echo DIR_REL?>/resources">Resources</a></li>
              <li><a href="<?php echo DIR_REL?>#contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?=$this->url('/login')?>"><?=t('Client Login')?></a></li>
            </ul>
          </div>
          <a id="nav-toggle" style="display: none;" class="nav_slide_button hidden-xs hidden-sm hidden-lg hidden-md" href="#"><span></span></a>
        </div>
      </div>
    </header>
