
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>admin_assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>admin_assets/css/custom.min.css" rel="stylesheet">
       <!-- Data Table -->
    <link href="<?php echo base_url(); ?>admin_assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>admin_assets/css/responsive.bootstrap.min.css" rel="stylesheet">
    <!-- Date time picker -->
    <link href="<?php echo base_url(); ?>admin_assets/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Icheck -->
    <link href="<?php echo base_url(); ?>admin_assets/css/flat.css" rel="stylesheet">
     <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />

    <!-- jQuery -->
    <script src=" <?php echo base_url(); ?>user_assets/js/jquery.min.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       
          <?php echo $nav;?>

        <!-- page content -->
        <div class="right_col" role="main">

           <?php echo $content; ?>
      
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div style="text-align: center;">
            Code Studio <br/>
            ©2018 All Rights Reserved. Privacy and Terms
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>admin_assets/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>admin_assets/js/icheck.min.js"></script>
    <!-- Data Tables -->
    <script src="<?php echo base_url(); ?>admin_assets/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/js/dataTables.responsive.min.js"></script>
    <!-- Date time picker -->
    <script src="<?php echo base_url(); ?>admin_assets/js/bootstrap-datetimepicker.min.js"></script>
   
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>admin_assets/js/custom.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        $('#datatable').DataTable();
      });
      $('.alert-message').alert().delay(3000).slideUp('slow');
      $('#myDatepicker').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    </script> 
  </body>
</html>