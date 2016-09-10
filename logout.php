<?php
if (!isset($_SESSION)) session_start();

unset($_SESSION["user_id"]);
unset($_SESSION["user_email"]);
unset($_SESSION["user_name"]);

setcookie("user_email", "", time()-3600);
setcookie("user_password", "", time()-3600);

include_once("includes/header.php");
include_once("includes/navbar.php");
?>

<div id="content">
	<div class="container">
		<div style="margin-bottom:50px"></div>
		<div class="row">
			<div class="col-lg-4 col-md-5 col-sm-6 col-center">
				<div class="panel panel-primary">
					<div class="panel-heading big2 text-center">Login</div>
					<div class="panel-body">
						You have been successfully logged out.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include_once("includes/footer.php");
header("refresh:5; url=index.php");
?>