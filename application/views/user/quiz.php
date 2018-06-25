 <!-- page content -->
       <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Quis</h3>
              </div>
              <div class="navbar-right">
              	<h4>XP : 231   </h4>
              </div>
            </div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Quis:1.1.1</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="border-bottom: 2px solid #E6E9ED; margin-bottom: 10px;">
                  	<font size="3" class="col-md-7">	
                  	pilih satu opsi yang anda aggap tepat :
                  	<br><br>
						<div class="radio">
							<label class="well well-sm">
          					<input type="radio" class="flat" value="option1" name="optiona" > Option one. only select one option
          					</label>
          					
							<label class="well well-sm">
          					<input type="radio" class="flat" value="option2" name="optiona" > Option two. only select one option
          					</label>
							
							<label class="well well-sm">
          					<input type="radio" class="flat" value="option3" name="optiona" > Option two. only select one option
          					</label>
							
							<label class="well well-sm">
          					<input type="radio" class="flat" value="option4" name="optiona" > Option two. only select one option
          					</label>
          				</div>
                  	</font>
                  </div>
                  <button type="button" class="btn btn-round btn-info"><i class="fa fa-lightbulb-o"></i> Hint</button>
                  <button type="button" class="btn btn-success navbar-right">Success</button>  
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Quis:1.1.2</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="border-bottom: 2px solid #E6E9ED; margin-bottom: 10px;">
                  	<font size="3" class="col-md-7">	
                  	pilih beberapa opsi yang anda aggap tepat :
                  	<br><br>
                    
                    <div class="checkbox">
                       <label class="well well-sm">
                         <input type="checkbox" class="flat" name="optionc"> Option one. select more than one options
                       </label>
					   <label class="well well-sm">
          			     <input type="checkbox" class="flat" name="optionc"> Option two. select more than one options
          			   </label>
                       <label class="well well-sm">
                         <input type="checkbox" class="flat" name="optionc"> Option one. select more than one options
                       </label>
                       <label class="well well-sm">
                         <input type="checkbox" class="flat" name="optionc"> Option one. select more than one options
                       </label>
                    </div>
                  	</font>
                  </div>
                  <button type="button" class="btn btn-round btn-info"><i class="fa fa-lightbulb-o"></i> Hint</button>
                  <button type="button" class="btn btn-success navbar-right">Success</button> 
                </div>
              </div>
            </div>
			      <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Quis:1.1.3</h2>
                    <div class="clearfix"></div>
                  </div>
				  <form id="form1">
                  <div class="x_content" style="border-bottom: 2px solid #E6E9ED; margin-bottom: 10px;">
                  	 kode <input type="text" maxlength=3 style="width:30px; border: none; border-bottom: 1px solid black;">
					 kode <input type="text" style="width: 20px; border: none; border-bottom: 1px solid black;">
					 kode <input type="text" style="width: 20px; border: none; border-bottom: 1px solid black;">kode
                  </div>
				  
                  <button type="button" class="btn btn-round btn-info"><i class="fa fa-lightbulb-o"></i> Hint</button>
                  <button type="submit" class="btn btn-success navbar-right" id="scs">Success</button>  
				  </form>
				</div>
              </div>
            </div>

            <div class="clearfix"></div>

            </div >
        </div>
        <!-- /page content -->
		 <script type="text/javascript">
			$(function(){
				 //alert("hay");
				 //$('input[type=text]').autoResize();
				 $('#form1').submit(function(event){
				 event.preventDefault();
				 	 alert("hello");
				 });
			})
		 </script>