<?php $this->load->view('header'); ?>

    <section class="header_clothing">
		<div class="container">
            <div class="col-lg-12">
			<h2>Work Clothing</h2>
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
					<form action="<?php echo base_url(); ?>work_clothing/clothing" method="post">
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
					<p>Have a Question?</p>
					<h2>Want an Offer?</h2>
					<a href="<?php echo base_url(); ?>contact"><button class="contact-button">
					<i class="icon_mail glyphicon"></i> Contact Us</button></a>
				</div>
				</div>
                <div class="col-lg-8 content_clothing">
					<div class="col-lg-12">
						<?php
						foreach($products as $product)
						{
						?>
						<a href="<?php echo base_url(); ?>shop/single_shop/<?php echo $product->id; ?>/<?php echo $parent_id; ?>/<?php echo $sub_category_id; ?>">
						<div class="col-lg-4 product">
							<h3><?php echo $product->price; ?>&#8364;</h3>
							<img height="170" width="202" src="<?php echo base_url(); ?>uploads/<?php echo $product->image; ?>" alt=""/>
							<h2><?php echo $product->title; ?></h2>
							<p>Chaussure tige haute</p>
						</div>
						</a>
						<?php
						}
						?>						
					</div>
					
					<ul class="pagination">
					  <li class="active" ><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					</ul>
					
				</div>
            </div>
        </div>
    </section>

<?php $this->load->view('footer'); ?>