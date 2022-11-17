<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://use.typekit.net/vfx0fsd.css">
<style>


.sub-top {
  margin-top: 2em;
  width: 330px;
  height: 250px;
  background-color: #FFF;
  border-radius: 16px 16px 0 0;
}

.sub-img {
  width: 145px;
  height: 141px;
  margin-top: 3.7em;
}

.sub-bottom {
  width: 330px;
  height: 200px;
  background-color: #fff;
  border-radius: 0 0 16px 16px;
  box-shadow: 0px 29px 39px -23px rgba(0,0,0,0.29);
}

.sub-text {
  padding: 0.7em;
}

.btn-block {
  display: block;
  width: 90%;
  margin:auto;
  color: #FFF;
  background: #40c562;
}

.logo {
  display: block;
  margin-left: auto;
  margin-right: auto;
  }
</style>
</head>
<body style="height:125%;">
<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">Confirmation</span>
		</div>
	</nav>
<!-- partial:index.partial.html -->
<div class="container-fluid"></div>
<div class="container-fluid">
<section class="w3l-feature-1">
	<div class="feature-1sec py-5">
		<div class="container py-lg-5">
			<div class="feature-1-content">
				
							<div class="read">
                <h5 class="hny-title mt-4">  INSTRUCTIONS:</h5>
                <p class="mt-2" style="text-align:justify;color:red;"><b> Please select "allow " on notification pop-up at the top-left corner of your Browser.</p>
                <p class="mt-2" style="text-align:justify;"><b>1.	Please give this test in just 1 attempt. Do not close the browser window once the payment is done. Your test will begin immediately after you pay.</p>
                <p class="mt-2" style="text-align:justify;"><b>2.	If in case, there is a network failure and you could not complete your test in 1 attempt, then re-login and start the test from beginning. But you must complete this test within 24 hours of your payment.</p>
                <p class="mt-2" style="text-align:justify;"><b>3.	Take pen and notebook before you begin this test.</p>
                <p class="mt-2" style="text-align:justify;"><b>4.	This test is exact replica of live Naati CCL test but this is NOT your actual NAATI CCL test.</p>
                <p class="mt-2" style="text-align:justify;">5.	The result of the test is not valid under any circumstances. It is just a mock test which will help you to test your level of preparation before appearing for actual NAATI CCL test.</b></p>
				</div>
			</div>
		</div>
	</div>
</section>
	<!-- features-4 -->
<center>
<div class="row" >

  </div>
</center>
<center>
<div class="row" >
    <div class="mx-auto">
      <div class="sub-text text-center">
        <!--  <form method="post" action="<?php echo base_url();?>User/load_checkout_mt1"> -->
        <form method="post" action="<?php echo base_url();?>User/bypass_mt2">
           <input type="submit" style="background:#400082;" class="btn btn-success btn-block" data-dismiss="modal" value="Start test"> <!-- add by tanvi -->
     <!--   <h1>Confirmation:</h1>
            </div>
      <form method="post" action="<?php echo base_url();?>User/load_checkout_mt1">
        <input type="hidden" name="calc" value="15">
        <input type="hidden" name="item_name" value="<?php echo $name; ?>"> 
        <p><?php echo $name; ?></p>
        <input type="submit" style="background:#400082;" class="btn btn-success btn-block" data-dismiss="modal" value="Confirm: $15">
         </form><br>
         <form method="post" action="<?php echo base_url();?>User/bypass_mt1">
         <input type="submit" style="" class="btn btn-danger btn-block" data-dismiss="modal" value="Already paid in last 24 hours? Click here">-->
         </form> 
      
    </div>
</div>
</div>
</center>
<!-- partial -->
  
</body>
</html>
