<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Password <small>change your password</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="#">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">User</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Change Password</a>
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
											<i class="fa fa-lock"></i>Change Password
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form id="user_form" action="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/user/update_password" method="post" class="form-horizontal">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label">Current Password: <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-lock"></i>
															</span>
															<input type="password" class="form-control" name="curpassword" id="curpassword" placeholder="Provide Current Password" />
															
														</div>
													</div>
												</div>											
												<div class="form-group">
													<label class="col-md-3 control-label">New Password: <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-lock"></i>
															</span>
															<input type="password" class="form-control" name="password" id="password" placeholder="Provide New Password" />
															
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Re-type Password: <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-lock"></i>
															</span>
															<input type="password" class="form-control" name="repassword" id="repassword" placeholder="Provide Password Again" />
															
														</div>
													</div>
												</div>
											</div>
											<div class="form-actions fluid">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn green">Submit</button>
														<button type="button" class="btn default">Cancel</button>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->