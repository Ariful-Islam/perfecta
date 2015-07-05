<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8"/>
		<title>TeamHDN :: Admin</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta content="" name="description"/>
		<meta content="" name="author"/>
		
		<script>
			var BASE_URL = "<?php echo base_url(); ?>";
		</script>
		
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
		<!-- END GLOBAL MANDATORY STYLES -->
		
		<!-- BEGIN PAGE LEVEL STYLES -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/global/plugins/select2/select2.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
		<!-- END PAGE LEVEL STYLES -->
		
		<!-- BEGIN THEME STYLES -->
		<link href="<?php echo base_url(); ?>/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>/assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
		<link id="style_color" href="<?php echo base_url(); ?>/assets/admin/layout2/css/themes/grey.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>/assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
		<!-- END THEME STYLES -->
		<link rel="shortcut icon" href="favicon.ico"/>
	</head>
	<!-- END HEAD -->

	<!-- BEGIN BODY -->
	<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
	<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
	<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
	<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
	<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
	<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
	<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
	<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
	<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
	<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo ">
		<!-- BEGIN HEADER -->
		<div class="page-header navbar navbar-fixed-top">
			<!-- BEGIN HEADER INNER -->
			<div class="page-header-inner container">
				<!-- BEGIN LOGO -->
				<div class="page-logo">
					<a href="<?php echo base_url(); ?>admin/dashboard">
					<img style="margin: 22px 0 0 20px; width:50px;" src="<?php echo base_url(); ?>/assets/img/logo_ergonomic.png" alt="logo" class="logo-default"/>
					</a>
					<div class="menu-toggler sidebar-toggler">
						<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
					</div>
				</div>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
				</a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<!-- BEGIN PAGE ACTIONS -->
				<!-- DOC: Remove "hide" class to enable the page header actions -->
				<div class="page-actions hide">
					<div class="btn-group">
						<button type="button" class="btn btn-circle red-pink dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bar-chart"></i>&nbsp;<span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="javascript:;">
								<i class="icon-user"></i> New User </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-present"></i> New Event <span class="badge badge-success">4</span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-basket"></i> New order </a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-flag"></i> Pending Orders <span class="badge badge-danger">4</span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-users"></i> Pending Users <span class="badge badge-warning">12</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-circle green-haze dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bell"></i>&nbsp;<span class="hidden-sm hidden-xs">Post&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="javascript:;">
								<i class="icon-docs"></i> New Post </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-tag"></i> New Comment </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-share"></i> Share </a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-flag"></i> Comments <span class="badge badge-success">4</span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- END PAGE ACTIONS -->
				<!-- BEGIN PAGE TOP -->
				<div class="page-top">
					<!-- BEGIN TOP NAVIGATION MENU -->
					<div class="top-menu">
						<ul class="nav navbar-nav pull-right">
							
							<!-- BEGIN USER LOGIN DROPDOWN -->
							<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
							<li class="dropdown dropdown-user">
								<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<!-- <img alt="" class="img-circle" src="<?php echo base_url(); ?>/assets/admin/layout2/img/avatar3_small.jpg"/> -->
								<span class="username username-hide-on-mobile">
								Admin </span>
								<i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-default">
									<li>
										<a href="<?php echo base_url(); ?>admin/do_signout">
										<i class="icon-key"></i> Log Out </a>
									</li>
								</ul>
							</li>
							<!-- END USER LOGIN DROPDOWN -->
						</ul>
					</div>
					<!-- END TOP NAVIGATION MENU -->
				</div>
				<!-- END PAGE TOP -->
			</div>
			<!-- END HEADER INNER -->
		</div>
		<!-- END HEADER -->
		<div class="clearfix">
		</div>
		<div class="container">
			<!-- BEGIN CONTAINER -->
			<div class="page-container">
				<!-- BEGIN SIDEBAR -->
				<div class="page-sidebar-wrapper">
					<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
					<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
					<div class="page-sidebar navbar-collapse collapse">
						<!-- BEGIN SIDEBAR MENU -->
						<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
						<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
						<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
						<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
						<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
						<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
						<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
							<li class="start ">
								<a href="<?php echo base_url(); ?>admin/dashboard">
								<i class="icon-home"></i>
								<span class="title">Dashboard</span>
								</a>
							</li>
							
						</ul>
						<!-- END SIDEBAR MENU -->
					</div>
				</div>
				<!-- END SIDEBAR -->
				<!-- BEGIN CONTENT -->
				<div class="page-content-wrapper">
					<div class="page-content">
						<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
						<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
										<h4 class="modal-title">Modal title</h4>
									</div>
									<div class="modal-body">
										 Widget settings form goes here
									</div>
									<div class="modal-footer">
										<button type="button" class="btn blue">Save changes</button>
										<button type="button" class="btn default" data-dismiss="modal">Close</button>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
						<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
						
						<!-- BEGIN STYLE CUSTOMIZER -->
						<div class="theme-panel">
							<div class="toggler-close">
								<i class="icon-close"></i>
							</div>
							<div class="theme-options">
								<div class="theme-option theme-colors clearfix">
									<span>
									THEME COLOR </span>
									<ul>
										<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
										</li>
										<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
										</li>
										<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
										</li>
										<li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark">
										</li>
										<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
										</li>
									</ul>
								</div>
								<div class="theme-option">
									<span>
									Theme Style </span>
									<select class="layout-style-option form-control input-small">
										<option value="square" selected="selected">Square corners</option>
										<option value="rounded">Rounded corners</option>
									</select>
								</div>
								<div class="theme-option">
									<span>
									Layout </span>
									<select class="layout-option form-control input-small">
										<option value="fluid" selected="selected">Fluid</option>
										<option value="boxed">Boxed</option>
									</select>
								</div>
								<div class="theme-option">
									<span>
									Header </span>
									<select class="page-header-option form-control input-small">
										<option value="fixed" selected="selected">Fixed</option>
										<option value="default">Default</option>
									</select>
								</div>
								<div class="theme-option">
									<span>
									Top Dropdown</span>
									<select class="page-header-top-dropdown-style-option form-control input-small">
										<option value="light" selected="selected">Light</option>
										<option value="dark">Dark</option>
									</select>
								</div>
								<div class="theme-option">
									<span>
									Sidebar Mode</span>
									<select class="sidebar-option form-control input-small">
										<option value="fixed">Fixed</option>
										<option value="default" selected="selected">Default</option>
									</select>
								</div>
								<div class="theme-option">
									<span>
									Sidebar Style</span>
									<select class="sidebar-style-option form-control input-small">
										<option value="default" selected="selected">Default</option>
										<option value="compact">Compact</option>
									</select>
								</div>
								<div class="theme-option">
									<span>
									Sidebar Menu </span>
									<select class="sidebar-menu-option form-control input-small">
										<option value="accordion" selected="selected">Accordion</option>
										<option value="hover">Hover</option>
									</select>
								</div>
								<div class="theme-option">
									<span>
									Sidebar Position </span>
									<select class="sidebar-pos-option form-control input-small">
										<option value="left" selected="selected">Left</option>
										<option value="right">Right</option>
									</select>
								</div>
								<div class="theme-option">
									<span>
									Footer </span>
									<select class="page-footer-option form-control input-small">
										<option value="fixed">Fixed</option>
										<option value="default" selected="selected">Default</option>
									</select>
								</div>
							</div>
						</div>
						<!-- END STYLE CUSTOMIZER -->
						<!-- BEGIN PAGE HEADER-->
						
						<div class="page-bar">
							<ul class="page-breadcrumb">
								<li>
									<i class="fa fa-home"></i>
									<a href="#">Home</a>
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
											<i class="fa fa-user"></i>User Contact Information
										</div>
										<div class="tools">
											<a href="javascript:;" class="reload">
											</a>
										</div>
									</div>
									<div class="portlet-body">
										<table class="table table-striped table-bordered table-hover" id="sample_2">
										<thead>
										<tr>
											<th>Full Name</th>
											<th>Contact Email</th>
											<th>Contact Phone</th>
											<th>Company</th>
											<th>Message</th>
											<th>Send at</th>
											<th>Action</th>
										</tr>
										</thead>
										<tbody>
										<?php 
										foreach($contacts as $contact)
										{
										?>
										<tr>
											<td><?php echo $contact->full_name; ?></td>
											<td><?php echo $contact->contact_email; ?></td>
											<td><?php echo $contact->contact_phone; ?></td>
											<td><?php echo $contact->company; ?></td>
											<td><?php echo $contact->message; ?></td>
											<td><?php echo $contact->created_at; ?></td>
											<td align="center"><a href="#" data-id="<?php echo $contact->id; ?>" data-link="<?php echo base_url(); ?>contact/delete_message" class="del_msg"><i class="icon-trash"></i></a></td>
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
					</div>
				</div>
				<!-- END CONTENT -->
				<!-- BEGIN QUICK SIDEBAR -->
				<!--Cooming Soon...-->
				<!-- END QUICK SIDEBAR -->
			</div>
			<!-- END CONTAINER -->
			<!-- BEGIN FOOTER -->
			<div class="page-footer">
				<div class="page-footer-inner">
					 2014 &copy;TeamHDN
				</div>
				<div class="scroll-to-top">
					<i class="icon-arrow-up"></i>
				</div>
			</div>
			<!-- END FOOTER -->
		</div>
		<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		<!-- BEGIN CORE PLUGINS -->
		<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>/assets/global/plugins/respond.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/global/plugins/excanvas.min.js"></script> 
		<![endif]-->
		<script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
		<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
		<script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
		<!-- END CORE PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/global/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
		<!-- END PAGE LEVEL PLUGINS -->
		
		<!-- START CUSTOM PLUGINS -->
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/application.js"></script>
		<!-- END CUSTOM PLUGINS -->
		
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
		<script src="<?php echo base_url(); ?>/assets/global/scripts/metronic.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>/assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>/assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>/assets/admin/pages/scripts/table-advanced.js"></script>
		<script>
			jQuery(document).ready(function() {       
				Metronic.init(); // init metronic core components
				Layout.init(); // init current layout
				Demo.init(); // init demo features
				TableAdvanced.init();
				
				
				
				
			});
		</script>
	</body>
	<!-- END BODY -->
</html>