<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Stripe Gateway Integration | Codeigniter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />    

    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/bootstrap.min.js" />
	
</head>
<body>
    <header>
        <!-- Bootstrap 4 Navbar  -->
        <!-- Bootstrap 4 Navbar 1 -->
        <!-- Bootstrap 4 Navbar 1--> 
        <!-- End Bootstrap 4 Navbar -->
        <!-- End Bootstrap 4 Navbar -->
    </header>

    <!-- Begin page content -->
    
    <div class="container">
        <div class="row mt-4">
            <!-- <div class="col-sm-4"></div> -->
            <div class="col-4 mx-auto">
                <div class="card">
                    <div class="card-header bg-danger text-white">
                    	<h4 class="card-text">Oops! Payment failed</h4>
                    </div>
                    <div class="card-body">
                    	Transaction has failed. Click here to navigate <a href="<?php echo site_url('/'); ?>"> Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <footer class="footer">
      <div class="container">
        Copyright &copy; <?php echo date('Y'); ?>  
            <span class="float-right">Coded with Love &hearts;  : <a href="https://facebook.com/anburocky3" target="_blank">Anbuselvan Rocky</a></span>
      </div>
    </footer>
  </body>
</html>
