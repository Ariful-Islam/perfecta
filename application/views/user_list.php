<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			User <small>all user list</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="index.html">User</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">List</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-users"></i>User
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th>User Name</th>
								<th>User Email</th>
								<th>Created by</th>
								<th>Created at</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							foreach($users as $user)
							{
							?>
							<tr>
								<td><?php echo $user->user_name; ?></td>
								<td><?php echo $user->user_email; ?></td>
								<td><?php echo $user->created_by; ?></td>
								<td><?php echo $user->created_at; ?></td>
								<td align="center"><a href="#" data-id="<?php echo $user->id; ?>" data-link="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/user/delete_user" class="del_msg"><i class="icon-trash"></i></a></td>
							</tr>
							<?php
							}
							?>
				
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->