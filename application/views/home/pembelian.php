<div id="bodyKonten">
<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold js-scroll-trigger">Bebek's Motor</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?=base_url('home')?>" class="js-scroll-trigger nav-link text-uppercase font-weight-bold">home</a></li>
                    <!-- <li class="nav-item">
                      <a id="btn-logout" class="btn btn-sm btn-rounded btn-brand nav-link text-uppercase font-weight-bold ml-2">Logout</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container dashboard-content">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="user-avatar text-center d-block">
                        <div id="foto-user">
                                
                        </div>
                    </div>
                    <div class="text-center">
                        <h2 class="font-24 mb-0" id="nama_customer"></h2>
                        <p id="status_customer"></p>
                    </div>
                </div>
                <div class="card-body border-top">
                    <h3 class="font-16">Contact Information</h3>
                    <div class="">
                        <div class="row">
                            <i class="fas fa-fw fa-envelope mr-2 ml-3" ></i><p class="mb-2" id="email_customer"></p>
                        </div>
                        <div class="row">
                            <i class="fas fa-fw fa-phone mr-2 ml-3"></i><p class="mb-0" id="telp_customer"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Pilih Jumlah Angsuran</h5>
                <div class="card-body">
                    <form id="formPembelian" data-parsley-validate="">
                        <div class="row">
                            <div class="col-xl-5">
                            <div class="form-group row">
                                <label class="col-4 col-lg-4 col-form-label text-right">Merek</label>
                                <div class="col-8 col-lg-8">
                                    <input id="merek" type="text" required="" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-lg-4 col-form-label text-right">Seri</label>
                                <div class="col-8 col-lg-8">
                                    <input id="seri" type="text" required="" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-lg-4 col-form-label text-right">Harga</label>
                                <div class="col-8 col-lg-8">
                                    <input id="harga" type="number" required="" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-lg-4 col-form-label text-right">Angsuran</label>
                                <div class="col-8 col-lg-8 pl-4">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="kali_angsuran" id="kali_angsuran" value="12" class="custom-control-input form-user-input"><span class="custom-control-label">12 x</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="kali_angsuran" id="kali_angsuran" value="24" class="custom-control-input form-user-input"><span class="custom-control-label">24 x</span>
                                    </label>
                                </div>
                            </div>
                            </div>
                            <div class="col-xl-6">
                            <div class="form-group row">
                                <label class="col-4 col-lg-4 col-form-label text-right">Total Harga</label>
                                <div class="col-8 col-lg-8">
                                    <input type="number" name="total_pembelian" id="total_harga" required="" class="form-control form-user-input" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-lg-4 col-form-label text-right">Angsuran/Bulan</label>
                                <div class="col-8 col-lg-8">
                                    <input type="number" name="perbulan" id="perbulan" required="" class="form-control form-user-input" disabled>
                                </div>
                            </div>
                            <div class="row pt-2 pt-sm-5">
                                <div class="col-12 text-right">
                                    <input type="text" class="form-user-input" name="id_motor" id="id_motor">
                                    <input type="text" class="form-user-input" name="id_customer" id="id_customer">
                                    <button type="submit" class="btn btn-space btn-primary ">Proses</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">      
                <div class="card-body">
                    <img class="mx-auto" src="<?=base_url('assets/images/bni.png')?>" width="200px">
                    <p>Nomor Rekening :</p>
                    <h2>881 08189498715</h2>

                    <h4>NB : Angsuran pertama dilakukan saat pembelian</h4>
                </div>
            </div>
        </div> -->
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
<script type="text/javascript">
    $('#formPembelian').on('submit', function(e){
        e.preventDefault();
        sendDataPost();
    });

    function sendDataPost(){
        var link = "http://localhost/BE_CicilanMotor/transaksi/create_action/";
        var id_customer = $('#id_customer').val();
        console.log(id_customer);

        var dataForm = {};
        var allInput = $('.form-user-input');

        $.each(allInput, function (i, val) {
            dataForm[val['name']] = val['value'];
        });

        $.ajax(link, {
            type: 'POST',
            data: dataForm,
            success: function (data, status, xhr) {
                // console.log('success');
                Swal.fire({
                    type: 'success',
                    title: 'Pemesanan Motor Berhasil',
                    text: 'Silahkan melakukan angsuran pertama',
                    timer: 3000,
                    showCancelButton: false,
                    showConfirmButton: false
                })
                .then(function(){
                    loadPembayaran('<?=base_url('home/pembayaran/')?>' + id_customer);
                });
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
                console.log(errorMsg);
            }
        });
    }

    function loadPembayaran(url){
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
<script type="text/javascript">
    function loadKonten(url){
        $.ajax(url,{
            type: 'GET',
            success: function (data, status, xhr) {
                var data_obj = JSON.parse(data);
                if(data_obj['sukses'] == 'ya'){
                    var detail = data_obj['detail'];
                    var foto = data_obj['foto'];
                    $('#nama_customer').html(detail['nama']);
                    $('#status_customer').html(detail['status']);
                    $('#email_customer').html(detail['email']);
                    $('#telp_customer').html(detail['no_telepon']);
                    $('#id_customer').val(detail['id_customer']);
                    $('#foto-user').html(foto);
                } else{
                    alert('Data Tidak Ditemukan');
                }
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        });
    }
    loadKonten("http://localhost/BE_CicilanMotor/customer/get_customer_by_id");
</script>
<script type="text/javascript">
    function getDetail(id_motor){
        var link = 'http://localhost/BE_CicilanMotor/motor/detail?id_motor='+id_motor;

        $.ajax(link, {
            type: 'GET',
            success: function(data, status, xhr){
                var data_obj = JSON.parse(data);
                
                if(data_obj['sukses'] == 'ya'){
                    var detail = data_obj['detail'];
                    console.log(detail);
                    $('#merek').val(detail['merek']);
                    $('#seri').val(detail['seri']);
                    $('#harga').val(detail['harga']);
                    $('#id_motor').val(detail['id_motor']);
                    $('input:radio[name="kali_angsuran"]').change(function(){
                        if($(this).is(':checked')){
                            var ka = $(this).val();
                            if( ka == 12 ){
                                var total_harga = (parseInt(detail['harga']) + (parseInt(detail['harga'])*2/100));
                                var perbulan = (parseInt(total_harga)/ka);
                            }else if ( ka == 24 ){
                                var total_harga = (parseInt(detail['harga']) + (parseInt(detail['harga'])*4/100));
                                var perbulan = (parseInt(total_harga)/ka);
                            }
                            // console.log('perbulan ' + perbulan);
                            // console.log('total harga ' + total_harga);
                            $('#total_harga').val(total_harga);
                            $('#perbulan').val(perbulan);
                        }
                    });

                    

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
</script>