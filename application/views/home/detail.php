<div id="bodyKonten">
<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold js-scroll-trigger">Bebek's Motor</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?=base_url('home')?>" class="js-scroll-trigger nav-link text-uppercase font-weight-bold">Home </a></li>
                    <!-- <li class="nav-item">
                      <a href="#checkout" class="btn btn-sm btn-rounded btn-brand nav-link text-uppercase font-weight-bold ml-2">Sign in</a>
                    </li> -->
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
	                <p class="card-text" id="deskripsi"></p>
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
	                <div id="beli"></div>
	                <!-- <a href="#" class="btn btn-primary btn-block font-weight-bold">Beli Sekarang</a> -->
	            </div>
	        </div>
	    </div>
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 col-lg-6 col-md-6 col-sm-12 col-12">
	        <div class="card">
	        	<div id="foto-motor" class="mx-auto"></div>
	            <!-- <img src="<?=base_url()?>/assets/images/beat.png" alt="" class="img-fluid"> -->
	            <div class="card-body">
	            	<div id="judul"></div>
	                <h2 class="text-muted" id="harga"></h2>
	            </div>
	        </div>
	    </div>
    </div>
</div>
</div>

<script src="<?=base_url()?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script type="text/javascript">
	function getDetail(id_motor){
		var link = 'http://localhost/BE_CicilanMotor/motor/detail?id_motor='+id_motor;

		$.ajax(link, {
			type: 'GET',
			success: function(data, status, xhr){
				var data_obj = JSON.parse(data);
				
				if(data_obj['sukses'] == 'ya'){
					var detail = data_obj['detail'];
			
					$('#judul').html("<h3>"+ detail['merek']+" "+ detail['seri'] +"</h3>");
					$('#foto-motor').html("<img src='http://localhost/BE_CicilanMotor/foto/"+ detail['id_motor'] +"/"+ detail['foto']+"'style='max-height:340px;' class='img-fluid mt-5'>");
					$('#deskripsi').html(detail['deskripsi']);
					$('#seri').html(detail['seri']);
					$('#harga').html(detail['harga']);
					$('#beli').html("<a href='#"+detail['id_motor']+"' class='btn btn-primary btn-block font-weight-bold linkBeliMotor'>Beli Sekarang</a>");
					reload_event();
				} else{
					alert('Data Tidak Ditemukan');
				}
			},
			error: function(jqXHR, textStatus, errorMsg){
				alert('Error : '+ errorMsg);
			}
		});
	}
	<?php
		echo'getDetail('.$id_motor.')';
	?>

	function reload_event(){
        $('.linkBeliMotor').on('click', function(){
            var hashClean =  this.hash.replace('#','');
            loadPembelian('<?= base_url('home/pembelian/')?>' + hashClean);
        });
    }

    function loadPembelian(url){
        $.ajax(url,{
            type: 'GET',
            success: function (data, status, xhr) {
                var objData = JSON.parse(data);
                // console.log(objData.id_motor);
                $('#bodyKonten').html(objData.konten);
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        });
    }
</script>
