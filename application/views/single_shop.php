<?php $this->load->view('header'); ?>

    <section class="header_clothing">
		<div class="container">
            <div class="col-lg-12">
			<h2><?php echo $this->lang->line('common_work_clothing'); ?></h2>
			</div>
		</div>
	</section>
    

    <!-- Content Section -->
    <section class="shob_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
				<div class="col-lg-12 form_div">
					<h2 >Product Filter</h2>
					<form action="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/work_clothing/clothing" method="post">
					<div class="form-group">
					  <label for="category">Category</label>
					  <select class="form-control category_search" id="category" name="category">
						<option value="0">Select Category</option>
						<?php
						foreach($category as $cat)
						{
							$selected = $cat->id==$parent_id?'selected':'';
							echo "<option ".$selected." value='".$cat->id."'>".$cat->category."</option>";
						}
						?>
					  </select>
					</div>
										
					<div class="form-group">
					  <label for="subcategory">Subcategory </label>
					  <select class="form-control category_search" id="subcategory" name="subcategory">
						<option value="0">Select Subcategory</option>
						<?php
						if(count($sub_category) > 0)
						{
							foreach($sub_category as $cat)
							{
								$selected = $cat->id==$sub_category_id?'selected':'';
								echo "<option ".$selected." value='".$cat->id."'>".$cat->category."</option>";
							}
						}
						?>
					  </select>
					</div>					
					</form>					
				</div>
				<div class="col-lg-12 offer">
					<p><?php echo $this->lang->line('common_have_a_question'); ?></p>
					<h2><?php echo $this->lang->line('common_want_an_offer'); ?></h2>
					<a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/contact"><button type="button" class="btn btn-primary active clothing_button"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><?php echo $this->lang->line('common_contact_us'); ?></button></a>
				</div>
				</div>
                <div class="col-lg-8 content_clothing">
					<div class="col-lg-12 content_single_clothing">
						<div class="col-lg-12">
							<div class="col-lg-6">
								<div class="col-lg-12 shoes_main">
									<?php 
									foreach($product_images as $image)
									{
									?>
									<img class="img-responsive img-main" src="<?php echo base_url('uploads/'.$image->image); ?>" alt=""/>
									<?php
									break;
									}
									?>
								</div>
								<div class="col-lg-12 sub_img">
									<?php 
									foreach($product_images as $image)
									{
										$img = substr($product->image, 0, strrpos($product->image, '.'));
									?>
									<a href="javascript:;"><img  class="img-responsive img-thumb" src="<?php echo base_url(); ?>uploads/<?php echo $image->image; ?>" alt=""/></a>
									<?php
									}
									?>
								</div>
							</div>
							<div class="col-lg-6 product_details">
								<h2><?php echo $product->title; ?><span> <?php echo $product->price; ?>&#8364;</span></h2>
								<button type="button" data-toggle="modal" data-target=".order_online">Order Online</button>
								<h3>Features</h3>
								<?php echo $product->features; ?>
							</div>
							
						</div>
						<div class="col-lg-12 product_description">
							<h3>Product Description</h3>
							<p><?php echo $product->description; ?></p>
						</div>				
					</div>
				</div>
            </div>
        </div>
    </section>
	<div class="modal fade order_online" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('common_order_online'); ?></h4>
			</div>
			<div class="modal-body">
				<div class="form-group for_h">
					<label for="recipient-name" class="control-label">Please enter your email / phone number:</label>
					<input type="text" class="form-control" id="recipient-name">
					<input type="hidden" class="form-control" id="product_id" value="<?php echo $product_id; ?>">
				</div>
				<div class="form-group hide successs">
					<label>We have received your order. Our team will contact with you.</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="mail_to_admin" class="btn btn-primary">Send message</button>
			</div>
		</div>
	  </div>
	</div>
	<section class="footer_contact">
		<div class="container">
            <div class="row">
				<div class="col-lg-9">
					<h2><?php echo $this->lang->line('common_have_a_question'); ?> or <?php echo $this->lang->line('common_want_an_offer'); ?></h2>
				</div>
				<div class="col-lg-3">
						<a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/contact"><button><?php echo $this->lang->line('common_contact_us'); ?></button></a>
				</div>
			</div>
		</div>
	</section>

<?php $this->load->view('footer'); ?>