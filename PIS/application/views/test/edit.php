<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h1>Edit Test Details</h1>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<?php if(validation_errors()) :?>
				 <div class="well alert alert-danger" style="color:white;">
					      <p><?php echo validation_errors(); ?></p>
          </div>
			<?php endif;?>
			<form id="demo-form4" data-parsley-validate class="form-horizontal form-label-left" method ="post" action="<?php echo base_url();?>index.php/test/edit/<?php echo $details->id;?>">
			<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Name"> Test Name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details->name;?>">
                        </div>
             </div>
			 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qualification">Units <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="unit" required="required" class="form-control col-md-7 col-xs-12"value="<?php echo $details->unit;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Normal Range</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="range"value="<?php echo $details->range;?>">
                        </div>
                      </div>
											<div class="form-group">
												<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input class="form-control col-md-7 col-xs-12" type="text" name="price"value="<?php echo $details->price;?>">
												</div>
											</div>
			 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/test/index">Cancel</a>
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
			</form>
		</div>
	</div>
</div>
