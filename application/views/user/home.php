<div class="container">

  <div class="row">
    
    <div class="span12">
      
      <div class="widget">
      
    <div class="widget-header">

      <h2>&nbsp;&nbsp;Pilih bahasa pemprograman barumu [Saran]</h2>
    </div> <!-- /widget-header -->
    
    <div class="widget-content">
      
      <div class="pricing-plans plans-3">

        <div class="shortcuts"> 

        <?php 
          foreach($data->result() as $items):
          if(strlen($items->id)==1):
        ?>
        <a href="javascript:;" class="shortcut">
          <h1><?=$items->title?></h1>
          <span class="shortc ut-label">josss</span> 
        </a>
        <?php endif; endforeach; ?>

        </div>
  
    </div> <!-- /pricing-plans -->
      
    </div> <!-- /widget-content -->
      
  </div> <!-- /widget -->         
  
  </div> <!-- /span12 -->       
    
    
  </div> <!-- /row -->

</div> <!-- /container -->
