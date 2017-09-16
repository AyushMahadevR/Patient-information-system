
<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h2>Doctors</h2>
			<ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="<?php echo base_url();?>index.php/doctors/add" class="dropdown-toggle"  role="button" aria-expanded="false"><i class="fa fa-plus"></i></a>
                      </li>
                    </ul>
			<div class="clearfix"></div>
		</div>
		 <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Doctor Name</th>
						  <th>Gender</th>
                          <th>Qualification</th>
                          <th>Speciality</th>
						  <th>Experience</th>
                        </tr>
                      </thead>
					  <tbody>
						<?php foreach($lists as $list) :?>
							<tr>
								<td><?php echo $list->id; ?></td>
								<td><a href="<?php echo base_url();?>index.php/doctors/view/<?php echo $list->id; ?>"><?php echo $list->name; ?></a></td>
								<td><?php echo $list->gender; ?></td>
								<td><?php echo $list->qualification; ?></td>
								<td><?php echo $list->speciality; ?></td>
								<td><?php echo $list->experience; ?></td>
							</tr>
						<?php endforeach;?>
					  </tbody>
					 </table>
					 <div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="clearfix"></div>