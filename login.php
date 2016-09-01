<?php
include_once("includes/header.php");
include_once("includes/navbar.php");
?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-5 col-center">
			<div class="panel panel-primary">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form>
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control" id="email" placeholder="Enter your email address">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Enter your password">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once("includes/footer.php"); ?>