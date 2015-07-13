<?php $this->load->view('header'); ?>

    <section>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
				<div class="item active">
				  <img src="<?php echo base_url(); ?>assets/images/slider.jpg" alt="">
				  <div class="carousel-caption">
					<p>Custom Work Clothes</p>
					<h2>To Your Industry</h2>
					<a href="#"><button><?php echo $this->lang->line('common_browse_our_catalog'); ?></button></a>
				  </div>
				</div>

				<div class="item">
				  <img src="<?php echo base_url(); ?>assets/images/slider.jpg" alt="">
				  <div class="carousel-caption">
					<p>Custom Work Clothes</p>
					<h2>To Your Industry</h2>
					<a href="#"><button><?php echo $this->lang->line('common_browse_our_catalog'); ?></button></a>
				  </div>
				</div>

				<div class="item">
				  <img src="<?php echo base_url(); ?>assets/images/slider.jpg" alt="">
				  <div class="carousel-caption">
					<p>Custom Work Clothes</p>
					<h2>To Your Industry</h2>
					<a href="#"><button><?php echo $this->lang->line('common_browse_our_catalog'); ?></button></a>
				  </div>
				</div>

				<div class="item">
				  <img src="<?php echo base_url(); ?>assets/images/slider.jpg" alt="">
				  <div class="carousel-caption">
					<p>Custom Work Clothes</p>
					<h2>To Your Industry</h2>
					<a href="#"><button><?php echo $this->lang->line('common_browse_our_catalog'); ?></button></a>
				  </div>
				</div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<i class="icon left arrow_carrot-left"></i>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<i class="icon arrow_carrot-right"></i>
				<span class="sr-only">Next</span>
			  </a>
			</div>
	</section>
	<!--
		<div class="container">
			<div class="row">
				<div class="col-lg-7 "></div>
				<div class="col-lg-5 ">
					<p>Custom Work Clothes</p>
					<h2>To Your Industry</h2>
					<br/>
					<a href="#"><button>Browse Our Catalog</button></a>
				</div>
			</div>
		</div>
    
	-->
    <!-- Content Section -->
    <section class="main_content">
        <div class="container">
            <div class="row">
				<a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/work_clothing/clothing">
				<div class="col-lg-6 section1">
					<div class="col-lg-6">
						<h3 class="thick-font">Vestes</h3>
						<h5 class="small-font">De Travail</h5>
					</div>
					<div class="col-lg-6"></div>
					
				</div>
				</a>
				<a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/work_clothing/clothing">
				<div class="col-lg-6 section2">
					<div class="col-lg-6">
						<h3 class="thick-font">Pantalons</h3>
						<h5 class="small-font">De Travail</h5>
					</div>
					<div class="col-lg-6"></div>				
				</div>
				</a>
			</div>
            <div class="row">
				<a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/work_clothing/clothing">
				<div class="col-lg-6 section3">
					<div class="col-lg-6">
						<h3 class="thick-font">Safety</h3>
						<h5 class="small-font">De Travail</h5>
					</div>
					<div class="col-lg-6"></div>				
				</div>
				</a>
				<a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/work_clothing/clothing">
				<div class="col-lg-6 section4">
					<div class="col-lg-6">
						<h3 class="thick-font">Chaussures</h3><h5 class="small-font">De securité</h5> 	
					</div>
					<div class="col-lg-6"></div>				
				</div>
				</a>
			</div>
		</div>
    </section>

			<div class="row">
				<div class="col-lg-12 tex_center">
					<p><?php echo $this->lang->line('common_discover_our'); ?></p>
					<h2 class="thick-font"><?php echo $this->lang->line('common_work_clothing'); ?></h2>
					<a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/shop/our_shop"><button> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> <?php echo $this->lang->line('common_visit_our_shop'); ?></button></a>
				</div>	
			</div>
	<section class="footer_container">
		<div class="container ">
            <div class="row">
				<div class="col-lg-6 footer_left">
					<h3 class="thick-font"><?php echo $this->lang->line('common_what_is_perfecta'); ?></h3>
					<p>Si vous recherchez des vêtements professionnels pour l'Horeca, les travaux publics, les laboratoires, etc Perfecta est là !</p>
					<p>Cette boutique ne date pas d'hier, ce qui prouve qu'elle a fait ses preuves dans ce domaine particulier.
					</p><p>La dame aux commandes de ce sanctuaire du vêtement de travail est assez amusante avec un coté pince sans rire ! On sent qu'elle en a vu de la clientèle.</p>
				</div>
				<div class="col-lg-6 footer_right">
					<h4><img src="<?php echo base_url(); ?>assets/images/acc.png" alt=""/> <?php echo $this->lang->line('common_specific_materials'); ?></h4>
					<h4><img src="<?php echo base_url(); ?>assets/images/cacy.png" alt=""/> <?php echo $this->lang->line('common_tailormade_service'); ?></h4>
					<h4><img src="<?php echo base_url(); ?>assets/images/pre.png" alt=""/> <?php echo $this->lang->line('common_premium_quality'); ?></h4>
				</div>
			</div>
		</div>
	</section>
	<div class="arrow"><img src="<?php echo base_url(); ?>assets/images/arrow.png"/></div>
	<section>
		<div class="container">
			<div class="row h_a_q">
				<div class="col-lg-6">
					<p><?php echo $this->lang->line('common_have_a_question'); ?></p>
					<h2 class="thick-font"><?php echo $this->lang->line('common_want_an_offer'); ?></h2>
				</div>
				<div class="col-lg-6">
					<a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/contact"><button>
					<i class="icon_mail glyphicon"></i> <?php echo $this->lang->line('common_contact_us'); ?></button></a>
				</div>
			</div>
		</div>
	</section>

<?php $this->load->view('footer'); ?>