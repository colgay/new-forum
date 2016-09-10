<?php
include_once("includes/header.php");
include_once("includes/navbar.php");
?>

<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-7 col-sm-8 col-center">
				<div class="panel panel-primary center-table">
					<div class="panel-heading big2 text-center">Register</div>
					<div class="panel-body">
						<?php
						if (isset($_POST["submit"])) {
							echo 'Your account has been successfully created. You may login <a href="login.php">here</a>.';
						} else {
							?>
							<form id="signupForm" method="post" action="register.php">
								<div class="form-group">
									<label for="name">Name</label>
									<div class="error-group">
										<input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name">
									</div>
								</div>
								<div class="form-group">
									<label for="nickname">Nickname</label>
									<div class="error-group">
										<input type="text" class="form-control" name="nickname" id="nickname" placeholder="Enter your nickname">
									</div>
									<p class="help-block">This is the name that will be shown with your posts.</p>
								</div>
								<div class="form-group">
									<label for="email">Email Address</label>
									<div class="error-group">
										<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address">
									</div>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<div class="error-group">
										<input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
									</div>
								</div>
								<div class="form-group">
									<label for="password2">Confirm Password</label>
									<div class="error-group">
										<input type="password" class="form-control" name="password2" id="password2" placeholder="Enter your confirm password">
									</div>
								</div>
								<div class="form-group">
									<label for="gender">Gender</label>
									<div class="error-group">
										<select class="form-control" name="gender" id="gender">
											<option value="" selected disabled hidden>I am...</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="dob">Date of Birth</label>
									<div class="error-group">
										<input type="text" class="form-control" name="dob" id="dob" placeholder="YYYY/MM/DD">
									</div>
								</div>
								<div class="form-group">
									<div class="error-group">
										<div class="checkbox">
											<label>
												<input type="checkbox" id="agree" name="agree" value="agree" />I agree to the <a href="#">terms and rules</a>.
											</label>
										</div>
									</div>
								</div>
								<button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
							</form>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once("includes/footer.php"); ?>

<script type="text/javascript" src="js/validate/jquery.validate.js"></script>

<script type="text/javascript">
	$.validator.addMethod("regex", function(value, element, regexp){
			var re = new RegExp(regexp);
			return this.optional(element) || re.test(value);
	}, "Please check your input");

	$.validator.addMethod("ymd", function(value, element){
			var string = value.split("/");
			var date = new Date(string[0], string[1] - 1, string[2]);

			return date && (date.getMonth() + 1) == string[1];
	}, "Please enter a valid date (YYYY/MM/DD)");

	$.validator.addMethod("rangelength2", function(value, element, param){
		var length = value.length;
		for(var i = 0; i < value.length; i++) {
			if(value.charCodeAt(i) > 127) {
				length++;
			}
		}

		return this.optional(element) || ( length >= param[0] && length <= param[1] );   
	}, $.validator.format("Please enter a value between {0} and {1} characters long."));

	$(document).ready(function(){
		$("#signupForm").validate({
			rules: {
				name: "required",
				nickname: {
					required: true,
					rangelength2: [2, 16],
					remote: {
						url: "includes/validate_nickname.php",
						type: "post",
						data: {
							nickname: function() {
								return $("#nickname").val();
							}
						}
					}
				},
				password: {
					required: true,
					rangelength: [6, 32],
					regex: /^[a-zA-Z0-9_]{6,32}$/
				},
				password2: {
					required: true,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true,
					remote: {
						url: "includes/validate_email.php",
						type: "post",
						data: {
							email: function() {
								return $("#email").val();
							}
						}
					}
				},
				dob: {
					required: true,
					ymd: true,
					remote: {
						url: "includes/validate_dob.php",
						type: "post",
						data: {
							dob: function() {
								return $("#dob").val();
							}
						}
					}
				},
				gender: "required",
				agree: "required"
			},
			messages: {
				nickname: {
					remote: "Your nickname is already taken."
				},
				email: {
					remote: "Your email already exists."
				},
				password: {
					regex: "Your password can only contain letters or numbers."
				},
				password2: {
					equalTo: "Please enter the same password as above."
				},
				dob: {
					remote: "Please enter a valid date of birth."
				},
				agree: ""
			},
			errorElement: "em",
			errorPlacement: function(error, element) {
				error.addClass("help-block");

				if (element.prop("type") === "checkbox") {
					error.insertAfter(element.parent("label"));
				} else {
					error.insertAfter(element);
				}
			},
			highlight: function(element, errorClass, validClass) {
				$(element).parents(".error-group").addClass("has-error").removeClass("has-success");
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).parents(".error-group").addClass("has-success").removeClass("has-error");
			},
			submitHandler: function(form) {
				var result;

				$.ajax({
					type: "POST",
					url: "includes/register.php",
					data: $(form).serialize(),
					dataType: "json",
					async: false,
					success: function(data) {
						if (data.success) {
							result = true;
						} else {
							$("#error").remove();

							var html = '<div id="error" class="alert alert-danger">' + data.error + '</div>';
							$(".panel-body").prepend(html);

							result = false;
						}
					}
				});

				return result;
			},
			onkeyup: false
		});
	});
</script>