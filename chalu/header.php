<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/index.css">
<title>Scout Monitoring Web Site</title>
</head>
<body>
	<div class="wrapper">

		<div class="topbar clearfix">
			<div class="topbarLinks">
				<div class="navbar-collapse" id="navbar1">
					<ul class="nav navbar-nav navbar-left">
				<?php if (isset($_SESSION['user_id'])) { ?>
						<li><p class="navbar-text" style="color:white;"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['user_name']; ?></strong></p></li>
						<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
						<li><a href="login.php">Login</a></li>
						<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
					</ul>
				</div>
			</div><!-- topbarLinks -->
			<div class="topbarImg">
				<img src="img/logo.png" alt="" width="45px" height="45px">
			</div><!-- topbarImg -->
		</div><!-- topbar -->

		<header class="clearfix">
			<div class="logo">
				<h1>Minuwangoda President's College <br>Scout Troop</h1>
				<p>Be prepear...</p>
			</div><!-- logo -->
			<div class="socialmedia">
				<ul>
						<li><a href="https://web.facebook.com/mpcrovers?_rdc=1&_rdr"><i class="bi bi-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/presidents_scouts_official/"><i class="bi bi-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UC0L2ojwgOfCbDi1YEgboAdw"><i class="bi bi-youtube"></i></a></li>
						<li><a href="https://api.whatsapp.com/send/?phone=94766868904&text&app_absent=0"><i class="bi bi-whatsapp"></i></a></li>
						<li><a href="http://35.238.59.248"><i class="bi bi-google"></i></a></li>
				</ul>
			</div><!-- socialmedia -->
		</header>
