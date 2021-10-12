<?php require_once 'script/pdocrud.php'; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section>
	<header>
		<nav class="rad-navigation">
			<div class="rad-logo-container rad-nav-min">
				<a href="#" class="rad-logo"><i class=" fa fa-recycle"></i> Radar</a>
				<a href="#" class="rad-toggle-btn pull-right"><i class="fa fa-bars"></i></a>
			</div>
			<a href="#" class="rad-logo-hidden">Radar</a>
			<div class="rad-top-nav-container">
				<a href="" class="brand-icon"><i class="fa fa-recycle"></i></a>
				<ul class="pull-right links">
					<li class="rad-dropdown no-color">
						<a class="rad-menu-item" href="#"><img class="rad-list-img sm-img" src="https://lh4.googleusercontent.com/-GXmmnYTuWkg/AAAAAAAAAAI/AAAAAAAAAAA/oK6DEDS7grM/w56-h56/photo.jpg" alt="me" /></a>
						<ul class="rad-dropmenu-item sm-menu">
							<li class="rad-notification-item">
								<a class="rad-notification-content lg-text" href="#"><i class="fa fa-edit"></i> My Profile</a>
							</li>
							<li class="rad-notification-item">
								<a class="rad-notification-content lg-text" href="#"><i class="fa fa-power-off"></i> Sign out</a>
							</li>
						</ul>
					</li>
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-cog"></i></a>
						<ul class="rad-dropmenu-item rad-settings">
							<li class="rad-dropmenu-header"><a href="#">Settings</a></li>
							<li class="rad-notification-item text-left">
								<div class="pull-left"><i class="fa fa-link"></i></div>
								<div class="pull-right">
									<label class="rad-chk-pin pull-right">
										<input type="checkbox" /><span></span></label>
								</div>
								<div class="rad-notification-body">
									<div class="lg-text">Change to Flat Theme</div>
									<div class="sm-text">Flattify it</div>
								</div>
							</li>
							<li id="rad-color-opts" class="rad-notification-item text-left hide">
								<div class="pull-left"><i class="fa fa-puzzle-piece"></i></div>
								<div class="pull-right">
									<div class="rad-color-swatch">
										<label class="colors rad-bg-crimson rad-option-selected">
											<input type="radio" checked name="color" value="crimson" />
										</label>
										<label class="colors rad-bg-teal">
											<input type="radio" name="color" value="teal" />
										</label>
										<label class="colors rad-bg-purple">
											<input type="radio" name="color" value="purple">
										</label>
										<label class="colors rad-bg-orange">
											<input type="radio" name="color" value="orange" />
										</label>
										<label class="colors rad-bg-twitter">
											<input type="radio" name="color" value="twitter" />
										</label>
									</div>
								</div>
								<div class="rad-notification-body">
									<div class="lg-text">Choose a color</div>
									<div class="sm-text">Make it colorful</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="pull-right links">
					<li>
						<a class="rad-menu-item" href="#"><i class="fa fa-comment-o"><span class="rad-menu-badge rad-bg-success">0</span></i></a>
					</li>
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-envelope-o"><span class="rad-menu-badge rad-bg-primary">23</span></i></a>
						<ul class="rad-dropmenu-item">
							<li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-html5 fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Introduction to fetch()</div>
										<div class="sm-text">The fetch API</div>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-bitbucket fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Check your BitBucket</div>
										<div class="sm-text">Last Chance</div>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-google fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Google Account</div>
										<div class="sm-text">sathishlxg@gmail.com</div>
									</div>
								</a>
							</li>
							<li class="rad-dropmenu-footer"><a href="#">See all notifications</a></li>
						</ul>
					</li>
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-bell-o"><span class="rad-menu-badge">49</span></i></a>
						<ul class="rad-dropmenu-item">
							<li class="rad-dropmenu-header"><a href="#">Your Alerts</a></li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-html5 fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Introduction to fetch()</div>
										<div class="sm-text">The fetch API</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 2 sec ago</em>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-bitbucket fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Check your BitBucket</div>
										<div class="sm-text">Last Chance</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 49 mins ago</em>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-google fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Google Account</div>
										<div class="sm-text">sathishlxg@gmail.com</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 2 days ago</em>
									</div>
								</a>
							</li>
							<li class="rad-dropmenu-footer"><a href="#">See all alerts</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
</section>
<aside>
	<nav class="rad-sidebar rad-nav-min">
		<ul>
			<li>
				<a href="#" class="inbox">
					<i class="fa fa-dashboard"><span class="icon-bg rad-bg-success"></span></i>
					<span class="rad-sidebar-item">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-bar-chart-o">
						<span class="icon-bg rad-bg-danger"></span>
					</i>
					<span class="rad-sidebar-item">Ticket status</span>
				</a>
			</li>
			<li><a href="#" class="snooz"><i class="fa fa-line-chart"><span class="icon-bg rad-bg-primary"></span></i><span class="rad-sidebar-item">Call trends</span></a></li>
			<li><a href="#" class="done"><i class="fa fa-area-chart"><span class="icon-bg rad-bg-warning"></span></i><span class="rad-sidebar-item">Heat maps</span></a></li>
			<li>
				<a href="#">
					<i class="fa fa-wrench"><span class="icon-bg rad-bg-violet"></span></i>
					<span class="rad-sidebar-item">Settings</span>
				</a>
			</li>
		</ul>
	</nav>
</aside>
<main>
	<section>
		<div class="rad-body-wrapper rad-nav-min">
			<div class="container-fluid">
				<header class="rad-page-title">
					<span>Dashboard</span>
					<small class="md-txt">Welcome Sathish, <a href="https://www.google.com/maps/place/3720+Emerald+St,+Torrance,+CA+90503/@33.8403836,-118.3543828,17z/data=!4m18!1m15!4m14!1m6!1m2!1s0x80c2b4d407f58b11:0xdedca55964c89054!2s3720+Emerald+St,+Torrance,+CA+90503!2m2!1d-118.3520761!2d33.8403792!1m6!1m2!1s0x80c2b4d407f58b11:0xdedca55964c89054!2s3720+Emerald+St,+Torrance,+CA+90503!2m2!1d-118.3520761!2d33.8403792!3m1!1s0x80c2b4d407f58b11:0xdedca55964c89054" target="_blank"><i class="fa fa-map-marker rad-txt-danger"></i> California</a></small>					</header>
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box rad-txt-success">
							<i class="fa fa-windows"></i>
							<span class="heading">Microsoft</span>
							<span class="value"><span>4949</span></span>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box rad-txt-primary">
							<i class="fa fa-facebook"></i>
							<span class="heading">Facebook</span>
							<span class="value"><span>23K</span></span>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box rad-txt-danger">
							<i class="fa fa-google-plus"></i>
							<span class="heading">Google</span>
							<span class="value"><span>49M</span></span>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="rad-info-box">
							<i class="fa fa-apple"></i>
							<span class="heading">Apple</span>
							<span class="value"><span>10.9K</span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">World Map<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body rad-map-container">
							<?php /*
                $pdocrud = new PDOCrud(false, "pure", "pure");
				$pdocrud->tableHeading("");
				$pdocrud->tableSubHeading("");
$pdocrud->setSettings("pagination", false);
$pdocrud->setSettings("searchbox", false);
$pdocrud->setSettings("deleteMultipleBtn", false);
$pdocrud->setSettings("recordsPerPageDropdown", false);
$pdocrud->setSettings("recordsPerPageDropdown", false);
$pdocrud->setSettings("totalRecordsInfo", false);
$pdocrud->setSettings("addbtn", false);
$pdocrud->setSettings("editbtn", true);
$pdocrud->setSettings("viewbtn", true);
$pdocrud->setSettings("delbtn", true);
$pdocrud->setSettings("actionbtn", true);
$pdocrud->setSettings("checkboxCol", false);
$pdocrud->setSettings("numberCol", false);
$pdocrud->setSettings("printBtn", false);
$pdocrud->setSettings("pdfBtn", false);
$pdocrud->setSettings("csvBtn", false);
$pdocrud->setSettings("excelBtn", false);
                echo $pdocrud->dbTable("employee")->render();
               */
			  $pdocrud = new PDOCrud();
			  $pdocrud->FormSteps(array("first_name", "last_name", "email", "phone", "gender","birth_date"), "General Info");
			  $pdocrud->FormSteps(array("user_name", "password"), "Login Details");
			  $pdocrud->FormSteps(array("address", "city", "state", "country", "zip_code"), "Address");
			  $pdocrud->FormSteps(array("hobbies", "educational_status", "about_yourself", "company_name"), "Other");
			  echo $pdocrud->dbTable("users")->render("insertform"); 
			  ?>								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Area Chart
									<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="areaChart" class="rad-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Area Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="areaChart2" class="rad-chart"></div>
							</div>

						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Activity<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div class="rad-activity-body">
								<div class="rad-list-group group">
									<div class="rad-list-group-item">
										<div class="rad-list-icon icon-shadow rad-bg-danger pull-left"><i class="fa fa-phone"></i></div>
										<div class="rad-list-content"><strong>Client meeting</strong>
											<div class="md-text">Meeting at 10:00 AM</div>
										</div>
									</div>
									<div class="rad-list-group-item">
										<div class="rad-list-icon icon-shadow rad-bg-primary pull-left"><i class="fa fa-refresh"></i></div>
										<div class="rad-list-content"><strong>Created ticket</strong>
											<div class="md-text">Ticket assigned to Dev team</div>
										</div>
									</div>
									<div class="rad-list-group-item">
										<div class="rad-list-icon icon-shadow rad-bg-success pull-left"><i class="fa fa-check"></i></div>
										<div class="rad-list-content"><strong>Activity completed</strong>
											<div class="md-text">Completed the dashboard html demo</div>
										</div>
									</div>
									<div class="rad-list-group-item">
										<div class="rad-list-icon icon-shadow rad-bg-violet pull-left"><i class="fa fa-envelope"></i></div>
										<div class="rad-list-content"><strong>New Invitation</strong>
											<div class="md-text">Max has invited you to join Inbox</div>
										</div>
									</div>
									<div class="rad-list-group-item">
										<div class="rad-list-icon icon-shadow rad-bg-success pull-left"><i class="fa fa-pencil"></i></div>
										<div class="rad-list-content"><strong>New post</strong>
											<div class="md-text">Created new post</div>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-8 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Donut Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="donutChart" class="rad-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Line Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="lineChart" class="rad-chart"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Bar Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="barChart3" class="rad-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Bar Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="barChart2" class="rad-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Bar Chart<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="barChart" class="rad-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Chat<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div class="rad-chat-body">
									<div class="rad-list-group">
										<div class="rad-list-group-item left">
											<span class="rad-list-icon pull-left"><img class="rad-list-img" src="https://lh4.googleusercontent.com/-GXmmnYTuWkg/AAAAAAAAAAI/AAAAAAAAAAA/oK6DEDS7grM/w56-h56/photo.jpg" alt="me" /></span>
											<div class="rad-list-content rad-chat">
												<span class="lg-text">Me</span>
												<span class="sm-text"><i class="fa fa-clock-o"></i> 11:20 pm</span>
												<div class="rad-chat-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.</div>
											</div>
										</div>
										<div class="rad-list-group-item right">
											<span class="rad-list-icon pull-right"><img class="rad-list-img" src="http://www.gravatar.com/avatar/9099c2946891970eb4739e6455400913.png" alt="sathish"></span>
											<div class="rad-list-content rad-chat">
												<span class="lg-text">Sathish</span>
												<span class="sm-text"><i class="fa fa-clock-o"></i> 11:30 pm</span>
												<div class="rad-chat-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
											</div>
										</div>
										<div class="rad-list-group-item left">
											<span class="rad-list-icon pull-left"><img class="rad-list-img" src="https://lh4.googleusercontent.com/-GXmmnYTuWkg/AAAAAAAAAAI/AAAAAAAAAAA/oK6DEDS7grM/w56-h56/photo.jpg" alt="me" /></span>
											<div class="rad-list-content rad-chat">
												<span class="lg-text">Me</span>
												<span class="sm-text"><i class="fa fa-clock-o"></i> 11:31 pm</span>
												<div class="rad-chat-msg">Checkout my new admin dashboard template in CSS3 <i class="fa fa-smile-o rad-txt-warning"></i></div>
											</div>
										</div>
										<div class="rad-list-group-item left">
											<span class="rad-list-icon pull-left"><img class="rad-list-img" src="https://lh4.googleusercontent.com/-GXmmnYTuWkg/AAAAAAAAAAI/AAAAAAAAAAA/oK6DEDS7grM/w56-h56/photo.jpg" alt="me" /></span>
											<div class="rad-list-content rad-chat">
												<span class="lg-text">Me</span>
												<span class="sm-text"><i class="fa fa-clock-o"></i> 11:20 pm</span>
												<div class="rad-chat-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at.</div>
											</div>
										</div>
										<div class="rad-list-group-item right">
											<span class="rad-list-icon pull-right"><img class="rad-list-img" src="http://www.gravatar.com/avatar/9099c2946891970eb4739e6455400913.png" alt="sathish"></span>
											<div class="rad-list-content rad-chat">
												<span class="lg-text">Sathish</span>
												<span class="sm-text"><i class="fa fa-clock-o"></i> 11:30 pm</span>
												<div class="rad-chat-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
											</div>
										</div>
										<div class="rad-list-group-item left">
											<span class="rad-list-icon pull-left"><img class="rad-list-img" src="https://lh4.googleusercontent.com/-GXmmnYTuWkg/AAAAAAAAAAI/AAAAAAAAAAA/oK6DEDS7grM/w56-h56/photo.jpg" alt="me" /></span>
											<div class="rad-list-content rad-chat">
												<span class="lg-text">Me</span>
												<span class="sm-text"><i class="fa fa-clock-o"></i> 11:31 pm</span>
												<div class="rad-chat-msg">Checkout my new admin dashboard template in CSS3 <i class="fa fa-smile-o rad-txt-warning"></i></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel-footer">
								<div class="input-group">
									<input type="text" id="rad-chat-txt" placeholder="Type a message" class="form-control" /><span class="input-group-btn"><button id="rad-chat-send" class="btn btn-info">Send</button></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Timeline<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div class="rad-timeline-body">
									<ul class="rad-timeline">
										<li class="rad-timeline-item">
											<div class="rad-timeline-badge rad-bg-primary"><i class="fa fa-rss"></i><span class="pull-left"><i class="fa fa-clock-o"></i> 49m ago</span></div>
											<div class="rad-timeline-panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa veniam delectus, ea voluptatum vero mollitia, magni voluptatem sapiente amet quidem, nemo aliquid qui minus iusto asperiores dolorem autem placeat iste!</div>
										</li>
										<li class="rad-timeline-item">
											<div class="rad-timeline-badge rad-bg-danger"><i class="fa fa-signal"></i><span class="pull-right"><i class="fa fa-clock-o"></i> 28m ago</span></div>
											<div class="rad-timeline-panel pull-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa veniam delectus, ea voluptatum vero mollitia</div>
										</li>
										<li class="rad-timeline-item">
											<div class="rad-timeline-badge rad-bg-success"><i class="fa fa-rocket"></i><span class="pull-left"><i class="fa fa-clock-o"></i> 23m ago</span></div>
											<div class="rad-timeline-panel ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa veniam delectus, ea voluptatum vero mollitia, magni voluptatem sapiente amet quidem, nemo aliquid qui minus iusto asperiores dolorem autem placeat iste!</div>
										</li>
										<li class="rad-timeline-item">
											<div class="rad-timeline-badge rad-bg-warning"><i class="fa fa-linux"></i><span class="pull-right"><i class="fa fa-clock-o"></i> 13m ago</span></div>
											<div class="rad-timeline-panel pull-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa veniam delectus, ea voluptatum vero mollitia, magni voluptatem sapiente amet quidem, nemo aliquid qui minus iusto asperiores dolorem autem placeat iste!. Lorem ipsum dolor sit amet,
												consectetur adipisicing elit. Ipsa veniam delectus, ea voluptatum vero mollitia, magni voluptatem sapiente amet quidem, nemo aliquid qui minus iusto asperiores dolorem autem placeat iste!</div>
										</li>
										<li class="rad-timeline-item">
											<div class="rad-timeline-badge rad-bg-violet"><i class="fa fa-stack-overflow"></i><span class="pull-left"><i class="fa fa-clock-o"></i> 13m ago</span></div>
											<div class="rad-timeline-panel ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa veniam delectus, ea voluptatum vero mollitia</div>
										</li>
										<li class="rad-timeline-item">
											<div class="rad-timeline-badge rad-bg-danger"><i class="fa fa-wordpress"></i><span class="pull-right"><i class="fa fa-clock-o"></i> 7m ago</span></div>
											<div class="rad-timeline-panel pull-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa veniam delectus, ea voluptatum vero mollitia, magni voluptatem sapiente amet quidem, nemo aliquid qui minus iusto asperiores dolorem autem placeat iste!. Lorem ipsum dolor sit amet,
												consectetur adipisicing elit. Ipsa veniam delectus, ea voluptatum vero mollitia, magni voluptatem sapiente amet quidem, nemo aliquid qui minus iusto asperiores dolorem autem placeat iste!</div>
										</li>
										<li class="rad-timeline-item">
											<div class="rad-timeline-badge rad-bg-success"><i class="fa fa-credit-card"></i><span class="pull-left"><i class="fa fa-clock-o"></i> 7m ago</span></div>
											<div class="rad-timeline-panel ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa veniam delectus, ea voluptatum vero mollitia, magni voluptatem sapiente amet quidem, nemo aliquid qui minus iusto asperiores dolorem autem placeat iste!</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="panel-footer">
								<div class="rad-timeline-footer">
									<p>There are many variations</p>
									<p class="pull-right"><i class="fa fa-comments-o"></i></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>
<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.3/jquery.slimscroll.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.8.0/lodash.min.js'></script>
<script src='https://jvectormap.com/js/jquery-jvectormap-2.0.5.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.3/jquery-jvectormap.js'></script>
<script src='https://jvectormap.com/js/jquery-jvectormap-world-mill.js'></script><script  src="./script.js"></script>

</body>
</html>
