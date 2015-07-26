<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Order <small>all order list</small>
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
						<a href="#">Order</a>
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
								<i class="fa fa-list"></i>Order
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
								<th>Order ID</th>
								<th>Product Name</th>
								<th>Contact Information</th>
								<th class="order desc">Order Date</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							foreach($orders as $order)
							{
							?>
							<tr>
								<td><?php echo $order->id; ?></td>
								<td><a target="_blank" href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/shop/single_shop/<?php echo $order->product_id; ?>/0/0"><?php echo $order->title; ?></a></td>
								<td><?php echo $order->email; ?></td>
								<td><?php echo $order->created_at; ?></td>
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