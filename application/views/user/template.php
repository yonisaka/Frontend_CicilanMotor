<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" href="<?=base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/vendor/datatables/css/dataTables.bootstrap4.css">
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
                      <a href="#checkout" class="btn btn-sm btn-rounded btn-brand nav-link text-uppercase font-weight-bold ml-2">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="influence-profile" id="kontenUser">
    
</div>
<script src="<?=base_url()?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script type="text/javascript">
    function loadMenu(url){
        $.ajax(url,{
            type: 'GET',
            success: function (data, status, xhr) {
                var objData = JSON.parse(data);

                $('#kontenUser').html(objData.konten);
                $('title').html(objData.titel);
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        })
    }

    loadMenu("<?=base_url('user/akun')?>");
</script>
</body>
</html>