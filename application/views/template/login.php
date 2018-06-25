<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	 <!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>user_assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>user_assets/css/custom.min.css">
	
	   <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=base_url();?>user_assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url();?>user_assets/css/custom.min.css" rel="stylesheet">
</head>
<body class="login">
  
  <div class="login_wrapper">

    <?php 
    if($this->session->flashdata('alert')){
      echo '<div class="alert alert-warning alert-message">';
      echo $this->session->flashdata('alert');
      echo '</div>';
    } 
    if($this->session->flashdata('success')){
      echo '<div class="alert alert-success alert-message">';
      echo $this->session->flashdata('success');
      echo '</div>';
    } 
    ?>
      <section class="login_content">
        <form method="post" action="" enctype="multipart/form-data">
          <h1>Login Form</h1>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="" name="username"/>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="" name="password" />
          </div>
          <div class="form-group">
            <button class="btn btn-default submit" name="login" value="Login">Log in</button>
            <a class="reset_pass" href="<?=base_url();?>lost_user">Lost your password?</a>
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            <p class="change_link">New to site?
              <a href="<?=base_url();?>register_user" class="to_register"> Create Account </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
              <h1>Code Studio</h1>
              <p>©2018 All Rights Reserved. Privacy and Terms</p>
            </div>
          </div>
        </form>
      </section>
    </div>
        <!-- jQuery -->
    <script src=" <?php echo base_url(); ?>user_assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>user_assets/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>user_assets/js/custom.min.js"></script>

    <script type="text/javascript">
      $('.alert-message').alert().delay(3000).slideUp('slow');
    </script> 

</body>
</html>