
<div class="right_col" role="main">
	<div class ="x_panel">
		<div class="x_title">
			<h2>Medicines</h2>
			<ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="<?php echo base_url();?>index.php/medicine/add" class="dropdown-toggle"  role="button" aria-expanded="false"><i class="fa fa-plus"></i></a>
                      </li>
                    </ul>
			<div class="clearfix"></div>
		</div>
		 <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Medicine Name</th>
						  <th>Stock</th>
                          <th>Price</th>
                        </tr>
                      </thead>
					  <tbody>
						<?php foreach($meds as $med) :?>
							<tr>
								<td><?php echo $med->id; ?></td>
								<td><a href="<?php echo base_url();?>index.php/medicine/view/<?php echo $med->id; ?>"><?php echo $med->name; ?></a></td>
								<td><?php echo $med->stock; ?></td>
								<td><?php echo $med->price; ?></td>
							</tr>
						<?php endforeach;?>
					  </tbody>
					 </table>
					 <div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="clearfix"></div>