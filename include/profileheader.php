<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="application-name" content="">
	<meta name="description" content="">
	<title>flXc!ty.COM</title>
	<link rel="stylesheet" href="dist/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="dist/css/vendor/slick-theme.css">
	<link rel="stylesheet" href="dist/css/vendor/slick.css">
	<link rel="stylesheet" href="dist/css/main.css">
	<link rel="stylesheet" href="dist/css/custom.css">
</head>
<body>
	<header class="index-nav">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-sm-12 col-md-6 primary-menu order-sm-1 order-2">
					<nav class="navbar navbar-expand-lg">
					    <div class="navbar-brand">
					    	<a class="logo js-scroll-trigger" href="./"><img src="" alt=""></a>
					    	<a class="s-logo js-scroll-trigger" href="./"><img src="" alt=""></a>
					    </div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					  	<span class="navbar-toggler-icon"></span>
					  	</button>
					
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
						    <ul class="navbar-nav ml-auto">
						      <li class="nav-item">
						        <!-- <a class="nav-link" href="./">Home</a> -->
						      </li>
						    </ul>
						</div>
					</nav>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 header-notification order-sm-2 order-1">
					<nav class="navbar navbar-expand-lg">
						<ul class="navbar-nav ml-auto right-menu">
							<li class="nav-item mr-4">
						        <a class="nav-link" href="jobs.php">Jobs</a>
							</li>
							<li class="nav-item mr-4">
						        <a class="nav-link" href="messages.php">Messages</a>
						    </li>
							<li class="nav-item mr-4">
						        <a class="nav-link" href="help.php">Help</a>
						    </li>
							<li class="nav-item">
						        <a class="nav-link bell" href="#" data-toggle="modal" data-target="#notification"><i class="far fa-bell"></i>
								<span>25</span>
						        </a>
						    </li>
						    <li class="nav-item">
						        <a class="nav-link message" href="#" data-toggle="modal" data-target="#unread-messages"><i class="far fa-envelope"></i>
								<span>05</span>
						        </a>
						    </li>
						    <li class="nav-item dropdown menu-padding dropdown-user">
						        <a class="nav-link user-img" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/user.png" alt="">
									<span class="online"></span>
						        </a>
						        <ul class="dropdown-menu">
						        	<li class="nav-item"><a href="profile.php" class="dropdown-item">Profile</a></li>
						        	<li class="nav-item"><a href="voice-demo.php" class="dropdown-item">Add Demo</a></li>
						        	<li class="nav-item"><a href="#" class="dropdown-item">Logout</a></li>
						        </ul>
						    </li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
		<!-- Modal Message -->
		<section class="modals">
		<div class="container">
			<div class="modal fade" id="unread-messages" role="dialog" tabindex="-1" aria-hidden="true">
			    <div class="modal-dialog">
			      	<div class="modal-content unread-messages"> 
				        <div class="modal-body">
					    	<div class="chatting-page">
					    		<div class="chat-freelancers">
									<div class="users">
										<ul>
											<li class="active">
												<div class="user-img">
													<img src="img/chatting/user1.jpg" alt="">
													<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
												</div>
												<div class="user-details">
													<p><a href="#">Amazingsoftware</a></p>
													<p><a href="#" class="project-name">Multi Vendor Website</a></p>
												</div>
											</li>
											<li class="active">
												<div class="user-img">
													<img src="img/chatting/user2.jpg" alt="">
													<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
												</div>
												<div class="user-details">
													<p><a href="#">John65</a></p>
													<p><a href="#" class="project-name">Write Some Software</a></p>
												</div>
											</li>
											<li class="active">
												<div class="user-img">
													<img src="img/chatting/user3.jpg" alt="">
													<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
												</div>
												<div class="user-details">
													<p><a href="#">BabyGirl</a></p>
													<p><a href="#" class="project-name">Create Powerpoint Templete</a></p>
												</div>
											</li>
											<li class="active">
												<div class="user-img">
													<img src="img/chatting/user3.jpg" alt="">
													<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
												</div>
												<div class="user-details">
													<p><a href="#">MarketingWizard</a></p>
													<p><a href="#" class="project-name">Write code get google drive</a></p>
												</div>
											</li>
											<li class="active">
												<div class="user-img">
													<img src="img/chatting/user4.jpg" alt="">
													<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
												</div>
												<div class="user-details">
													<p><a href="#">Jenelia</a></p>
													<p><a href="#" class="project-name">Google Write Code</a></p>
												</div>
											</li>
										</ul>
									</div>
								</div>
					    	</div>
				    	</div>  
			    	</div>
  				</div>
			</div>
		</div>
	</section>
	<!-- Modal Notification -->
	<section class="modals">
		<div class="container">
			<div class="modal fade" id="notification" role="dialog" tabindex="-1" aria-hidden="true">
			    <div class="modal-dialog">
			      	<div class="modal-content unread-notification"> 
				        <div class="modal-body">
					    	<div class="chatting-page">
					    		<div class="chat-freelancers">
								<div class="users">
									<ul>
										<li>
											<div class="user-img">
												<img src="img/chatting/user1.jpg" alt="">
												<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
											</div>
											<div class="notification-details">
												<p class="notification-text"><b>Rafsan</b> released a $300.00 USD milestone payment for project <b>Website Designing</b></p>
												<p class="notification-time">About 20 minutes ago</p>
											</div>
										</li>
										<li>
											<div class="user-img">
												<img src="img/chatting/user2.jpg" alt="">
												<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
											</div>
											<div class="notification-details">
												<p class="notification-text"><b>John Deo</b> released a $450.00 USD milestone payment for project <b>Website Development</b></p>
												<p class="notification-time">About 40 minutes ago</p>
											</div>
										</li>
										<li>
											<div class="user-img">
												<img src="img/chatting/user3.jpg" alt="">
												<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
											</div>
											<div class="notification-details">
												<p class="notification-text"><b>Denial Cook</b> released a $550.00 USD milestone payment for project <b>Graphic Design</b></p>
												<p class="notification-time">About 50 minutes ago</p>
											</div>
										</li>
										<li>
											<div class="user-img">
												<img src="img/chatting/user4.jpg" alt="">
												<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
											</div>
											<div class="notification-details">
												<p class="notification-text"><b>Mikel</b> released a $700.00 USD milestone payment for project <b>Logo Design</b></p>
												<p class="notification-time">About 1 hour ago</p>
											</div>
										</li>
										<li>
											<div class="user-img">
												<img src="img/chatting/user5.jpg" alt="">
												<span class="online-icon"><i class="icofont icofont-ui-press"></i></span>
											</div>
											<div class="notification-details">
												<p class="notification-text"><b>Reek</b> released a $850.00 USD milestone payment for project <b>Wordpress Development</b></p>
												<p class="notification-time">About 1 hour 20 minutes ago</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
					    	</div>
				    	</div>  
			    	</div>
  				</div>
			</div>
		</div>
	</section>