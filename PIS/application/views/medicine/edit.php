<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h1>Edit Medicine Details</h1>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<?php if(validation_errors()) :?>
				 <div class="well alert alert-danger" style="color:white;">
					<p><?php echo validation_errors(); ?></p>
              </div>
			<?php endif;?>
			<form id="demo-form3" data-parsley-validate class="form-horizontal form-label-left" method ="post" action="<?php echo base_url();?>index.php/medicine/edit/<?php echo $details->id;?>">
			<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Name"> Name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $details->name;?>">
                        </div>
             </div>
			 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qualification">Current Stock <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="stock" required="required" class="form-control col-md-7 col-xs-12"value="<?php echo $details->stock;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Current Price</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="price"value="<?php echo $details->price;?>">
                        </div>
                      </div>
			 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/medicine/index">Cancel</a>
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
			</form>
		</div>
	</div>
</div>