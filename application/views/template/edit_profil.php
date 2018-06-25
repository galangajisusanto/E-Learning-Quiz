<div class="x_panel">
  <div class="x_title">
    <h2>Edit Profil</h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>
    </ul>
    <div class="clearfix"></div> 
  </div>

  <div class="x_content">
    <br>
    <form class="form-horizontal form-label-left" action="" enctype="multipart/form-data" method="post" >

      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" >Username
        </label>
        <div class="col-md-5 col-sm-6 col-xs-12">
          <input type="text" required="required" class="form-control" name="username" value="<?=$username?>">
        </div>
      </div>  
      
      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" >Fullname
        </label>
        <div class="col-md-5 col-sm-6 col-xs-12">
          <input type="text" required="required" class="form-control" name="fullname" value="<?=$fullname ?>">
        </div>
      </div> 

      <div class="form-group">
         <label class="control-label col-md-2 col-sm-2 col-xs-12 " >Tanggal Lahir
        </label>
        <div class="col-md-4 col-sm-6 col-xs-12 input-group date" id='myDatepicker'>
            <input type='text' class="form-control" />
            <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
     </div>

       <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" >Email
        </label>
        <div class="col-md-5 col-sm-6 col-xs-12">
          <input type="email" required="required" class="form-control col-md-7 col-xs-12" name="email" value="<?=$email?>">
        </div>
      </div>  

       <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" >Password
        </label>
        <div class="col-md-5 col-sm-6 col-xs-12">
          <input type="Password" required="required" class="form-control col-md-7 col-xs-12" name="password">
          <em class="help-text">*Masukan Password anda untuk konformasi perubahan</em>
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
