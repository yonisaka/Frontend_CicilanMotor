<!DOCTYPE html>
<html>
<head>
	<title>Bebek's Motor</title>
  <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/fonts/circular-std/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/libs/css/style.css">
	<style type="text/css">
    .jumb1 {
        height: 550px;
    }

    .jumb1 img {
        height: 450px;
    }

    .header-title {
        padding-top: 80px;
    }

    .header-title h2 {
        font-size: 40px;
    }

<head>
    <title>Bebek's Motor</title>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/libs/css/style.css">
    <style type="text/css">
        .jumb1 {
            height: 400px;
        }

        .jumb1 img {
            height: 350px;
        }

        .navbar {
            transition: all 0.4s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link:focus {
            color: #555;
            text-decoration: none;
        }

        /* Change navbar styling on scroll */
        .navbar.active {
            background: #fff;
            box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar.active .nav-link {
            color: #555;
        }

        .navbar.active .nav-link:hover,
        .navbar.active .nav-link:focus {
            color: #555;
            text-decoration: none;
        }

        .navbar.active .navbar-brand {
            color: #555;
        }

        .title-hr {
            width: 200px;
        }

        footer {
            background-color: #5969ff;
        }

        /* Change navbar styling on small viewports */
        @media (max-width: 991.98px) {
            .navbar {
                background: #fff;
            }

            .navbar .navbar-brand,
            .navbar .nav-link {
                color: #555;
            }
    </style>
</head>
<!-- <body onload="dataReload();"> -->

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold js-scroll-trigger">Bebek's Motor</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="#home" class="js-scroll-trigger nav-link text-uppercase font-weight-bold">Home </a></li>
                        <li class="nav-item"><a href="#produk" class="js-scroll-trigger nav-link text-uppercase font-weight-bold js-scroll-trigger">Produk</a></li>
                        <li class="nav-item"><a href="#about" class="js-scroll-trigger nav-link text-uppercase font-weight-bold">About</a></li>
                        <li class="nav-item">
                            <a href="#checkout" class="btn btn-sm btn-rounded btn-brand nav-link text-uppercase font-weight-bold ml-2" data-toggle="modal" data-target="#loginModal">Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="home">
        <div class="jumbotron jumb1">
            <div class="container row mx-auto">
                <div class="col-6 mt-4">
                    <h2 class="mt-5">Cara mudah cepat cicil motor </h2>
                    <h1 class="text-primary">dengan <b>DP 0%</b></h1>
                </div>
                <div class="col-5">
                    <img src="<?= base_url() ?>/assets/images/beat.png">
                </div>
            </div>
        </div>
    </section>

    <section id="produk" class="mt-5">
        <h3 class="text-primary text-uppercase font-weight-bold text-center">Products</h3>
        <hr class="title-hr">
        <div class="row mx-auto">
            <div class="col-3">
                <div class="product-thumbnail card-figure has-hoverable">
                    <div class="product-img-head">
                        <div class="product-img">
                            <img src="<?= base_url() ?>/assets/images/beat.png" alt="" class="img-fluid"></div>
                        <div class="ribbons"></div>
                        <div class="ribbons-text">Offer</div>
                    </div>
                    <div class="product-content">
                        <div class="product-content-head">
                            <h3 class="product-title font-weight-bold">Honda Beat</h3>
                            <div class="product-price">Rp. 20.000.000</div>
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-outline-light">Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="product-thumbnail card-figure has-hoverable">
                    <div class="product-img-head">
                        <div class="product-img">
                            <img src="<?= base_url() ?>/assets/images/beat.png" alt="" class="img-fluid"></div>
                        <div class="ribbons"></div>
                        <div class="ribbons-text">Offer</div>
                    </div>
                    <div class="product-content">
                        <div class="product-content-head">
                            <h3 class="product-title font-weight-bold">Honda Beat</h3>
                            <div class="product-price">Rp. 20.000.000</div>
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-outline-light">Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="product-thumbnail card-figure has-hoverable">
                    <div class="product-img-head">
                        <div class="product-img">
                            <img src="<?= base_url() ?>/assets/images/beat.png" alt="" class="img-fluid"></div>
                        <div class="ribbons"></div>
                        <div class="ribbons-text">Offer</div>
                    </div>
                    <div class="product-content">
                        <div class="product-content-head">
                            <h3 class="product-title font-weight-bold">Honda Beat</h3>
                            <div class="product-price">Rp. 20.000.000</div>
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-outline-light">Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="product-thumbnail card-figure has-hoverable">
                    <div class="product-img-head">
                        <div class="product-img">
                            <img src="<?= base_url() ?>/assets/images/beat.png" alt="" class="img-fluid"></div>
                        <div class="ribbons"></div>
                        <div class="ribbons-text">Offer</div>
                    </div>
                    <div class="product-content">
                        <div class="product-content-head">
                            <h3 class="product-title font-weight-bold">Honda Beat</h3>
                            <div class="product-price">Rp. 20.000.000</div>
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-outline-light">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="about" class="mt-5">
        <h3 class="text-primary text-uppercase font-weight-bold text-center">About</h3>
        <hr class="title-hr">
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 mb-5 mx-auto">
            <div class="tab-vertical">
                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" id="about-vertical-tab" data-toggle="tab" href="#about-vertical" role="tab" aria-controls="about" aria-selected="true">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" id="snk-vertical-tab" data-toggle="tab" href="#snk-vertical" role="tab" aria-controls="snk" aria-selected="false">Syarat & Ketentuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" id="mendaftar-vertical-tab" data-toggle="tab" href="#mendaftar-vertical" role="tab" aria-controls="mendaftar" aria-selected="false">Cara Mendaftar</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent3">
                    <div class="tab-pane fade show active" id="about-vertical" role="tabpanel" aria-labelledby="about-vertical-tab">
                        <h2> Tentang Kami </h2>
                        <p>Bebek's Motor merupakan Phasellus non ante gravida, ultricies neque a, fermentum leo. Etiam ornare enim arcu, at venenatis odio mollis quis. Mauris fermentum elementum ligula in efficitur. Aliquam id congue lorem. Proin consectetur feugiasse platea dictumst. Pellentesque sed justo aliquet, posuere sem nec, elementum ante. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    </div>
                    <div class="tab-pane fade" id="snk-vertical" role="tabpanel" aria-labelledby="snk-vertical-tab">
                        <h2> Syarat dan Ketentuan </h2>
                        <p>Nullam et tellus ac ligula condimentum sodales. Aenean tincidunt viverra suscipit. Maecenas id molestie est, a commodo nisi. Quisque fringilla turpis nec elit eleifend vestibulum. Aliquam sed purus in odio ullamcorper congue consectetur in neque. Aenean sem ex, tempor et auctor sed, congue id neque. </p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="tab-pane fade" id="mendaftar-vertical" role="tabpanel" aria-labelledby="mendaftar-vertical-tab">
                        <h2> Cara Mendaftar </h2>
                        <p>Vivamus pellentesque vestibulum lectus vitae auctor. Maecenas eu sodales arcu. Fusce lobortis, libero ac cursus feugiat, nibh ex ultricies tortor, id dictum massa nisl ac nisi. Fusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
                        <p> Fusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
                        <a href="#" class="btn btn-secondary font-weight-bold text-uppercase">Daftar Disini</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <footer class="container-fluid text-white p-0">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-4">
                        <a href="#">
                            <!-- <img src="{{ asset('img/logo_white.png') }}" class="logo" alt="Jatake Battery"> -->
                            <h1 class="text-light">Bebek's Central Motor</h1>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="row">

                            <div class="col-12">
                                <h4 class="text-light">
                                    Kontak
                                </h4>
                                <ul class="list-unstyled">
                                    <li>
                                        Email : bebekcentral@gmail.com
                                    </li>
                                    <li>
                                        WA: <a href="https://wa.me/0895371382959?text=Saya%20berkunjung%20ke%20website%20Anda%2c%20dan%20saya%20tertarik%20untuk%20bertanya." target="_blank" class="text-white">0895371382959<i class=" fab fa-whatsapp"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="text-light">
                                    Cari Kami!
                                </h4>

                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-light" href="https://goo.gl/maps/vfpViuKTKqmjyRRY7" target="_blank">
                                            Jl. Raya Gatot Subroto Km. 8 (sebelah indomaret)
                                            Kec. Jatiuwung, Kota/Kab. Tangerang
                                            Banten, 15134
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a class="map" href="https://goo.gl/maps/vfpViuKTKqmjyRRY7" target="_blank">
                            <img class="rounded-img" src="<?= base_url('/assets/images/maps.png') ?>" height="300px" alt="" srcset="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="py-2 bg-dark">
                <div class="container">
                    <div class="text-right">
                        <b>Bebek.Central@2020</b>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?= base_url() ?>/assets/js/scrolling-nav.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.easing.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 10) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>

     <!-- MODAL --> 

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form id="formLogin">
                        <h3 class="modal-title text-center mt-5 mb-5" id="loginModalLabel"><b>Login</b></h3>
                        <div class="form-group">
                            <input class="form-control form-control-lg form-user-input" id="email" name="email" type="text" placeholder="Email" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg form-user-input" id="password" name="password" type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox">
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                        <a href="customer/registration" class="btn btn-secondary btn-lg btn-block">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script src="<?=base_url()?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript">
        $('#loginModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
    <script type="text/javascript">
        $('#formLogin').on('submit', function(e){
            e.preventDefault();
            loginAction();
        });

        function loginAction(){
            var link = "http://localhost/BE_CicilanMotor/auth/login_action";

            var email = $("#email").val();
            var password = $("#password").val();

            $.ajax(link, {
                type: 'POST',
                data: {
                    "email" : email,
                    "password" : password
                },
                success: function (response) {
                    if(response == "success"){
                        Swal.fire({
                            type: 'success',
                            title: 'Login Berhasil!',
                            timer: 3000,
                            showCancelButton: false,
                            showConfirmButton: false
                        })
                        .then(function(){
                            location.replace("<?=base_url('')?>user");
                        });
                    }else {
                        Swal.fire({
                            type: 'error',
                            title: 'Gagal Login',
                            text: 'Cek email atau password',
                            timer: 3000,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
                    }
                },
                error: function (response) {
                    console.log(response);
                }
            });
        }

    </script>
</body>
</html>