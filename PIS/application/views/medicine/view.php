<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h1>Medicine Details</h1>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<h3>Name : <?php echo $details->name;?></h3><br>
			<h4>Current Stock : <?php echo $details->stock;?></h4><br>
			<h4>Price Per Strip : <?php echo $details->price;?></h4><br>
			 <div class="ln_solid"></div>
					<form id="demo-form4" data-parsley-validate class="form-horizontal form-label-left" method ="post" action="<?php echo base_url();?>index.php/medicine/delete/<?php echo $details->id;?>">
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/medicine/index">Cancel</a>
						  <a class="btn btn-warning" href="<?php echo base_url();?>index.php/medicine/edit/<?php echo $details->id;?>">Edit</a>
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
					</form>
           </div>
		</div>
	</div>
</div>