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
					<h2 ><?php echo $this->lang->line('common_product_filter'); ?></h2>
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
					<a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/contact"><button class="contact-button">
					<i class="icon_mail glyphicon"></i> <?php echo $this->lang->line('common_contact_us'); ?></button></a>
				</div>
				</div>
                <div class="col-lg-8 content_clothing">
					<div class="col-lg-12">
						<?php
						foreach($products as $product)
						{
							$img = substr($product->image, 0, strrpos($product->image, '.'));
						?>
						<a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/shop/single_shop/<?php echo $product->id; ?>/<?php echo $parent_id; ?>/<?php echo $sub_category_id; ?>">
						<div class="col-lg-4 product">
							<h3><?php echo $product->price; ?>&#8364;</h3>
							<img height="170" width="202" src="<?php echo base_url(); ?>uploads/<?php echo $img.'202.png'; ?>" alt=""/>
							<h2><?php echo $product->title; ?></h2>
							<p>Chaussure tige haute</p>
						</div>
						</a>
						<?php
						}
						?>						
					</div>
					
					<?php echo $pagination; ?>
					
				</div>
            </div>
        </div>
    </section>

<?php $this->load->view('footer'); ?>