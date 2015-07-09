<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Category <small>add category</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Category</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Category Add</a>
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
											<i class="fa fa-cubes"></i>Category
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?php echo base_url(); ?>category/category_add" method="post" class="form-horizontal">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Category</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Category" id="category" name="category">
																<span class="help-block">
																Add any category or sub-category name </span>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Parent</label>
															<div class="col-md-9">
																<select class="select2me form-control" id="parent" name="parent">
																	<option value="0">Select Parent</option>
																	<?php
																	foreach($category as $cat)
																	{
																		echo "<option value='".$cat->id."'>".$cat->category."</option>";
																	}
																	?>
																</select>
																<span class="help-block">
																Select only for sub-category </span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<!--/row-->
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green">Submit</button>
															</div>
														</div>
													</div>
													<div class="col-md-6">
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