<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Product <small>all product list</small>
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
						<a href="#">List</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-list"></i>Product
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
								<th>ID</th>
								<th>Title</th>
								<th>Price</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							foreach($product as $product)
							{
							?>
							<tr>
								<td><?php echo $product->id; ?></td>
								<td><?php echo $product->title; ?></td>
								<td><?php echo $product->price; ?></td>
								<td align="center"><a href="#" data-id="<?php echo $product->id; ?>" data-link="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/product/delete_message" class="del_msg"><i class="icon-trash"></i></a></td>
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