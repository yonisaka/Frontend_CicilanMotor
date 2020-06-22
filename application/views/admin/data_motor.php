
<div class="card"> 
    <div class="card-body">
        <h4>Dibawah Ini Adalah Data Motor</h4>
        <table id="tabel_data_motor"> </table>
        </div>
    </div>


<script type="text/javascript" src="<?= base_url('assets/datatable/datatables.min.js')?>"></script>
<script type="text/javascript">
    function loadKonten(url){
        $.ajax(url,{
            type: 'GET',
            success: function (data, status, xhr) {
                var objData = JSON.parse(data);

                $('#tabel_data_motor').html(objData.konten);

                reload_event();
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        })
    }
    loadKonten('http://localhost/BE_CicilanMotor/motor/data_motor');

    function reload_event(){
        $('.linkEditMotor').on('click', function (){
            var hashClean = this.hash.replace('#','');
            loadMenu('<?=base_url('motor/form_edit/')?>' + hashClean);
        });
        $('.linkHapusMotor').on('click', function(){
            var hashClean = this.hash.replace('#','');
            hapusData(hashClean);
        });

        $('#tabel_data_motor').DataTable();

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
