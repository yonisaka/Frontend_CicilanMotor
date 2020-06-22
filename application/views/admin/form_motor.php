<style type="text/css">
.upload-area{
    width: 70%;
    height: 350px;
    border: 2px solid lightgray;
    border-radius: 3px;
    margin: 0 auto;
    text-align: center;
    overflow: auto;
}
.upload-area:hover{
    cursor: pointer;
}
.upload-area h2{
    text-align: center;
    font-weight: normal;
    font-family: sans-serif;
    line-height: 50px;
    color: darkslategray;
}
#file{
    display: none;
}
/* Thumbnail */
.thumbnail{
    width: 80px;
    height: 80px;
    padding: 2px;
    border: 2px solid lightgray;
    border-radius: 3px;
    float: left;
}
.size{
    font-size:12px;
}
</style>
<div class="card">
    <h5 class="card-header">Form Edit Data Motor</h5>
        <div class="card-body">
            <form id="formMotor">
                <div class="form-group">
                    <label for="merek" class="col-form-label">Merek</label>
                    <input id="merek" type="text" class="form-control form-control-line form-user-input" name="merek">
                </div>
                <div class="form-group">
                    <label for="seri" class="col-form-label">Seri</label>
                    <input id="seri" type="text" class="form-control form-control-line form-user-input" name="seri">
                </div>
                <div class="form-group">
                    <label for="jenis" class="col-form-label">Jenis</label>
                    <input id="jenis" type="text" class="form-control form-control-line form-user-input" name="jenis">
                </div>
                <div class="form-group">
                    <label for="stok" class="col-form-label">Stok</label>
                    <input id="stok" type="text" class="form-control form-control-line form-user-input" name="stok">
                </div>
                <div class="form-group">
                    <label for="harga" class="col-form-label">Harga</label>
                    <input id="harga" type="text" class="form-control form-control-line form-user-input" name="harga">
                </div>
                <div class="form-group">
                    <label for="tahun_pembuatan" class="col-form-label">Tahun Pembuatan</label>
                    <input id="tahun_pembuatan" type="text" class="form-control form-control-line form-user-input" name="tahun_pembuatan">
                </div>
                <div class="form-group">
                    <label class="col-md-12">Upload Foto</label>
                        <div class="col-md-12">
                        <input type="file" name="file" id="file">
                        <!-- Drag and Drop Container -->
                        <div class="upload-area" id="uploadfile">
                        <h2>Drag and Drop file here <br/> or <br/> Click to select file</h2>
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-12">
                        <input class="form-user-input" type="hidden" name="id_motor" id="id_motor" value="">
                        <button class="btn btn-success" type="submit">Simpan Data</button>
                    </div>
                </div> 
            </form>
        </div>
       
<script type="text/javascript">

    $('#formMotor').on('submit', function(e){
        e.preventDefault();
        sendDataPost();
        // console.log('terklik');
    });

    function sendDataPost(){
        <?php
            if ($titel == 'Form Edit Data Motor'){
                echo "var link = 'http://localhost/BE_CicilanMotor/motor/update_action/';";
            }else{
                echo "var link = 'http://localhost/BE_CicilanMotor/motor/create_action/';";
            }
        ?>

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
                // console.log("submit sukses");
                alert(data['pesan']);
                loadMenu('<?= base_url('motor')?>');
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
                // console.log(errorMsg);
            }
        });
    }

    function getDetail(id_motor){

         var link = 'http://localhost/BE_CicilanMotor/motor/detail?id_motor='+id_motor;

         $.ajax(link, {
             type: 'GET',
             success: function (data, status, xhr) {         
                 var data_str = JSON.parse(data);
                 
                 if (data_str['sukses'] == 'ya'){
                    var detail = data_str['detail'];
                    $('#merek').val(detail['merek']);
                    $('#seri').val(detail['seri']);
                    $('#jenis').val(detail['jenis']);
                    $('#stok').val(detail['stok']);
                    $('#harga').val(detail['harga']);
                    $('#id_motor').val(detail['id_motor']);
                    $('#tahun_pembuatan').val(detail['tahun_pembuatan']);
                 }else{

                    alert('data tidak ditemukan');
                 }

             },
             error: function (jqXHR, textStatus, errorMsg) {
                 alert('Error : ' + errorMsg);
                 // console.log(errorMsg);
             }
         });
     }

     <?php
     if ($titel == 'Form Edit Data Motor') {
        echo 'getDetail('.$id_motor.')';
     }
    ?>   
    
</script>
<script type="text/javascript">
    $("html").on("drop", function(e) { 
        e.preventDefault(); 
        e.stopPropagation(); 
    });

    $("html").on("dragover", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(".upload-area > h2").text("Drag here");
    });

    $('.upload-area').on('dragenter', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $(".upload-area > h2").text("Drop");
    });

    $('.upload-area').on('dragover', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $(".upload-area > h2").text("Drop !!");
    });

    $(".upload-area").on("drop", function (e) {
        e.preventDefault();
        e.stopPropagation();
        var file = e.originalEvent.dataTransfer.files;
        $("#file")[0].files = file;
        // console.log(file);
        $(".upload-area > h2").text("File yang dipilih : " + file[0].name);
    });

    $(".upload-area").click(function(){
        $("#file").click();
    });

    $("#file").change(function () {
        var file = $("#file")[0].files[0];
        // console.log(file);
        $(".upload-area > h2").text("File yang dipilih : " + file.name);
    });


</script>