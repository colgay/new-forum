<?php
include_once("includes/header.php");
include_once("includes/navbar.php");

if (!isset($_SESSION)) session_start();
?>

<div id="content">
	<div class="container">
		<div style="margin-bottom:50px"></div>
		<div class="row">
			<div class="col-lg-4 col-md-5 col-sm-6 col-center">
				<div class="panel panel-primary">
					<div class="panel-heading big2 text-center">Login</div>
					<div class="panel-body">
						<?php
						if (isset($_SESSION["user_email"]) || isset($_POST["submit"])) {
							echo 'You have been successfully logged in.</div>';
							header("refresh:5; url=index.php"); 
						} else {
							?>
							<form id="loginForm" method="post" action="login.php">
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember" value="remember"> Remember me
									</label>
								</div>
								<button type="submit" name="submit" class="btn btn-primary">Login</button>
							</form>
						</div>
						<div class="panel-footer"><a href="#">Forgot your password?</a></div>
						<?php
						}
						?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once("includes/footer.php"); ?>

<script type="text/javascript">
$(document).ready(function(){
	$("#loginForm").submit(function(event) {
		var form = $(this);
		var result = false;

	    $.ajax({
			type: "POST",
			url: "includes/login.php",
			data: form.serialize(),
			dataType: "json",
			async: false,
			success: function(data) {
				if (data.success) {
					result = true;
				} else if (data.error) {
					$("#error").remove();

					var html = '<div id="error" class="alert alert-danger">' + data.error + '</div>';
					$(".panel-body").prepend(html);
				}
			}
		});

		return result;
	});
});
</script>