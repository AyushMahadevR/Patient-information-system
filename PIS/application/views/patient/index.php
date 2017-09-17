
<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h2>Patients</h2>
			<ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="<?php echo base_url();?>index.php/patient/add" class="dropdown-toggle"  role="button" aria-expanded="false"><i class="fa fa-plus"></i></a>
                      </li>
                    </ul>
			<div class="clearfix"></div>
		</div>
		 <div class="x_content">
			 <?php if ($this->session->flashdata('padd_fail')): ?>
				 <?php echo'<p class="alert alert-warning">'.$this->session->flashdata('padd_fail').'</p>'; ?>
			 <?php endif; ?>
			 <?php if ($this->session->flashdata('padd_success')): ?>
				 <?php echo'<p class="alert alert-success">'.$this->session->flashdata('padd_success').'</p>'; ?>
			 <?php endif; ?>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Patient Name</th>
						              <th>Gender</th>
                          <th>Age</th>
                          <th>Doctor</th>
						              <th>Medical History</th>
                        </tr>
                      </thead>
					  <tbody>
						<?php foreach($patients as $patient) :?>
							<tr>
								<td><?php echo $patient->pid; ?></td>
								<td><a href="<?php echo base_url();?>index.php/patient/view/<?php echo $patient->pid; ?>"><?php echo $patient->pname; ?></a></td>
								<td><?php echo $patient->pgender; ?></td>
								<td><?php echo $patient->page; ?></td>
								<td><?php echo $patient->name; ?></td>
								<td><?php echo $patient->history; ?></td>
							</tr>
						<?php endforeach;?>
					  </tbody>
					 </table>
					 <div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
