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
					<form action="" method="">
					<div class="form-group">
					  <label for="sel1">Category</label>
					  <select class="form-control" id="sel1">
						<option value="construction">Construction</option>
						<option value="construction">Construction</option>
						<option value="construction">Construction</option>
						<option value="construction">Construction</option>
					  </select>
					</div>
										
					<div class="form-group">
					  <label for="sel1">Subcategory </label>
					  <select class="form-control" id="sel1">
						<option value="shoes">Shoes</option>
						<option value="shoes">Shoes</option>
						<option value="shoes">Shoes</option>
						<option value="shoes">Shoes</option>
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
						<a href="<?php echo base_url(); ?>shop/single_shop">
						<div class="col-lg-4 product">
							<h3>45&#8364;</h3>
							<img src="<?php echo base_url(); ?>assets/images/shoes1.png" alt=""/>
							<h2>Apollo/S5</h2>
							<p>Chaussure tige haute</p>
						</div>
						</a>
						<a href="<?php echo base_url(); ?>shop/single_shop">
						<div class="col-lg-4 product">
							<h3>32&#8364;</h3>
							<img src="<?php echo base_url(); ?>assets/images/shoes2.png" alt=""/>
							<h2>Argus/S1</h2>
							<p>Chaussure tige haute</p>
						</div>
						</a>
						<a href="<?php echo base_url(); ?>shop/single_shop">
						<div class="col-lg-4 product">
							<h3>28&#8364;</h3>
							<img src="<?php echo base_url(); ?>assets/images/shoes3.png" alt=""/>
							<h2>Argulus/Ss</h2>
							<p>Chaussure tige haute</p>
						</div>
						</a>
					</div>
					<div class="col-lg-12">
						<a href="<?php echo base_url(); ?>shop/single_shop">
						<div class="col-lg-4 product">
							<h3>50&#8364;</h3>
							<img src="<?php echo base_url(); ?>assets/images/shoes4.png" alt=""/>
							<h2>Mars/P2</h2>
							<p>Chaussure tige haute</p>
						</div>
						</a>
						<a href="<?php echo base_url(); ?>shop/single_shop">
						<div class="col-lg-4 product">
							<h3>62&#8364;</h3>
							<img src="<?php echo base_url(); ?>assets/images/shoes5.png" alt=""/>
							<h2>Mars/P3</h2>
							<p>Chaussure tige haute</p>
						</div>
						</a>
						<a href="<?php echo base_url(); ?>shop/single_shop">
						<div class="col-lg-4 product">
							<h3>25&#8364;</h3>
							<img src="<?php echo base_url(); ?>assets/images/shoes6.png" alt=""/>
							<h2>Argo/M2</h2>
							<p>Chaussure tige haute</p>
						</div>	
						</a>
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