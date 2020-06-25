
<div class="card"> 
    <div class="card-body">
        <h4>Dibawah Ini Adalah Data Angsuran</h4>
  
        <table id="tabel_data_angsuran" class="table">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Tanggal Angsuran</th>
                    <th>Angsuran Ke</th>
                    <th>Bukti Angsuran</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>

    </div>
</div>


<script type="text/javascript" src="<?= base_url('assets/datatable/datatables.min.js')?>"></script>
<script type="text/javascript">
    
    function loadKonten(url){
        $.ajax(url,{
            type: 'GET',
            success: function (data, status, xhr) {
                var objData = JSON.parse(data);

                $('#tabel_data_angsuran').html(objData.konten);

                reload_event();
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        })
    }


    function reload_event(){
        $('.linkEditMotor').on('click', function (){
            var hashClean = this.hash.replace('#','');
            loadMenu('<?=base_url('motor/form_edit/')?>' + hashClean);
        });
        $('.linkHapusMotor').on('click', function(){
            var hashClean = this.hash.replace('#','');
            hapusData(hashClean);
        });

    }
    function hapusData(id_motor){
        var url = 'http://localhost/BE_CicilanMotor/motor/soft_delete_data?id_motor='+id_motor;

        $.ajax(url, {
            type: 'GET',
            success: function(data, status, xhr){
                var objData = JSON.parse(data);
                alert(objData['pesan']);
                loadKonten('http://localhost/BE_CicilanMotor/motor/data_motor');
            },
            error: function(jqXHR, textStatus, errorMsg){
                alert('Error : ' + errorMsg);
            }
        })
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tabel_data_angsuran').DataTable({
            "processing": true,
            "serverSide": true,
            "lengthMenu": [[ 5, 10, 20, -1],[5, 10, 20, "All"]],
            "ajax": "http://localhost/BE_CicilanMotor/angsuran/data_angsuran",
            "fnDrawCallback" : function () {
            reload_event();
            }
        })
    })

</script>