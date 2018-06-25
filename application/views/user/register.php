<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
</head>
 <!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>user_assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>user_assets/css/custom.min.css">
	
	   <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
    
    <!-- Animate.css -->
    <link href="<?=base_url();?>user_assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url();?>user_assets/css/custom.min.css" rel="stylesheet">
<body class="login">

	<div class="login_wrapper">
		<?php 
           if($this->session->flashdata('alert'))
           {
            echo '<div class="alert alert-danger alert-message">';
            echo $this->session->flashdata('alert');
            echo '</div';
           }
            ?>
	 <section class="login_content">
            <form method="post" action="" enctype="multipart/form-data" style="text-align: center;">
              <h1>Create Account</h1>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" required="" name="username_baru" value="<?=$username_baru?>" />
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required="" name="email_baru" value="<?=$email_baru?>" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="" name="password_baru" value="<?=$password_baru?>" />
              </div>
              <div class="form-group">
                <button class="btn btn-default submit" name="submit" value="Submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="<?=base_url();?>login" class="to_register"> Log in </a>
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