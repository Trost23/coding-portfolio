<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<title> | Projects</title>
	<link rel="stylesheet" href="../../css/style.css" id="style-resource-5">
	<script type="text/javascript" src="../../js/Script.js"></script>
	<link rel="stylesheet" href="../../css/dashMain.css">
	<link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" type="text/css" rel="stylesheet">
	<style>
		.page-container .sidebar-menu #main-menu li#paymnt>a {
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

			<h2>Projects</h2>

			<hr />

			<table style="border:1px solid black;margin-left:auto;margin-right:auto;">

				<thead>
					<tr>
						<th>Sl.No</th>
						<th>Name</th>
						<th>Reason</th>
						<th>Link</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>1</td>
						<td>Flutter(Course)</td>
						<td>Personal</td>
						<td><a href="https://github.com/londonappbrewery/Flutter-Course-Resources">Course Material</a></td>

					</tr>
					<tr>
						<td>2</td>
						<td>Unity Game</td>
						<td>Personal</td>
						<td><a href="https://arola.itch.io/blindheart">BlindHeart</a></td>
					<tr>
						<td>3</td>
						<td>PHP Back-End</td>
						<td>Assigned</td>
						<td><a href="https://github.com/albinq/PI19_20_Gr14">Gym Website</a></td>
					<tr>
						<td>4</td>
						<td>Socket Programming</td>
						<td>Assigned</td>
						<td><a href="https://github.com/albinq/Socket-Programming ">Sockets with Python</a></td>



				</tbody>

			</table>



		</div>

</body>

</html>