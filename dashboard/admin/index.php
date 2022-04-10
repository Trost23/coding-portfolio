<?php
require '../../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">

<head>


	<title>Albin Qerimi | Portfolio </title>

	<link rel="stylesheet" href="../../css/style.css" id="style-resource-5">
	<script type="text/javascript" src="../../js/Script.js"></script>
	<link rel="stylesheet" href="../../css/dashMain.css">
	<link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<style>
		.page-container .sidebar-menu #main-menu li#dash>a {
			background-color: #2b303a;
			color: #ffffff;
		}
	</style>

</head>

<body class="page-body  page-fade" onload="collapseSidebar()">

	<div class="page-container sidebar-collapsed" id="navbarcollapse">

		<div class="sidebar-menu">

			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="#">
						<img src="../../images/logo.png" alt="" width="192" height="80" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse" onclick="collapseSidebar()">
					<a href="#" class="sidebar-collapse-icon with-animation">
						<!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>



			</header>
			<?php include('nav.php'); ?>
		</div>

		<div class="main-content">

			<div class="row">

				<!-- Profile Info and Notifications -->
				<div class="col-md-6 col-sm-8 clearfix">

				</div>


				<!-- Raw Links -->
				<div class="col-md-6 col-sm-4 clearfix hidden-xs">

					<ul class="list-inline links-list pull-right">

						<li>Welcome <?php echo $_SESSION['full_name']; ?>
						</li>

						<li>
							<a href="logout.php">
								Log Out <i class="entypo-logout right"></i>
							</a>
						</li>
					</ul>

				</div>

			</div>

			<h2>Albin Qerimi</h2>

			<hr>

			<div class="col-sm-3"><a href="about_me.php">
					<div class="tile-stats tile-red">
						<div class="icon"><i class="entypo-users"></i></div>
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
							<h2>About Me</h2><br>

						</div>
					</div>
				</a>
			</div>


			<div class="col-sm-3"><a href="contact.php">
					<div class="tile-stats tile-green">
						<div class="icon"><i class="entypo-chart-bar"></i></div>
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
							<h2>Contact</h2><br>

						</div>
					</div>
				</a>
			</div>



			<div class="col-sm-3"><a href="view_mem.php">
					<div class="tile-stats tile-blue">
						<div class="icon"><i class="entypo-rss"></i></div>
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
							<h2>Total Viewers</h2><br>

						</div>
					</div>
				</a>
			</div>



</body>

</html>