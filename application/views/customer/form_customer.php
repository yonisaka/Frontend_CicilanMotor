<style>
    .upload-area{
      width: 100%;
      height: 100px;
      border: 2px solid lightgray;
      border-radius: 3px;
      margin: 0 auto;
      text-align: center;
      overflow: auto;
    }
    .upload-area:hover{
      cursor: pointer;
    }
    .upload-area h4{
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
<form id="formRegister">
<div class="card">
  <div class="card-header">
      <h3 class="mb-title text-center mt-2 mb-2"><b>Registrations Form</b></h3>
      <p class="mb-title text-center">Masukkan data diri anda pada form dibawah ini.</p>
  </div>
  <div class="card-body">
      <div class="form-group row">
          <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama</label>
          <div class="col-12 col-sm-8 col-lg-6">
              <input type="text" required="" placeholder="Masukkan nama" name="nama" id="nama" class="form-control form-user-input">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-12 col-sm-3 col-form-label text-sm-right">Foto</label>
          <div class="col-12 col-sm-8 col-lg-6">
              <input type="file" name="file" id="file">
              <!-- Drag and Drop Container -->
              <div class="upload-area" id="uploadfile">
              <h4>Drag and Drop file here</h4>
              </div>
          </div>
      </div>
      <div class="form-group row">
          <label class="col-12 col-sm-3 col-form-label text-sm-right">E-Mail</label>
          <div class="col-12 col-sm-8 col-lg-6">
              <input type="email" required="" data-parsley-type="email" name="email" id="email" placeholder="Masukkan e-mail" class="form-control form-user-input">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-12 col-sm-3 col-form-label text-sm-right">No KTP</label>
          <div class="col-12 col-sm-8 col-lg-6">
              <input type="text" required="" data-parsley-max="16"  name="no_ktp" id="no_ktp" placeholder="Masukkan no ktp" class="form-control form-user-input">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-12 col-sm-3 col-form-label text-sm-right">Pekerjaan</label>
          <div class="col-12 col-sm-8 col-lg-6">
              <input type="text" required="" placeholder="Masukkan pekerjaan"  name="pekerjaan" id="pekerjaan" class="form-control form-user-input">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-12 col-sm-3 col-form-label text-sm-right">No Telepon</label>
          <div class="col-12 col-sm-8 col-lg-6">
              <input data-parsley-type="number" type="text" required="" name="no_telepon" id="no_telepon" placeholder="Masukkan no tlp" class="form-control form-user-input">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat</label>
          <div class="col-12 col-sm-8 col-lg-6">
              <textarea required="" class="form-control form-user-input"  name="alamat" id="alamat"></textarea>
          </div>
      </div>
      <div class="form-group row text-center">
          <div class="col col-sm-10 col-lg-10 offset-sm-1 offset-lg-0">
              <!-- <input type="text" name="status" id="status" value="Dalam angsuran"> -->
              <input class="form-user-input" type="hidden" name="id_customer" id="id_customer" value="">
              <button type="submit" class="btn btn-space btn-primary">Register</button>
            </div>
      </div>
  </div>
</div>
</form>
       
<script src="<?=base_url()?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
<script type="text/javascript">
  
    $('#formRegister').on('submit', function(e){
      e.preventDefault();
      sendDataPost();
    });

    function sendDataPost(){

      // var link = "http://localhost/BE_CicilanMotor/auth/register_action";
      <?php
          if ($titel == 'Form Edit Data Customer'){
              echo "var link = 'http://localhost/BE_CicilanMotor/customer/update_action/';";
          }else{
              echo "var link = 'http://localhost/BE_CicilanMotor/auth/register_action/';";
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
                 loadMenu('<?= base_url('customer')?>');
             },
             error: function (jqXHR, textStatus, errorMsg) {
                 alert('Error : ' + errorMsg);
                 // console.log(errorMsg);
             }
         });
     }
    function getDetail(id_customer){

         var link = 'http://localhost/BE_CicilanMotor/customer/detail?id_customer='+id_customer;

         $.ajax(link, {
             type: 'GET',
             success: function (data, status, xhr) {         
                 var data_str = JSON.parse(data);
                 
                 if (data_str['sukses'] == 'ya'){
                    var detail = data_str['detail'];
                    $('#nama').val(detail['nama']);
                    $('#email').val(detail['email']);
                    $('#password').val(detail['password']);
                    $('#no_ktp').val(detail['no_ktp']);
                    $('#pekerjaan').val(detail['pekerjaan']);
                    $('#id_customer').val(detail['id_customer']);
                    $('#no_telepon').val(detail['no_telepon']);
                    $('#alamat').val(detail['alamat']);
                    $('#status').val(detail['status']);
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
     if ($titel == 'Form Edit Data Customer') {
        echo 'getDetail('.$id_customer.')';
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
    $(".upload-area > h4").text("Drag here");
  });

  $('.upload-area').on('dragenter', function (e) {
    e.stopPropagation();
    e.preventDefault();
    $(".upload-area > h4").text("Drop");
  });

  $('.upload-area').on('dragover', function (e) {
    e.stopPropagation();
    e.preventDefault();
    $(".upload-area > h4").text("Drop !!");
  });

  $(".upload-area").on("drop", function (e) {
    e.preventDefault();
    e.stopPropagation();
    var file = e.originalEvent.dataTransfer.files;
    $("#file")[0].files = file;
    // console.log(file);
    $(".upload-area > h4").text("File yang dipilih : " + file[0].name);
  });

  $(".upload-area").click(function(){
    $("#file").click();
  });

  $("#file").change(function () {
    var file = $("#file")[0].files[0];
    // console.log(file);
    $(".upload-area > h4").text("File yang dipilih : " + file.name);
  });

</script>