<!-- page content -->
<div class="row top_tiles">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <!-- Judul -->
      <div class="x_title">
         <div class="page-title">
          <div class="title_left">
            <h3>Fill in the Blank(s)</h3>
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
           <input name="lid" type="text" hidden="hidden"  value="<?php echo(isset($frm->id)?$frm->id:'') ?>">
          </div>
          <label class="control-label col-md-1 col-sm-1 col-xs-12">Type</label>
          <div class="col-md-5 col-sm-5 col-xs-12">
           <select name="type" class="form-control" disabled="disabled">
             <option value="30">Fill in the Blank(s)</option>
           </select>
          </div>
          <br><br>
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Title</label>
          <div class="col-md-10 col-sm-10 col-xs-12">
           <input name="title" type="text" class="form-control" placeholder="Masukan Title" required="" value="<?php echo(isset($frm->title)?$frm->title:'') ?>">
          </div>
        </div>
      <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Pertanyaan</label>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <textarea name="quest" class="resizable_textarea form-control" placeholder="Masukan Pertanyaan"><?php echo(isset($frm->quest)?$frm->quest:'') ?></textarea>
        </div>
      </div>

     <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Jawaban</label>
            <div class="col-md-10 col-sm-10 col-xs-12">
              <input type="text" name="key" class="form-control" placeholder="Masukan kunci jawaban"  value="<?php echo(isset($frm->key)?$frm->key:'') ?>">
            </div>
          </div>

       <div class="ln_solid"></div>
         <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
              <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

          </form>

      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(function() {
<?php if (isset($frm) && !isset($frm)) :  ?>
  $('input[name=id]').val("<?php echo($frm->id) ?>");
  $('input[name=lid]').val("<?php echo($frm->id) ?>");
  $('input[name=title]').val("<?php echo($frm->title) ?>");
  //$('textarea[name=quest]').val("<?php //echo($frm->quest) ?>");
  $('input[name=key]').val("<?php echo($frm->ky) ?>");
<?php endif;?>
})
</script>
<!-- /page content -->