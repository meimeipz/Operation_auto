<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>eshop</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="assets/css/component.css">
	<link rel="stylesheet" href="assets/css/demo.css" />
	<link rel="stylesheet" href="assets/css/component.css" />

	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>

	<!-- Imported scripts on this page -->
	<script src="assets/js/xenon-widgets.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
	<script src="assets/js/toastr/toastr.min.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body class="page-body">

	<div class="settings-pane">
			
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		
		<div class="settings-pane-inner">
			
			<div class="row">
				
				<div class="col-md-4">
					
					<div class="user-info">
						
						<div class="user-image">
							<a href="extra-profile.html">
								<img src="assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>

						<!--用户资料-->
						
						<div class="user-details">
							
							<h3>
								<a href="extra-profile.html">John Smith</a>
								
								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>
							
							<p class="user-title">Web Developer</p>
							
							<div class="user-links">
								<!--a href="extra-profile.html" class="btn btn-primary">Edit Profile</a-->
								<a href="extra-profile.html" class="btn btn-success">编辑资料</a>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-md-8 link-blocks-env">
					
					<div class="links-block left-sep">
						<h4>
							<span>通知</span>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
								<label for="sp-chk1">邮件</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
								<label for="sp-chk2">待处理事件</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
								<label for="sp-chk3">跟踪信息</label>
							</li>
							
						</ul>
					</div>
					
					
					
				</div>
				
			</div>
		
		</div>
		
	</div>
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="logo">
						<a href="dashboard-1.html" class="logo-expanded">
							<img src="assets/images/logo.png" width="80" alt="" />
						</a>
						
						<a href="dashboard-1.html" class="logo-collapsed">
							<img src="assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>
					
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>
						
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
					
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<div class="settings-icon">
						<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
					</div>
					
								
				</header>
						
				
						
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li class="active opened active">
						<a href="dashboard-1.html">
							<i class="linecons-cog"></i>
							<span class="title">配置管理</span>
						</a>
						<ul>
							<li class="active">
								<a href="dashboard-1.html">
									<span class="title">用户信息配置管理</span>
								</a>
							</li>
							<li>
								<a href="dashboard-2.html">
									<span class="title">部门组织架构管理</span>
								</a>
							</li>
							<li>
								<a href="dashboard-3.html">
									<span class="title">领导层管理</span>
								</a>
							</li>
							
						</ul>
					</li>
					<li>
						<a href="layout-variants.html">
							<i class="linecons-desktop"></i>
							<span class="title">打印管理</span>
						</a>
						<ul>
							<li>
								<a href="layout-variants.html">
									<span class="title">打印统计</span>
								</a>
							</li>
							<li>
								<a href="layout-collapsed-sidebar.html">
									<span class="title">打印审计</span>
								</a>
							</li>
							
						</ul>
					</li>
					<li>
						<a href="ui-panels.html">
							<i class="linecons-note"></i>
							<span class="title">IT资产管理</span>
						</a>
						<ul>
							<li>
								<a href="ui-panels.html">
									<span class="title">资产查询</span>
								</a>
							</li>
							<li>
								<a href="ui-tabs-accordions.html">
									<span class="title">资产统计</span>
								</a>
							</li>

							<li>
								<a href="ui-buttons.html">
									<span class="title">资产任务派发</span>
								</a>
							</li>
							<li>
								<a href="ui-tabs-accordions.html">
									<span class="title">资产任务处理</span>
								</a>
							</li>
							
							
						</ul>
					</li>
					<li>
						<a href="ui-widgets.html">
							<i class="linecons-star"></i>
							<span class="title">Widgets</span>
						</a>
					</li>
					<li>
						<a href="mailbox-main.html">
							<i class="linecons-mail"></i>
							<span class="title">Mailbox</span>
							<span class="label label-success pull-right">5</span>
						</a>
						<ul>
							<li>
								<a href="mailbox-main.html">
									<span class="title">Inbox</span>
								</a>
							</li>
							<li>
								<a href="mailbox-compose.html">
									<span class="title">Compose Message</span>
								</a>
							</li>
							<li>
								<a href="mailbox-message.html">
									<span class="title">View Message</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="tables-basic.html">
							<i class="linecons-database"></i>
							<span class="title">Tables</span>
						</a>
						<ul>
							<li>
								<a href="tables-basic.html">
									<span class="title">Basic Tables</span>
								</a>
							</li>
							<li>
								<a href="tables-responsive.html">
									<span class="title">Responsive Table</span>
								</a>
							</li>
							<li>
								<a href="tables-datatables.html">
									<span class="title">Data Tables</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="forms-native.html">
							<i class="linecons-params"></i>
							<span class="title">Forms</span>
						</a>
						<ul>
							<li>
								<a href="forms-native.html">
									<span class="title">Native Elements</span>
								</a>
							</li>
							<li>
								<a href="forms-advanced.html">
									<span class="title">Advanced Plugins</span>
								</a>
							</li>
							<li>
								<a href="forms-wizard.html">
									<span class="title">Form Wizard</span>
								</a>
							</li>
							<li>
								<a href="forms-validation.html">
									<span class="title">Form Validation</span>
								</a>
							</li>
							<li>
								<a href="forms-input-masks.html">
									<span class="title">Input Masks</span>
								</a>
							</li>
							<li>
								<a href="forms-file-upload.html">
									<span class="title">File Upload</span>
								</a>
							</li>
							<li>
								<a href="forms-editors.html">
									<span class="title">Editors</span>
								</a>
							</li>
							<li>
								<a href="forms-sliders.html">
									<span class="title">Sliders</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-gallery.html">
							<i class="linecons-beaker"></i>
							<span class="title">Extra</span>
							<span class="label label-purple pull-right hidden-collapsed">New Items</span>
						</a>
						<ul>
							<li>
								<a href="extra-icons-fontawesome.html">
									<span class="title">Icons</span>
									<span class="label label-warning pull-right">4</span>
								</a>
								<ul>
									<li>
										<a href="extra-icons-fontawesome.html">
											<span class="title">Font Awesome</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-linecons.html">
											<span class="title">Linecons</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-elusive.html">
											<span class="title">Elusive</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-meteocons.html">
											<span class="title">Meteocons</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-maps-google.html">
									<span class="title">Maps</span>
								</a>
								<ul>
									<li>
										<a href="extra-maps-google.html">
											<span class="title">Google Maps</span>
										</a>
									</li>
									<li>
										<a href="extra-maps-advanced.html">
											<span class="title">Advanced Map</span>
										</a>
									</li>
									<li>
										<a href="extra-maps-vector.html">
											<span class="title">Vector Map</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-gallery.html">
									<span class="title">Gallery</span>
								</a>
							</li>
							<li>
								<a href="extra-calendar.html">
									<span class="title">Calendar</span>
								</a>
							</li>
							<li>
								<a href="extra-profile.html">
									<span class="title">Profile</span>
								</a>
							</li>
							<li>
								<a href="extra-login.html">
									<span class="title">Login</span>
								</a>
							</li>
							<li>
								<a href="extra-lockscreen.html">
									<span class="title">Lockscreen</span>
								</a>
							</li>
							<li>
								<a href="extra-login-light.html">
									<span class="title">Login Light</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline.html">
									<span class="title">Timeline</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline-center.html">
									<span class="title">Timeline Centerd</span>
								</a>
							</li>
							<li>
								<a href="extra-notes.html">
									<span class="title">Notes</span>
								</a>
							</li>
							<li>
								<a href="extra-image-crop.html">
									<span class="title">Image Crop</span>
								</a>
							</li>
							<li>
								<a href="extra-portlets.html">
									<span class="title">Portlets</span>
								</a>
							</li>
							<li>
								<a href="blank-sidebar.html">
									<span class="title">Blank Page</span>
								</a>
							</li>
							<li>
								<a href="extra-search.html">
									<span class="title">Search</span>
								</a>
							</li>
							<li>
								<a href="extra-invoice.html">
									<span class="title">Invoice</span>
								</a>
							</li>
							<li>
								<a href="extra-not-found.html">
									<span class="title">404 Page</span>
								</a>
							</li>
							<li>
								<a href="extra-tocify.html">
									<span class="title">Tocify</span>
								</a>
							</li>
							<li>
								<a href="extra-loader.html">
									<span class="title">Loading Progress</span>
								</a>
							</li>
							<li>
								<a href="extra-page-loading-ol.html">
									<span class="title">Page Loading Overlay</span>
								</a>
							</li>
							<li>
								<a href="extra-notifications.html">
									<span class="title">Notifications</span>
								</a>
							</li>
							<li>
								<a href="extra-nestable-lists.html">
									<span class="title">Nestable Lists</span>
								</a>
							</li>
							<li>
								<a href="extra-scrollable.html">
									<span class="title">Scrollable</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="charts-main.html">
							<i class="linecons-globe"></i>
							<span class="title">Charts</span>
						</a>
						<ul>
							<li>
								<a href="charts-main.html">
									<span class="title">Chart Variants</span>
								</a>
							</li>
							<li>
								<a href="charts-range.html">
									<span class="title">Range Selector</span>
								</a>
							</li>
							<li>
								<a href="charts-sparklines.html">
									<span class="title">Sparklines</span>
								</a>
							</li>
							<li>
								<a href="charts-map.html">
									<span class="title">Map Charts</span>
								</a>
							</li>
							<li>
								<a href="charts-gauges.html">
									<span class="title">Circular Gauges</span>
								</a>
							</li>
							<li>
								<a href="charts-bar-gauges.html">
									<span class="title">Bar Gauges</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="linecons-cloud"></i>
							<span class="title">Menu Levels</span>
						</a>
						<ul>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.1</span>
								</a>
								<ul>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.1</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.2</span>
										</a>
										<ul>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.1</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.2</span>
												</a>
												<ul>
													<li>
														<a href="#">
															<i class="entypo-flow-branch"></i>
															<span class="title">Menu Level 4.1</span>
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.3</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.2</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.3</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
						
			</div>
			
		</div>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
					
					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green">15</span>
						</a>
							
						<ul class="dropdown-menu messages">
							<li>
									
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
								
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
											
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
											
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
											
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
											
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
									
									<!-- Repeated -->
									
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
											
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
											
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
											
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
											
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
									
								</ul>
								
							</li>
							
							<li class="external">
								<a href="blank-sidebar.html">
									<span>All Messages</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple">7</span>
						</a>
							
						<ul class="dropdown-menu notifications">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
									<li class="active notification-success">
										<a href="#">
											<i class="fa-user"></i>
											
											<span class="line">
												<strong>New user registered</strong>
											</span>
											
											<span class="line small time">
												30 seconds ago
											</span>
										</a>
									</li>
									
									<li class="active notification-secondary">
										<a href="#">
											<i class="fa-lock"></i>
											
											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>
											
											<span class="line small time">
												3 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-primary">
										<a href="#">
											<i class="fa-thumbs-up"></i>
											
											<span class="line">
												<strong>Someone special liked this</strong>
											</span>
											
											<span class="line small time">
												2 minutes ago
											</span>
										</a>
									</li>
									
									<li class="notification-danger">
										<a href="#">
											<i class="fa-calendar"></i>
											
											<span class="line">
												John cancelled the event
											</span>
											
											<span class="line small time">
												9 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-info">
										<a href="#">
											<i class="fa-database"></i>
											
											<span class="line">
												The server is status is stable
											</span>
											
											<span class="line small time">
												yesterday at 10:30am
											</span>
										</a>
									</li>
									
									<li class="notification-warning">
										<a href="#">
											<i class="fa-envelope-o"></i>
											
											<span class="line">
												New comments waiting approval
											</span>
											
											<span class="line small time">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">
									<span>View all notifications</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
					
				</ul>
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
					<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
						
						<form method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
							
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
						
					</li>
					
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								Arlind Nushi
								<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
									New Post
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="#help">
									<i class="fa-info"></i>
									Help
								</a>
							</li>
							<li class="last">
								<a href="extra-lockscreen.html">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
					
			
					
				</ul>
				
			</nav>

<div id="data_display">

<!--注释table
<table cellpadding=6 cellspacing=10>
<?php if(is_array($list)): foreach($list as $key=>$vo): endforeach; endif; ?>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td ><?php echo ($vo["id"]); ?></td>
<td ><?php echo ($vo["product_type"]); ?></td>
<td ><?php echo ($vo["description"]); ?></td>
<td ><?php echo ($vo["image_url"]); ?></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>        
</tr>
</table>
-->
<!--Page是分页码条-->

<!--div class="container"-->

	<div class="component">
		<table>
			<thead>
				<tr>
					<th>设备序号</th>
					<th>设备类型</th>
					<th>生产商</th>
					<th>设备描述</th>
				</tr>
			</thead>
			<tbody>
				
				<!--注释：list手动显示-->
				<!--tr>
					<td class="user-name">gary coleman</td>
					<td class="user-email">gary.coleman21@example.com</td>
					<td class="user-phone">(398)-332-5385</td>
					<td class="user-mobile">(888)-677-3719</td>
				</tr>

				<tr>
					<td class="user-name">gary coleman</td>
					<td class="user-email">gary.coleman21@example.com</td>
					<td class="user-phone">(398)-332-5385</td>
					<td class="user-mobile">(888)-677-3719</td>
				</tr-->

				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td ><?php echo ($vo["product_id"]); ?></td>
					<td ><?php echo ($vo["product_type"]); ?></td>
					<td ><?php echo ($vo["producer"]); ?></td>
					<td ><?php echo ($vo["description"]); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>

			</tbody>

		</table>
	</div>
<!--/div--><!-- /container -->

<div class="result page"><?php echo ($page); ?></div> 
</div>
</body>