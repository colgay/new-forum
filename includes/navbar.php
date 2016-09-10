<?php if (!isset($_SESSION)) session_start(); ?>

<nav class="navbar navbar-default navbar-blue navbar-static-top" role="navigation">
	<div class="container-fluid container-page">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img alt="HKGSE" src="images/best.png"></a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">Blog</a></li>
			<li class="active"><a href="index.php">Forum</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php
			if (isset($_SESSION["user_email"])) {
				echo '<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">' . $_SESSION["user_name"] . ' <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">View Profile</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>';
			} else {
				echo '<li><a href="register.php">Sign Up</a></li>
					<li><a href="login.php">Login</a></li>';
			}
			?>
		</ul>
	</div>
</nav>