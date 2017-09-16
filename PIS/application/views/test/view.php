<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h1>Test Details</h1>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<h3>Test Name : <?php echo $details->name;?></h3><br>
			<h4>Units : <?php echo $details->unit;?></h4><br>
			<h4>Normal Range : <?php echo $details->range;?></h4><br>
      <h4>Price : <?php echo $details->price;?></h4><br>
			 <div class="ln_solid"></div>
					<form id="demo-form5" data-parsley-validate class="form-horizontal form-label-left" method ="post" action="<?php echo base_url();?>index.php/test/delete/<?php echo $details->id;?>">
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/test/index">Cancel</a>
						              <a class="btn btn-warning" href="<?php echo base_url();?>index.php/test/edit/<?php echo $details->id;?>">Edit</a>
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                      </div>
					</form>
		</div>
	</div>
</div>
