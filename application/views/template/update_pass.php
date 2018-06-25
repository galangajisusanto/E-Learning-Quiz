<div class="x_panel">
  <div class="x_title">
    <h2>Update Password</h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>
    </ul>
    <div class="clearfix"></div> 
  </div>

  <div class="x_content">
    <br>
    <div class="alert-warning" style="padding:10px">
    	<h3>Peringatan</h3>
    	<p>Setelah password diperbarui anda diwajibkan login ulang</p>
    </div>

    <div class="clearfix"></div> 
    <br/>


    <form class="form-horizontal form-label-left" action="" enctype="multipart/form-data" method="post" >
 	 
 	 <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" >Password Baru
        </label>
        <div class="col-md-5 col-sm-6 col-xs-12">
          <input type="Password" required="required" class="form-control col-md-7 col-xs-12" name="password1">
        </div>

      </div> 
       <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" >Password Lama
        </label>
        <div class="col-md-5 col-sm-6 col-xs-12">
          <input type="Password" required="required" class="form-control col-md-7 col-xs-12" name="password2">
        </div>
      </div>  
    
      <div class="ln_solid"></div>

      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
          <button class="btn btn-primary" type="submit" class="btn btn-success" name="submit" value="Submit">Simpan Perubahan</button>
          <button class="btn btn-danger" type="reset" onclick="window.history.go(-1)">Kembali</button>
        </div>
      </div>
    </form>
  </div>
</div>
