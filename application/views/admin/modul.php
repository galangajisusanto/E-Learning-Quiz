<!-- page content -->
<div class="row top_tiles">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <!-- Judul -->
      <div class="x_title">
         <div class="page-title">
          <div class="title_left">
            <h3>Modul</h3>
          </div>
        </div>
      </div>
      <!-- form input -->
      <div class="x_content">
        <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data" multipart>
          <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Id</label>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <input name="id" type="text" class="form-control" placeholder="Masukan Id " required="" value="<?= (isset($frm->id)?$frm->id:'') ?>">
              <input name="lid" type="text" hidden="hidden" value="<?= (isset($frm->id)?$frm->id:'') ?>">
            </div>
            <label class="control-label col-md-1 col-sm-1 col-xs-12">Type</label>
            <div class="col-md-5 col-sm-5 col-xs-12">
              <select name="type" class="form-control" disabled="disabled">
                <option value="10">Modul</option>
              </select>
            </div>
            <br><br>
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Title</label>
            <div class="col-md-10 col-sm-10 col-xs-12">
              <input name="title" type="text" class="form-control" placeholder="Masukan Title" required=""  value="<?= (isset($frm->title)?$frm->title:'') ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">Pembelajaran</label>
            <div class="col-md-10 col-sm-10 col-xs-12">
              <textarea name="materi" class="resizable_textarea form-control editor-wrapper" placeholder="Masukan Pembelajaran disini..." required="required"><?= (isset($frm->materi)?$frm->materi:'') ?></textarea>
            </div>
          </div>

          <div class="form-group">
          </div>

          <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12">File Gambar</label>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <input type="file" name="files[]" class="well-sm" multiple="multiple">
            </div>
            <label class="control-label col-md-1 col-sm-1 col-xs-12">Video</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="linkv" class="form-control" placeholder="Masukan Link Video disini..." value="<?= (isset($frm->linkv)?$frm->linkv:'') ?>">
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

<!-- /page content -->

<script type="text/javascript">
  $(function() {
  <?php if (isset($frm)) : ?>
    // $('input[name=lang]').val('<?php echo($frm->id) ?>');
    // $('input[name=title]').val('<?php echo($frm->title) ?>');       
  <?php endif;?>
  })
</script>