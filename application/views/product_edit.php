<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Product Edit <small>create & edit product</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Product</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Product Edit</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box green" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-handbag"></i> Add Your Product in Just 3 Steps
							</div>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form id="submit_form" action="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/product/do_upload/<?php echo $products->product_id; ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Add Product </span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Product Description </span>
												</a>
											</li>
											<li>
												<a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Product Images </span>
												</a>
											</li>
										</ul>
										<div id="bar" class="progress progress-striped" role="progressbar">
											<div class="progress-bar progress-bar-success">
											</div>
										</div>
										<div class="tab-content">
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												You have some form errors. Please check below.
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												Your form validation is successful!
											</div>
											<div class="tab-pane active" id="tab1">
												<h3 class="block">Provide product initials</h3>
												
												
												<div class="form-group">
													<label class="col-md-2 control-label">Name: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="title" id="title" value="<?php echo isset($products)?$products->title:''; ?>" />
														<input type="hidden" name="pinurl" id="pinurl" value="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/product/product_update/<?php echo isset($products)?$products->product_id:''; ?>" />
														<span class="help-block">
														Provide product title/name </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Categories: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<div class="form-control height-auto">
															<div class="scroller" style="height:275px;" data-always-visible="1">
																<?php 
																	foreach($category as $cat)
																	{
																		echo $cat['name'];
																	}
																?>																
															</div>
														</div>
														<span class="help-block">
														select one or more categories </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Price: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="price" id="price" value="<?php echo isset($products)?$products->price:''; ?>" />
														<span class="help-block">
														Provide product price </span>
													</div>
												</div>
												
												
											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block">Provide <span id="product_title"></span> details <span id="product_lang" tabindex='-1'></span> </h3>
												<div class="form-group">
													<label class="col-md-2 control-label">Language: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="hidden" name="desurl" id="desurl" value="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/product/product_description_update/<?php echo $products->product_id; ?>" />
														<select class="select2me form-control" id="language" name="language">
															<option value="0">Select Language</option>
															<?php
															foreach($language as $lang)
															{
																$selected = $lang->language_abbr==$products->language_id?'selected':'';
																echo "<option ".$selected." value='".$lang->language_abbr."'>".$lang->language_name."</option>";
															}
															?>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Description: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea class="wysihtml5 form-control" rows="6" name="description" id="description"><?php echo $products->description; ?></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Features: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea class="wysihtml5 form-control" rows="6" name="features" name="features"><?php echo $products->features; ?></textarea>
														<span class="help-block">
														Add features of products here </span>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab3">
												<h3 class="block">Provide product images</h3>
												
												<div class="row fileupload-buttonbar">
													<div class="col-lg-7">
														<!-- The fileinput-button span is used to style the file input field as button -->
														<span class="btn green fileinput-button">
														<i class="fa fa-plus"></i>
														<span>
														Add files... </span>
														<input type="file" name="userfile[]" multiple="">
														</span>
														<button type="submit" class="btn blue start">
														<i class="fa fa-upload"></i>
														<span>
														Start upload </span>
														</button>
														<button type="reset" class="btn warning cancel">
														<i class="fa fa-ban-circle"></i>
														<span>
														Cancel upload </span>
														</button>
														
														<!-- The global file processing state -->
														<span class="fileupload-process">
														</span>
													</div>
													<!-- The global progress information -->
													<div class="col-lg-5 fileupload-progress fade">
														<!-- The global progress bar -->
														<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
															<div class="progress-bar progress-bar-success" style="width:0%;">
															</div>
														</div>
														<!-- The extended global progress information -->
														<div class="progress-extended">
															 &nbsp;
														</div>
													</div>
												</div>
												<!-- The table listing the files available for upload/download -->
												<table role="presentation" class="table table-striped clearfix">
												<tbody class="files">
												</tbody>
												</table>
												
												<!-- Existing image show -->
												<table class="table table-bordered table-hover">
													<thead>
														<tr role="row" class="heading">
															<th width="8%">
																 Image
															</th>
															<th width="10%">
															</th>
														</tr>
													</thead>
													<tbody>
														<?php 
														foreach ($images as $image)
														{
														?>
														<tr>
															<td>
																<a href="<?php echo base_url('uploads/'.$image->image); ?>" class="fancybox-button" data-rel="fancybox-button">
																<img class="img-responsive" style="width: 100px; height: 100px;" src="<?php echo base_url('uploads/'.$image->image); ?>" alt="">
																</a>
															</td>
															<td style="vertical-align: middle;">
																<a href="javascript:;" data-id="<?php echo $image->id; ?>" data-link="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/product/delete_image" class="btn default btn-sm del_msg">
																<i class="fa fa-times"></i> Remove </a>
															</td>
														</tr>
														<?php 
														}
														?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
<!-- 												<a href="javascript:;" class="btn default button-previous"> -->
<!-- 												<i class="m-icon-swapleft"></i> Back </a> -->
												<a href="javascript:;" class="btn blue button-first">
												Update &amp; Add Another Language <i class="m-icon-swapright m-icon-white"></i>
												</a>
												<a href="javascript:;" class="btn blue button-next">
												Update &amp; Continue <i class="m-icon-swapright m-icon-white"></i>
												</a>
												<a href="javascript:;" class="btn green button-submit">
												Finish <i class="m-icon-swapright m-icon-white"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->