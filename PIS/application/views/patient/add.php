
<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h2>Add Patient</h2>
			 <div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br>
      <?php if (validation_errors()): ?>
        <div class="well alert alert-danger" style="color:white;">
          <p><?php echo validation_errors(); ?></p>
        </div>
      <?php endif; ?>
			<form id="demo-form5" data-parsley-validate class="form-horizontal form-label-left" method ="post" action="<?php echo base_url();?>index.php/patient/add">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Patient Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pname" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Patient Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="paddress" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Patient Age</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="page">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="pgender" value="Male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="pgender" value="Female"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Medical History <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="history" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
											<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Doctor Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="doctor_id">
														<?php foreach($doctors as $doctor) : ?>
												        <option value="<?php echo $doctor['id'];?>"><?php echo $doctor['name'];?></option>
												    <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
											<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Medicine Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="medicine_id">
														<?php foreach($medicines as $medicine) : ?>
												        <option value="<?php echo $medicine['id'];?>"><?php echo $medicine['name'];?></option>
												    <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
											<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Test Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="test_id">
														<?php foreach($tests as $test) : ?>
												        <option value="<?php echo $test['id'];?>"><?php echo $test['name'];?></option>
												    <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/patient/index">Cancel</a>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
		</div>
	</div>
</div>
