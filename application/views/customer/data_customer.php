
<div class="card"> 
    <div class="card-body">
        <h4>Dibawah Ini Adalah Data Customer</h4>
  
        <table id="tabel_data_customer" class="table">
            
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

                $('#tabel_data_customer').html(objData.konten);

                reload_event();
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        })
    }
    loadKonten('http://localhost/BE_CicilanMotor/customer/data_customer');

    function reload_event(){
        $('.linkEditCustomer').on('click', function (){
            var hashClean = this.hash.replace('#','');
            loadMenu('<?=base_url('customer/form_edit/')?>' + hashClean);
        });
        $('.linkHapusCustomer').on('click', function(){
            var hashClean = this.hash.replace('#','');
            hapusData(hashClean);
        });

        $('#tabel_data_customer').DataTable();

    }

    function hapusData(id_customer){
        var url = 'http://localhost/BE_CicilanMotor/customer/soft_delete_data?id_customer='+id_customer;

        $.ajax(url, {
            type: 'GET',
            success: function(data, status, xhr){
                var objData = JSON.parse(data);
                alert(objData['pesan']);
                loadKonten('http://localhost/BE_CicilanMotor/customer/data_customer');
            },
            error: function(jqXHR, textStatus, errorMsg){
                alert('Error : ' + errorMsg);
            }
        })
    }

</script>
