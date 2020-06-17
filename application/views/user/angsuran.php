<div class="container dashboard-content ">
	<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h3 class="mb-2">User Profile </h3>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                            <li class="breadcrumb-item active" aria-current="page">Angsuran</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
	        <div class="card">
	            <div class="card-body">
                    <div class="user-avatar text-center d-block">
                        <img src="<?=base_url('')?>assets/images/avatar-1.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                    </div>
                    <div class="text-center">
                        <h2 class="font-24 mb-0" id="nama_customer"></h2>
                        <p id="status_customer"></p>
                    </div>
                </div>
                <div class="card-body border-top">
                    <h3 class="font-16">Contact Information</h3>
                    <div class="">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2" id="email_customer"><i class="fas fa-fw fa-envelope mr-2" ></i></li>
                            <li class="mb-0" id="telp_customer"><i class="fas fa-fw fa-phone mr-2"></i></li>
                        </ul>
                    </div>
                </div>
	            <div class="card-body">
                    <a href="#" onclick="loadMenu('<?=base_url('user/akun')?>')" class="btn btn-block btn-primary">User Profile</a href="#">
	            </div>
	        </div>
	    </div>
	    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-12">
	        <div class="card">       
                <h5 class="card-header">Pembayaran Angsuran</h5>
                <div class="card-body">
                    <form id="formAngsuran">
                        <div class="form-group row">
                            <label for="nominal" class="form-user-input col-3 col-lg-2 col-form-label text-right mr-5">Nominal</label>
                            <div class="col-8 col-lg-8">
                                <input id="nominal" type="number" name="nominal" class="form-control form-user-input" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kali_angsuran" class="form-user-input col-3 col-lg-2 col-form-label text-right mr-5">Angsuran ke</label>
                            <div class="col-8 col-lg-8">
                                <input id="kali_angsuran" type="number" name="kali_angsuran" class="form-control form-user-input" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="form-user-input col-3 col-lg-2 col-form-label text-right mr-5">Tanggal</label>
                            <div class="col-8 col-lg-8">
                                <input id="tanggal" type="text" name="tanggal" class="form-control form-user-input" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="form-user-input col-3 col-lg-2 col-form-label text-right mr-5">Bukti Transfer</label>
                            <div class="col-8 col-lg-8">
                                <input type="file" class="form-control" name="file" id="file">
                            </div>
                        </div>
                        <div class="row pt-2 pt-sm-5 mt-1">
                            <div class="col-sm-6 col-lg-12 pl-0">
                                <p class="text-right">
                                    <input type="hidden" name="id_transaksi" class="form-user-input" id="id_transaksi">
                                    <button type="submit" class="btn btn-space btn-primary">Konfirmasi Angsuran</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>    
	        </div>
	    </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">       
                <div class="card-body">
                    <img class="mx-auto" src="<?=base_url('assets/images/bni.png')?>" width="200px">
                    <p>Nomor Rekening :</p>
                    <h2>881 08189498715</h2>

                    <h4>NB : Cetak Bukti Pembayaran untuk melakukan konfirmasi angsuran</h4>
                </div>
            </div>
        </div>
	</div>
</div>

<script type="text/javascript">
    $('#formAngsuran').on('submit', function(e){
        e.preventDefault();
        sendDataPost();
    });

    function sendDataPost(){
        var link = "http://localhost/BE_CicilanMotor/angsuran/create_action/";

        var dataForm = new FormData();
        var allInput = $('.form-user-input');

        $.each(allInput, function (i, val) {
            dataForm.append(val['name'], val['value']);
        });

        var file = $('#file')[0].files[0];
        dataForm.append('file', file);

        $.ajax(link, {
            type: 'POST',
            data: dataForm,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data, status, xhr) {
                console.log("submit sukses");
                alert(data['pesan']);
                // loadMenu('<?= base_url('user')?>');
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
                console.log(errorMsg);
            }
        });
    }

    function loadKonten(url){
        $.ajax(url,{
            type: 'GET',
            success: function (data, status, xhr) {
                var data_obj = JSON.parse(data);
                if(data_obj['sukses'] == 'ya'){
                    var detail = data_obj['detail'];
                    $('#nama_customer').html(detail['nama']);
                    $('#status_customer').html(detail['status']);
                    $('#email_customer').html(detail['email']);
                    $('#telp_customer').html(detail['no_telepon']);
                } else{
                    alert('Data Tidak Ditemukan');
                }
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        })
    }
    loadKonten("http://localhost/BE_CicilanMotor/customer/get_customer_by_id");

    function loadAngsuran(url){
        $.ajax(url,{
            type: 'GET',
            success: function (data, status, xhr) {
                var data_obj = JSON.parse(data);
                if(data_obj['sukses'] == 'ya'){
                    var detail = data_obj['detail'];
                    var d = new Date();
                    var date_now = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate();
                    $('#nominal').val(detail['nominal_angsuran']);
                    $('#kali_angsuran').val(parseInt(detail['kali_angsuran']) + 1);
                    $('#tanggal').val(date_now);
                    $('#id_transaksi').val(detail['id_transaksi']);
                } else{
                    alert('Data Tidak Ditemukan');
                }
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        })
    }
    loadAngsuran("http://localhost/BE_CicilanMotor/transaksi/get_transaksi_by_id");
</script>