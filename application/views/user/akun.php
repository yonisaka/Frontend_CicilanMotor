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
                                <li class="breadcrumb-item" aria-current="page">User Profile</li>
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
                            <div class="row">
                                <i class="fas fa-fw fa-envelope mr-2 ml-3" ></i><p class="mb-2" id="email_customer"></p>
                            </div>
                            <div class="row">
                                <i class="fas fa-fw fa-phone mr-2 ml-3"></i><p class="mb-0" id="telp_customer"></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="#" onclick="loadMenu('<?=base_url('user/angsuran')?>')" class="btn btn-block btn-primary">Angsuran Motor</a>
                        <a class="btn btn-block btn-secondary text-light">Edit Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card">       
                    <h4 class="card-header">History Cicilan Motor</h4>
                    <div class="card-body">
                        <table class="table table-bordered" id="tabel_angsuran" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nominal</th>
                                    <th scope="col">Angsuran ke</th>
                                    <th scope="col">Sisa Angsuran</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                        
                        </table>
                    </div>                      
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?=base_url('assets/datatable/datatables.min.js')?>"></script>
    <script type="text/javascript">
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

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#tabel_angsuran').DataTable({
                "processing": true,
                "serverSide": true,
                "lengthMenu": [[ 5, 7, 10, -1],[ 5, 7, 10, "ALL"]],
                "ajax": "http://localhost/BE_CicilanMotor/transaksi/get_dt_transaksi_angsuran_by_id"     
            });
        });
    </script>