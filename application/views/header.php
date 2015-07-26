<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfecta</title>
	
    <!-- font  CSS -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- full width CSS -->
    <link href="<?php echo base_url(); ?>assets/css/full-width-pics.css" rel="stylesheet">

    <!-- ET Icons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/et-icons.css" rel="stylesheet">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/footer_logo.png"/>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Perfecta"/></a>
				
            </div>
			
			<div style="float: right;">			
				<ul class="nav navbar-nav">
					<li style="padding-left:0px; width:25px;"><a class="<?php echo $this->config->item('language')=='english'?'active':''; ?>" href="<?php echo base_url(); ?>en/init/set_language/english/<?php echo $this->router->class; ?>/<?php echo $this->router->method; ?>/<?php echo $this->uri->segment(2)?$this->uri->segment(2):''; ?>">EN</a> </li>
					<li style="padding-left:0px; width:25px;"><a class="<?php echo $this->config->item('language')=='dutch'?'active':''; ?>" href="<?php echo base_url(); ?>nl/init/set_language/dutch/<?php echo $this->router->class; ?>/<?php echo $this->router->method; ?>/<?php echo $this->uri->segment(2)?$this->uri->segment(2):''; ?>">NL</a> </li>
				</ul><!-- /select-language -->
			</div>
			
			
			
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
				
				
                <ul class="nav navbar-nav">
					
                    <li>
                        <a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/" class="<?php echo $page=='home'?'active':''; ?>"><?php echo $this->lang->line('common_home'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/work_clothing/clothing" class="<?php echo $page=='work'?'active':''; ?>"><?php echo $this->lang->line('common_work_clothing'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/shop/our_shop" class="<?php echo $page=='shop'?'active':''; ?>"><?php echo $this->lang->line('common_our_shop'); ?></a>
                    </li>
					<li>
                        <a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/contact" class="<?php echo $page=='contact'?'active':''; ?>"><?php echo $this->lang->line('common_contact_us'); ?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>