<div class="right_col" role="main">
    <div class="x_panel">
      <div class="x_content">
        <?php if ($this->session->flashdata('pass_change')): ?>
          <?php echo'<p class="alert alert-success">'.$this->session->flashdata('pass_change').'</p>'; ?>
        <?php endif; ?>
        <?php if ($this->session->flashdata('pass_fail')): ?>
          <?php echo'<p class="alert alert-danger">'.$this->session->flashdata('pass_fail').'</p>'; ?>
        <?php endif; ?>
        <div class="jumbotron">
            <div class="container">
              <h1>Hello, <?php echo $this->session->userdata('username');?>!</h1><br>
              <h3>Welcome to PIS</h3>
              <br>
              <p>The Patient Information System (PIS) is a province-wide initiative designed to improve access to patient information through a central electronic information system. PIS's goal is to streamline patient information flow and its accessibility for doctors and other health care providers.</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
      </div>
    </div>
</div>
