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
					<a href="<?php echo base_url(); ?>contact"><button type="button" class="btn btn-primary active clothing_button"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact Us</button></a>
				</div>
				</div>
                <div class="col-lg-8 content_clothing">
					<div class="col-lg-12 content_single_clothing">
						<div class="col-lg-12">
							<div class="col-lg-6">
								<div class="col-lg-12 shoes_main">
									<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/shoes_main.png" alt=""/>
								</div>
								<div class="col-lg-12 sub_img">
									<a href="#"><img  class="img-responsive" src="<?php echo base_url(); ?>assets/images/shoes_1st.png" alt=""/></a>
									<a href="#"><img  class="img-responsive" src="<?php echo base_url(); ?>assets/images/shoes_2nd.png" alt=""/></a>
									<a href="#"><img  class="img-responsive" src="<?php echo base_url(); ?>assets/images/shoes_3rd.png" alt=""/></a>
								</div>
							</div>
							<div class="col-lg-6 product_details">
								<h2>Argus/S1<span> 32&#8364;</span></h2>
								<a href="#"><button>Order Online</button></a>
								<h3>Features</h3>
								<ul>
									<li>Full leather upper</li>
									<li>Waterproof and breathable bootie membrane</li>
									<li>Compact safety toe</li>
									<li>Compression molded, impact absorbing midsole</li>
									<li>i-shield technology repels dirt and liquids</li>
								</ul>
							</div>
							
						</div>
						<div class="col-lg-12 product_description">
							<h3>Product Description</h3>
							<p>Get the job done with the Argus / S1 work boot. This hard-working boot features a durable leather upper with gusseted tongue as an added barrier against water and oil. </p>
							<p><b>An ASTM</b> rated composite safety toe and electrical hazard protection offer peace of mind. The <b>M-P.A.C.T</b> contoured footbed with memory foam wicks moisture and absorbs shock. The slip-resistant, flexible rubber sole with toe traction, heel brake zones and ladder grips of the Argus / S1 utility boot delivers a confident footing with every step. </p>
							<p>Bonus; this boot comes with a back up pair of laces too.</p>
						</div>				
					</div>
				</div>
            </div>
        </div>
    </section>
	<section class="footer_contact">
		<div class="container">
            <div class="row">
				<div class="col-lg-9">
					<h2>Do you have a question or want an offer?</h2>
				</div>
				<div class="col-lg-3">
						<a href="<?php echo base_url(); ?>contact"><button>Contact Us</button></a>
				</div>
			</div>
		</div>
	</section>

<?php $this->load->view('footer'); ?>