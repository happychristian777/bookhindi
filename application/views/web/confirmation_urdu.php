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
							    <h5 class="hny-title mt-4">CONFIRMATION:</h5>
							    <form method="post" action="<?php echo base_url();?>User/load_checkout_pm_urdu">
        <input type="hidden" name="calc" value="10">
        <input type="hidden" name="item_name" value="<?php echo $name; ?>"> 
        <p><?php echo $name; ?></p>
        <input type="submit" style="background:#400082;" class="btn btn-success btn-block" data-dismiss="modal" value="Confirm: $10">
         </form><br>
         <form method="post" action="<?php echo base_url();?>User/bypass_pm_urdu">
         <input type="submit" style="" class="btn btn-danger btn-block" data-dismiss="modal" value="Already paid ? Click here"> Already paid
         </form>
            
			</div>
		</div>
	</div>
</section>
<center>
<div class="row" >
 
  </div>
</center>
<center>
<div class="row" >

</div>
</div>
</center>
<!-- partial -->
  
</body>
</html>
