<!DOCTYPE HTML>
<html lang="zxx">
<head>
	<title></title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="<?php echo base_url();?>assets/login/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/login//css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="fonts.googleapis.com/css?family=Magra:400,700&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<h1>
		Book Hindi NAATI Test
	</h1>
	<!-- //title -->
	<?php if($this->session->flashdata('success')){ ?>
		<div class="alert alert-success" role="alert" id="success-alert">
		<strong id="myWish"><?php echo $this->session->flashdata('success');?></strong> 
		</div>
	<?php } ?>
	<!-- content -->
	<div class="container-agille">
		<div class="formBox level-login">
			<div class="box boxShaddow"></div>
			<div class="box loginBox">
				<h3>Login Here</h3>
				<form class="form" action="<?php echo base_url();?>User/isUserLogin" method="post">
					<div class="f_row-2">
						<input type="text" class="input-field" placeholder="Email" name="user_email" required>
					</div>
					<div class="f_row-2 last">
						<input type="password" name="user_password" placeholder="Password" class="input-field" required>
					</div>
					<input class="submit-w3" type="submit" value="Login">
					<div class="f_link">
						<a href="<?php echo base_url();?>assets/login/" class="resetTag">Forgot your password?</a>
					</div>
				</form>
			</div>
			<div class="box forgetbox agile">
				
				<h3>Reset Password</h3>
				<form class="form" action="#" method="post">
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					<div class="f_row last">
						<label>Email Id</label>
						<input type="email" name="email" placeholder="Email" class="input-field" required>
						<u></u>
					</div>
					<button class="btn button submit-w3">
						<span>Reset</span>
					</button>
				</form>
			</div>
			<div class="box registerBox wthree">
				<span class="reg_bg"></span>
				<h3>Register</h3>
				<form class="form" action="<?php echo base_url();?>User/register_user" method="post">
					<div class="f_row-2">
						<input type="text" class="input-field" placeholder="First Name" name="user_firstname" required>
					</div>
					<div class="f_row-2 last">
						<input type="text" name="user_lastname" placeholder="Last Name"  class="input-field" required>
					</div>
							
					<div class="f_row-2 last">
						<input type="number" name="user_contact" placeholder="Contact Number (Enter Valid phone number including Country code as results will be sent to you through message)" class="input-field" required>
					</div>					
					<div class="f_row-2 last">
						<select name="user_gender" class="input-field">
							<option value="MALE" class="input-field" >MALE</option>
							<option value="FEMALE" class="input-field" >FEMALE</option>
						</select>
					</div>
						<div class="f_row-2 last">
						<input type="email" name="user_email" placeholder="Email" class="input-field" required>
					</div>
					<div class="f_row-2 last">
						<input type="password" name="user_password" placeholder="Password" id="password" class="input-field" required>
					</div>
					<div class="f_row-2 last">
						<input type="password" name="password" placeholder="Confirm Password" id="password2" class="input-field" required>
					</div>
					<input class="submit-w3" type="submit" value="Register">
				</form>
			</div>
			<a href="<?php echo base_url();?>assets/login/#" class="regTag icon-add">
				Signin<i class="fa fa-repeat" aria-hidden="true"></i>Signup

			</a>
		</div>
	</div>
	<!-- //content -->

	<!-- copyright -->
	
	<!-- //copyright -->


	<!-- js files -->
	<!-- Jquery -->
	<script src="<?php echo base_url();?>assets/login/js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- input fields js -->
	<script src="<?php echo base_url();?>assets/login/js/input-field.js"></script>
	<!-- //input fields js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- //js files -->


</body>

</html>