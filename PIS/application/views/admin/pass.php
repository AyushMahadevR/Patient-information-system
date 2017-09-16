<div class="right_col" role="main">
    <div class="x_panel">
      <div class="x_title">
        <h2>Change Your Password</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="panel">
            <div class="container">
              <h1>Hello, <?php echo $this->session->userdata('username');?>!</h1><br>
              <?php if (validation_errors()): ?>
                <div class="well alert alert-danger" style="color:white;">
                  <p><?php echo validation_errors(); ?></p>
                </div>
              <?php endif; ?>
              <form class="form-horizontal form-label-left" action="<?php echo base_url();?>index.php/admin/pass" method="post">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password"> New Password <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" name="password1" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password2"> Confirm New Password <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" name="password2" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <a class ="btn btn-primary" href="<?php echo base_url();?>index.php/admin/index">Cancel</a>
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Update</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
</div>
