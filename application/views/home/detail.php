<!DOCTYPE html>
<html>
<head>
	<title>Bebek's Motor</title>
	<link rel="stylesheet" href="<?=base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>/assets/vendor/fonts/circular-std/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/nav.css">
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold js-scroll-trigger">Bebek's Motor</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?=base_url('home')?>" class="js-scroll-trigger nav-link text-uppercase font-weight-bold">Home </a></li>
                    <li class="nav-item">
                      <a href="#checkout" class="btn btn-sm btn-rounded btn-brand nav-link text-uppercase font-weight-bold ml-2">Sign in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb mt-3">
	    <li class="breadcrumb-item"><a href="#">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Detail Motor</li>
	  </ol>
	</nav>
	<div class="row mt-3">
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 col-lg-6 col-md-6 col-sm-12 col-12">
	        <div class="card">
	            <div class="card-body">
	                <h3 class="card-title">Informasi Produk</h3>
	                <p class="card-text">Faucibus orci luctus et ultrices posuere cubilia Curae Integer quis ipsum in augue posuere congue. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	            </div>
	        </div>
	        <div class="card">
	            <div class="card-body">
	            	<div class="row">
	            		<div class="col-4 text-center">
	                		<img src="<?=base_url()?>/assets/images/flat-ui_medal.svg" height="80px">
	                		<h4 class="mt-2">BERGARANSI</h4>
	                	</div>
	                	<div class="col-4 text-center">
	                		<img src="<?=base_url()?>/assets/images/flat-ui_android.svg" height="80px">
	                		<h4 class="mt-2">MUDAH</h4>
	                	</div>
	                	<div class="col-4 text-center">
	                		<img src="<?=base_url()?>/assets/images/flat-ui_shield.svg" height="80px">
	                		<h4 class="mt-2">TERPERCAYA</h4>
	                	</div>
	                </div>
	                <a href="#" class="btn btn-primary btn-block font-weight-bold">Beli Sekarang</a>
	            </div>
	        </div>
	    </div>
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 col-lg-6 col-md-6 col-sm-12 col-12">
	        <div class="card">
	            <img src="<?=base_url()?>/assets/images/beat.png" alt="" class="img-fluid">
	            <div class="card-body">
	                <h3 class="card-title">Honda Beat 2020</h3>
	                <h2 class="text-muted">Rp. 20.000.000</h2>
	            </div>
	        </div>
	    </div>
    </div>
</div>

<script src="<?=base_url()?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>