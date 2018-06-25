<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - USer</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>user_assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>user_assets/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php echo base_url(); ?>user_assets/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>user_assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>user_assets/css/pages/dashboard.css" rel="stylesheet">


 <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?=base_url()?>user/  ">Code Studio</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
         
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> User <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Update Profile</a></li>
              <li><a href="javascript:;">Ganti Password</a></li>
              <li><a href="javascript:;">Logout</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li id="home"><a href="<?=base_url()?>user/"><i class="icon-home"></i><span>Home</span> </a> </li>
        <li id="modul"><a href="<?=base_url();?>user/modul"><i class="icon-book"></i><span>Modul Belajar</span> </a> </li>
        <li id="rank"><a href="<?=base_url();?>user/rank"><i class="icon-trophy"></i><span>Ranking</span> </a></li>
        <li id="profil"><a href="<?=base_url();?>user/profil"><i class="icon-star"></i><span>Experience</span> </a> </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>

<!-- /main -->


 <?php echo $content; ?>





<div class="footer" style="position: fixed; Width: 100%; bottom: 0;">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
         <div style="text-align: center;">
            Code Studio <br/>
            ©2018 All Rights Reserved. Privacy and Terms
          </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo base_url(); ?>user_assets/js/jquery-1.7.2.min.js"></script> 
<script src="<?php echo base_url(); ?>user_assets/js/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>user_assets/js/chart.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>user_assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/base.js"></script> 

<script type="text/javascript">
$(function() {
  $('li[id=<?= $nav?>]').addClass('active');
})
</script>
</body>
</html>
