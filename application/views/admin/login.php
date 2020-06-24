<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url() ?>/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <h3 class="text-center mt-4 mb-1"><b>Login Admin</b></h3>
            <div class="card-body">
                <form id="formLogin">
                    <div class="form-group">
                        <input class="form-control form-control-lg form-user-input" id="email" type="email" name="email" required="" placeholder="Masukkan email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg form-user-input" id="password" type="password" name="password" required="" placeholder="Masukkan password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                        <a href="registration" class="btn btn-secondary btn-lg btn-block">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <script type="text/javascript">
        $("#formLogin").on('submit', function (e) {
            e.preventDefault();
            checkLogin();
        });

        function checkLogin() 
        {
            var link = "http://localhost/BE_CicilanMotor/auth_admin/check_login/";

            var dataForm = {};
            var allInput = $('.form-user-input');

            $.each(allInput, function (i, val) {
                dataForm[val['name']] = val['value'];
            });

            $.ajax(link, {
                type: 'POST',
                data: dataForm,
                success: function (data, status, xhr) {
                    var data_str = JSON.parse(data);

                    alert(data_str['pesan']);
                    console.log(data_str);
                    if (data_str['sukses'] == 'Ya') {

                        setSession(data_str['admin']);
                    }
                },
                error: function (jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg);
                }
            });
        }

        function setSession(user) 
        {
            var link = "http://localhost/FE_CicilanMotor/home/setSession";

            var dataForm = {};
            dataForm['id_admin'] = user['id_admin'];
            dataForm['email'] = user['email'];
            dataForm['nama'] = user['nama'];

            $.ajax(link, {
                type: 'POST',
                data: dataForm,
                success: function (data, status, xhr)
                {
                    location.replace('http://localhost/FE_CicilanMotor/admin/landing_page');
                },
                    error: function (jqXHR, textStatus, errorMsg) {
                    alert('Error : ' + errorMsg);
                }
                });
        }


    </script>
</body>

</html>