<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h1>Doctor Details</h1>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<h3>Name : <?php echo $details->name;?></h3><br>
			<h4>Qualification : <?php echo $details->qualification;?></h4><br>
			<h4>Speciality : <?php echo $details->speciality;?></h4><br>
			<h4>Gender  : <?php echo $details->gender;?></h4><br>
			<h4>Experience : <?php echo $details->experience;?> years</h4><br>
			 <div class="ln_solid"></div>
					<form id="demo-form4" data-parsley-validate class="form-horizontal form-label-left" method ="post" action="<?php echo base_url();?>index.php/doctors/delete/<?php echo $details->id;?>">
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/doctors/index">Cancel</a>
						  <a class="btn btn-warning" href="<?php echo base_url();?>index.php/doctors/edit/<?php echo $details->id;?>">Edit</a>
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
					</form>
           </div>
		</div>
	</div>
</div><div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h1>Doctor Details</h1>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<h3>Name : <?php echo $details->name;?></h3><br>
			<h4>Qualification : <?php echo $details->qualification;?></h4><br>
			<h4>Speciality : <?php echo $details->speciality;?></h4><br>
			<h4>Gender  : <?php echo $details->gender;?></h4><br>
			<h4>Experience : <?php echo $details->experience;?> years</h4><br>
			 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/doctors/index">Cancel</a>
						  <button class="btn btn-warning" type="reset">Edit</button>
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                      </div>
		</div>
	</div>
</div>