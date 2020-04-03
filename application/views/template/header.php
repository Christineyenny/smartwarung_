<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SmartWarung</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.theme.default.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
  </head>
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url() ?>">smartwarung</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
	          <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.html">Shop</a>
              	<a class="dropdown-item" href="wishlist.html">Wishlist</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="cart.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>-->
	          <li class="nav-item"><a href="<?php echo site_url('item/create') ?>" class="nav-link">Tambah Barang</a></li>
            <!--<li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li> -->
            <?php if($this->session->userdata('name') == null): ?>
              <li class="nav-item cta cta-colored"><a href="<?php echo site_url('auth/login') ?>" class="nav-link"><span class="icon-user"></span> Login</a></li>
            <?php elseif($this->session->userdata('name') != null): ?>
              <li class="nav-item cta cta-colored"><a href="<?php echo site_url('auth/login') ?>" class="nav-link"><span class="icon-user"></span> <?php echo $this->session->userdata('name') ?></a></li>
            <?php endif; ?>
	        </ul>
	      </div>
	    </div>
    </nav>
    <!-- END nav -->