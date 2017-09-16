<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Patient Information System | Login/Registeration </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php if (validation_errors()): ?>
              <div class="well alert alert-danger" style="color:white;">
                <p><?php echo validation_errors(); ?></p>
              </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('login_failed')): ?>
              <?php echo'<p class="alert alert-warning">'.$this->session->flashdata('login_failed').'</p>'; ?>
            <?php endif; ?>
            <?php if ($this->session->flashdata('loggedout')): ?>
              <?php echo'<p class="alert alert-success">'.$this->session->flashdata('loggedout').'</p>'; ?>
            <?php endif; ?>
			<?php if ($this->session->flashdata('register_success')): ?>
              <?php echo'<p class="alert alert-success">'.$this->session->flashdata('register_success').'</p>'; ?>
            <?php endif; ?>
			<?php if ($this->session->flashdata('register_failed')): ?>
              <?php echo'<p class="alert alert-warning">'.$this->session->flashdata('register_failed').'</p>'; ?>
            <?php endif; ?>
            <?php echo form_open('index.php/welcome/login'); ?>
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" />
              </div>
              <div>
                <button type="submit" name="button" class="btn btn-default submit">Log In</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-user-md"></i> Patient Information System</h1>
                  <p>©2017 All Rights Reserved. Ayush Mahadev R. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <?php if (validation_errors()): ?>
              <div class="well alert alert-danger" style="color:white;">
                <p><?php echo validation_errors(); ?></p>
              </div>
            <?php endif; ?>
            <?php echo form_open('index.php/welcome/register'); ?>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-user-md"></i> Patient Information System</h1>
                  <p>©2017 All Rights Reserved. Ayush Mahadev R. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
