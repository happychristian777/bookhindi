<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Book Hindi NAATI TEST Admin</title>
<!-- Custom fonts for this template-->
<link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Page level plugin CSS-->
<link href="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">
</head>
<body id="page-top">
<!--<body id="page-top">
<body id="page-top1">-->
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
<a class="navbar-brand mr-1" href="<?php echo base_url();?>Admin/dashboard">Book Hindi NAATI TEST::Admin</a>
<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
  <i class="fas "></i>
</button>
<!-- Navbar Search -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-primary" type="button">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>
</form>
<form name="fname"></form>
<!-- Navbar -->
<ul class="navbar-nav ml-au0to ml-md-0">
  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user fa-fw"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="#">Settings</a>
      <a class="dropdown-item" href="#">Activity Log</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </div>
  </li>
</ul>
</nav>
<div id="wrapper">
<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url();?>Admin/dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Users</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Users:</h6>
      <a class="dropdown-item" href="<?php echo base_url();?>Admin/loadUsers">View Users</a>
      <a class="dropdown-item" href="<?php echo base_url();?>Admin/load_contacts">Messages</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Payments</span>
    </a>
    <!--<span>Flights</span>-->
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Payments:</h6>
      <a class="dropdown-item" href="<?php echo base_url();?>Admin/loadPayments">View Payments</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Test Data</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Test Data:</h6>
      <a class="dropdown-item" href="<?php echo base_url();?>Admin/mock_test1">Hindi Test: 1 </a>
      <a class="dropdown-item" href="<?php echo base_url();?>Admin/mock_test2">Hindi Test: 2 </a>
      <a class="dropdown-item" href="<?php echo base_url();?>Admin/mock_test3">Hindi Test: 3 </a>
      <a class="dropdown-item" href="<?php echo base_url();?>Admin/mock_test4">Punjabi Test: 4 </a>
        <a class="dropdown-item" href="<?php echo base_url();?>Admin/mock_test5">Punjabi Test: 5 </a>
          <a class="dropdown-item" href="<?php echo base_url();?>Admin/mock_test6">Punjabi Test: 6 </a>
           <a class="dropdown-item" href="<?php echo base_url();?>Admin/mock_test7">Gujarai Test: 7 </a>
            <a class="dropdown-item" href="<?php echo base_url();?>Admin/mock_test8">Gujarai Test: 8 </a>
             <a class="dropdown-item" href="<?php echo base_url();?>Admin/mock_test9">Gujarai Test: 9 </a>
    </div>
    
  </li>
 
</ul>