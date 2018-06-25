<!-- page content -->
<div class="row top_tiles">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <!-- Judul -->
      <div class="x_title">
         <div class="page-title">
          <div class="title_left">
            <h3>Kategori</h3>
          </div>
        </div>
      </div>
      <!-- form input -->
      <div class="x_content">
      <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
          <?php if ($this->session->flashdata('alert')) {
            echo '<div class="alert alert-warning alert-message">';
            echo $this->session->flashdata('alert');
            echo '</div>';
          } elseif ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success alert-message">';
            echo $this->session->flashdata('success');
            echo '</div>';
          }?>
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Id </label>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <input name="id" type="text" class="form-control" placeholder="Masukan Id">
            <input name="lid" type="text" hidden="hidden" value="">
          </div>
          <label class="control-label col-md-1 col-sm-1 col-xs-12">Type</label>
          <div class="col-md-5 col-sm-5 col-xs-12">
            <select name="type" class="form-control" >
              <option >== Pilih Type ==</option>
              <option value="0">Language</option>
              <option value="1">Sub</option>
              <option value="10">Modul</option>
              <option value="21">Single Choice</option>
              <option value="22">Multiple Choice</option>
              <option value="30">Fill in the Blank(s)</option>
            </select>
          </div>
          <br><br>
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Title</label>
          <div class="col-md-10 col-sm-10 col-xs-12">
            <input name="title" type="text" class="form-control" placeholder="Masukan Title" value="">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
            <button name="submit" type="submit" class="btn btn-success" value="submit">Submit</button>
          </div>
        </div>
        <div class="ln_solid"></div>
        </form>   

        <!-- kategori view -->
        <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable" style="text-align: center;">
          <thead >
            <tr>
              <th width="30">Id</th>
              <th width="70">Type</th>
              <th><center>Title</center></th>
              <th width="50"><center>Opsi</center></th>
            </tr>
          </thead>

          <tbody>
            <?php 
            foreach($data->result() as $items):
              switch ($items->kd) {
                case '1':
                $kd = 'Sub';
                $lk = '<a href="'.base_url().'admin/kategori/'.$items->id.'"class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>';
                 break;

                case '10':
                $kd = 'Modul';
                $lk = '<a href="'.base_url().'admin/modul/'.$items->id.'"class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>';
                 break;

                case '21':
                $kd = 'SgC';
                $lk = '<a href="'.base_url().'admin/SgC/'.$items->id.'"class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>';
                 break;

                case '22':
                $kd = 'MltC';
                $lk = '<a href="'.base_url().'admin/MltC/'.$items->id.'"class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>';
                 break;

                case '0':
                $kd = 'Lang';
                $lk = '<a href="'.base_url().'admin/kategori/'.$items->id.'"class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>';
                 break;

                default:
                $kd = 'FtB';
                $lk = '<a href="'.base_url().'admin/FtB/'.$items->id.'"class="btn btn-info"><i class="fa fa-pencil-square-o"></i></a>';
                 break;
               } 
            ?>
            <tr>
              <td style="text-align: left;"><?= $items->id?></td>
              <td style="text-align: left;"><?= $kd?></td>
              <td><?= $items->title?></td>
              <td>
                <?= $lk ?>
                <a href="<?= base_url();?>admin/del_kategori/<?= $items->id;?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(function() {
<?php if (isset($frm)) :?>
  $('input[name=id]').val('<?= $frm->id;?>');
  $('input[name=lid]').val('<?= $frm->id;?>');
  $('select[name=type]').val(<?= $frm->kd>25?30:$frm->kd ?>);
  $('input[name=title]').val(<?php echo '"'.$frm->title.'");'; endif; ?>
})
</script>
<!-- /page content -->