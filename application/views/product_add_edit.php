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
					<!--<form class="form-horizontal form-row-seperated" action="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/product/product_add" method="post">-->
						<div class="portlet">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-shopping-cart"></i>Add Product
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											General </a>
										</li>
										<li>
											<a href="#tab_translate" data-toggle="tab">
											Description </a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											Images </a>
										</li>
									</ul>
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<form class="form-horizontal form-row-seperated" action="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/product/product_add" method="post">
											
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-2 control-label">Name: <span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<input type="text" class="form-control" name="title" id="title" placeholder="">
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
															<input type="text" class="form-control" name="price" placeholder="">
														</div>
													</div>
													<div class="form-group">
														<div class="actions btn-set col-md-12">
															<button class="btn green pull-right" type="submit"><i class="fa fa-check"></i> Save</button>
														</div>
													</div>
												</div>
											</form>
										</div>	
										<div class="tab-pane" id="tab_translate">
											<form class="form-horizontal form-row-seperated" action="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/product/product_description_add" method="post">
											
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-2 control-label">Language: <span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<select class="select2me form-control" id="language" name="language">
																<option value="0">Select Language</option>
																<?php
																foreach($language as $lang)
																{
																	echo "<option value='".$lang->language_abbr."'>".$lang->language_name."</option>";
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
															<textarea class="wysihtml5 form-control" rows="6" name="description" id="description"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Features: <span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<textarea class="wysihtml5 form-control" rows="6" name="features" name="features"></textarea>
															<span class="help-block">
															Add features of products here </span>
														</div>
													</div>
													<div class="form-group">
														<div class="actions btn-set col-md-12">
															<button class="btn green pull-right" style="margin-left: 5px;" type="submit" name="prd" value="savencontinue"><i class="fa fa-arrow-right"></i> Save and Continue</button>
															<button class="btn green pull-right" type="submit" name="prd" value="save"><i class="fa fa-check"></i> Save</button>
														</div>
													</div>
												</div>
											</form>
										</div>									
										<div class="tab-pane" id="tab_images">									
											
											<form id="fileupload" action="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/product/do_upload" method="POST" enctype="multipart/form-data">
												<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
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
											</form>										
										</div>										
									</div>
								</div>
							</div>
						</div>
					<!--</form>-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->