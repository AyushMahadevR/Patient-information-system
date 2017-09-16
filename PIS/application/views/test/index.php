
<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h2>Tests</h2>
			<ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="<?php echo base_url();?>index.php/test/add" class="dropdown-toggle"  role="button" aria-expanded="false"><i class="fa fa-plus"></i></a>
                      </li>
                    </ul>
			<div class="clearfix"></div>
		</div>
		 <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Test Name</th>
						              <th>Units</th>
                          <th>Normal Range</th>
                          <th>Price</th>
                        </tr>
                      </thead>
					  <tbody>
						<?php foreach($tests as $test) :?>
							<tr>
								<td><?php echo $test->id; ?></td>
								<td><a href="<?php echo base_url();?>index.php/test/view/<?php echo $test->id; ?>"><?php echo $test->name; ?></a></td>
								<td><?php echo $test->unit; ?></td>
								<td><?php echo $test->range; ?></td>
                <td><?php echo $test->price; ?></td>
							</tr>
						<?php endforeach;?>
					  </tbody>
					 </table>
					 <div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
