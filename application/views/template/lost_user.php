<!DOCTYPE html>
<html>
<head>
	<title>Lost Password</title>
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>user_assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Theme Style -->
    <link href="<?=base_url();?>user_assets/css/custom.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
<style type="text/css">
	.form{
		margin-top: 10%;
	}
	.header{
		font-size: 40px;
		text-align: center;
	}
	.container{
		padding-top: 5%;
	}
	.form_control{
		padding: 20px 10px;
		font-size: 20px;
	}
	.btn{
		padding: 5px 20px;
		font-size: 16px;
		border-radius: 0px;
	}
</style>
</head>

<body class="login">
	<div class="container">
	<center>
		<span class="header">Code Studio</span>
	</center>
	</div>
	<div class="col-md-6 col-sm-12 col-md-offset-3">
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
		<form class="form" action="" method="post">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Reset Password</h4>
				</div>
				<div class="panel-body">
					<div class="form-group">
					<label>Masukan E-mail Anda</label>
					<input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
					</div>
					<div class="form-group" style="text-align: right;">
					<button type="sumbit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
					<a href="<?=base_url();?>login" class="btn btn-default">Log in..</a>	
					</div>		
				</div>
			</div>
		</form>
	</div>			
	<!-- Jquery -->
	<script type="text/javascript" src="<?=base_url()?>user_assets/js/jquery.min.js"></script>
	<!-- bOOTSTRAP -->
	<script type="text/javascript" src="<?=base_url()?>user_assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
      $('.alert-message').alert().delay(3000).slideUp('slow');
	</script>
</body>
</html>