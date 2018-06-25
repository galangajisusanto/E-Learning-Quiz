<!-- page content -->
<div class="row top_tiles">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <!-- Judul -->
      <div class="x_title">
         <div class="page-title">
          <div class="title_left">
            <h3>Multiple Choise</h3>
          </div>
        </div>
      </div>
      <!-- form input -->
      <div class="x_content">
        <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Id</label>
          <div class="col-md-4 col-sm-4 col-xs-12">
          <input name="id" type="text" class="form-control" placeholder="Masukan Id " required="" value="<?php echo(isset($frm->id)?$frm->id:'') ?>">
          <input name="lid" type="text" hidden="hidden" value="<?php echo(isset($frm->id)?$frm->id:'') ?>">
          </div>
          <label class="control-label col-md-1 col-sm-1 col-xs-12">Type</label>
          <div class="col-md-5 col-sm-5 col-xs-12">
          <select name="type" class="form-control" disabled="disabled">
            <option value="22">Multiple Choice</option>
          </select>
          </div>
          <br><br>
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Title</label>
          <div class="col-md-10 col-sm-10 col-xs-12">
          <input name="title" type="text" class="form-control" placeholder="Masukan Title" required=""  value="<?php echo(isset($frm->title)?$frm->title:'') ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Pertanyaan</label>
          <div class="col-md-10 col-sm-10 col-xs-12">
            <textarea name="quest" class="resizable_textarea form-control" placeholder="Masukan pertanyaan" required=""><?php echo(isset($frm->quest)?$frm->quest:'') ?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Jawaban</label>
          <div class="col-md-10 col-sm-10 col-xs-12">
            <table width="100%" class="form-group" border="0">
              <tr>
                <td height="40" width="5%" align="center"><input type="checkbox" name="opsia" value="1"></td>
                <td width="95%"><input type="text" name="isia" style="width: 100%;" placeholder="Masukan Pilihan Jawaban 1" required="" value="<?= (isset($opsi->a)?$opsi->a:'') ?>"></td>
              </tr>
              <tr>
                <td height="40" width="5%" align="center"><input type="checkbox" name="opsib" value="1"></td>
                <td width="95%"><input type="text" name="isib" style="width: 100%;" placeholder="Masukan Pilihan Jawaban 2" required="" value="<?= (isset($opsi->b)?$opsi->b:'') ?>"></td>
              </tr>
              <tr>
                <td height="40" width="5%" align="center"><input type="checkbox" name="opsic" value="1"></td>
                <td width="95%"><input type="text" name="isic" style="width: 100%;" placeholder="Masukan Pilihan Jawaban 3" required="" value="<?= (isset($opsi->c)?$opsi->c:'') ?>"></td>
              </tr>
              <tr>
                <td height="40" width="5%" align="center"><input type="checkbox" name="opsid" value="1"></td>
                <td width="95%"><input type="text" name="isid" style="width: 100%;" placeholder="Masukan Pilihan Jawaban 4" required="" value="<?= (isset($opsi->d)?$opsi->d:'') ?>"></td>
              </tr>
            </table>
          </div>
        </div>

        <div class="ln_solid"></div>
        <div class="form-group">
           <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
             <button name="submit" value="submit" type="submit" class="btn btn-success">Submit</button>
           </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(function() {
<?php if (isset($frm)) : ?>
  <?php 
  $ky = $frm->ky;
  for ($i = 0; $i < strlen($ky); $i++) {
    echo "\t$('input[name=opsi$ky[$i]]').attr('checked','checked'); \n";
  }
  endif;?>
})
</script>
<!-- /page content -->