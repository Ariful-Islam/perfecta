<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Category <small>all category and sub-category list</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url(); ?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Category</a>
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
								<i class="fa fa-list"></i>Category
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
								<th>Category</th>
								<th>Sub-category</th>
								<th>Parent</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							foreach($categories as $category)
							{
							?>
							<tr>
								<td><?php echo $category->id; ?></td>
								<td><?php echo $category->parent_id==NULL?$category->category:"-"; ?></td>
								<td><?php echo $category->parent_id!=NULL?$category->category:"-"; ?></td>
								<td><?php echo $category->parent_category!=""?$category->parent_category:"-"; ?></td>
								<td align="center"><a href="#" data-id="<?php echo $category->id; ?>" data-link="<?php echo base_url(); ?>category/delete_category" class="del_msg"><i class="icon-trash"></i></a></td>
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