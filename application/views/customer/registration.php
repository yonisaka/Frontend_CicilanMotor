<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url() ?>/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        body {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-align: center;
          align-items: center;
          padding-top: 40px;
          padding-bottom: 40px;
        }
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
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mx-auto">
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
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Password</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                          <input type="password" required="" placeholder="Masukkan password"  name="password" id="password" class="form-control form-user-input">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">No KTP</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                          <input type="text" required="" data-parsley-max="16"  name="ktp" id="ktp" placeholder="Masukkan no ktp" class="form-control form-user-input">
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
                          <input data-parsley-type="number" type="text" required="" name="telp" id="telp" placeholder="Masukkan no tlp" class="form-control form-user-input">
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
                          <button type="submit" class="btn btn-space btn-primary">Register</button>
                          <button class="btn btn-space btn-secondary">Cancel</button>
                        </div>
                  </div>
              </div>
      </form>
    </div>

<script src="<?=base_url()?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
<script type="text/javascript">
    $('#formRegister').on('submit', function(e){
      e.preventDefault();
      sendDataPost();
    });

    function sendDataPost(){
      var link = "http://localhost/BE_CicilanMotor/auth/register_action";

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
          Swal.fire({
              type: 'success',
              title: 'Anda sudah berhasil mendaftar',
              timer: 3000,
              showCancelButton: false,
              showConfirmButton: false
          })
          .then(function(){
              location.replace("<?=base_url('')?>");
          });
        },
        error: function (jqXHR, textStatus, errorMsg) {
          alert('Error : ' + errorMsg);
          console.log(errorMsg);
        }
      });
    }
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
</body>
</html>