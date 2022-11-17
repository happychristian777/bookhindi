<!--<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">Login/Signup</span>
		</div>
	</nav>-->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.all.min.js"></script>
	<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<section class="w3l-contact-main" style="background: linear-gradient(to right, #3BB9FF, #e83e8c);color:white" >
		<div class="contact-infhny py-3">
			<div class="container py-lg-3">
				<div class="title-content text-left mb-lg-5 mt-4">

				</div>
				<div class="row align-form-map">
					<div class="col-lg-5 form-inner-cont">
						<form  action="<?php echo base_url();?>User/register_user" method="post" class="signin-form">
							<div class="form-input">
                               <h3><center>Register Here</center></h3>
                                <div class="form-input">
								<label for="w3lSender">First Name*</label>
								<input type="text" name="user_firstname" id="w3lSender" placeholder="" required="" />
							</div>
                            <div class="form-input">
								<label for="w3lSender">Last Name*</label>
								<input type="text" name="user_lastname" id="w3lSender" placeholder="" required="" />
							</div>
                            <div class="form-input">
								<label for="w3lSender">Contact Number (include Country Code)*</label>
								<input type="number" name="user_contact" id="w3lSender" placeholder="Mock Test Results will be sent on this number" required="" />
							</div>
								<label for="w3lName">Email*</label>
								<input type="email" name="user_email" id="w3lName" placeholder="Mock Test Results will be sent on this email address" />
							</div>
							<div class="form-input">
								<label for="w3lSender">Password*</label>
								<input type="password" id="txtPassword" name="user_password" id="w3lSender" placeholder="" required="" />
							</div>

							<div class="form-input">
								<label for="w3lMessage">Re-Type Password*</label>
								<input type="password" id="txtConfirmPassword" name="" id="w3lSender" placeholder="" required="" />
							</div>


                          		<input type="submit" id="btnSubmit" style="background: linear-gradient(to right, #e83e8c, #6f42c1);color:white" value="Register" type="submit" class="btn btn-contact">

						</form>


					</div>
                    <div class="col-lg-1 form-inner-cont"></div>
                    <div class="col-lg-5 form-inner-cont">
						<form  action="<?php echo base_url();?>User/isUserLogin" method="post" class="signin-form">
							<div class="form-input">
                            <div class="form-input">
                                <h3><center>Login Here</center></h3>
								<label for="w3lName">Email*</label>
								<input type="email" name="user_email" id="w3lName" placeholder="" />
							</div>
							<div class="form-input">
								<label for="w3lSender">Password*</label>
								<input type="password" name="user_password" id="w3lSender" placeholder="" required="" />
							</div>
													<a href="#" id="action_forget_password" data-toggle="modal" data-target="#exampleModal">Forget Password</a>
							<input type="submit" style="background: linear-gradient(to right, #e83e8c, #6f42c1);color:white"  value="Login" class="btn btn-contact">

						</form>


					</div>


				</div>
			</div>

	</section>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form method="post" action="<?php echo base_url();?>User/forget_password">
      <div class="modal-body">
	  <div class="form-input">
	<label for="w3lSender">Email</label>
	<input type="text" name="email" id="w3lSender" placeholder="" required="" />
</div>
</div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
	  </form>
    </div>
  </div>
</div>
<?php if($this->session->flashdata('failed')){ ?>

	<script>
		Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Email or Password incorrect!',

})
	</script>

<?php } ?>
	<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });

</script>