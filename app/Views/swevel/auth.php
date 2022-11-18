<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title . ' - PT Multi Visi Karya' ?></title>
    <link rel="shortcut icon" href="/img/logo/favi-logo2.png" type="image/x-icon">
    
    <script src="asset/custom_vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/asset/custom_vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/custom_vendor/fontawesome612/css/all.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/swevel_style.css">
    <link rel="stylesheet" href="/asset/css/custom.css">
    
    <style>
        body { background: #f5fbed; }
        
        #auth .wave1 { height: 36%; }
        
        #login .form-control {
            height: 47px;
            border-radius: 5px;
            padding-left: 20px;
            background: #f4f4f4;
        }
        
        .btn-green:hover {
            background: #88c946 !important;
            border-color: #88c946 !important;
            opacity: 1;
        }
        
        .btn-orange {
            background-color: #ff7f02 !important;
            border-color: #ff7f02 !important;
            opacity: 1;
        }
        
        .btn-orange:hover {
            background-color: #ff9c3b !important;
            border-color: #ff9c3b !important;
        }
    </style>
</head>

<body id="auth">
    <nav class="navbar navbar-expand-lg bg-transparent position-absolute w-100 shadow-none" style="top: 0;">
        <div class="container">
            <!--<a class="navbar-brand fw-bold" href="/"><img src="/img/logo/favi-logo2.png" alt="" style="max-width: 150px;height: 50px;"></a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-3"></ul>
            </div>
        </div>
    </nav>
    <div class="container h-100 w-100">
        <div class="wave1"></div>

        <section id="login">
            <div class="row justify-content-center h-100">
                <div class="col-sm-12 col-md-10 col-lg-5 my-auto px-4" style="margin-top: 10rem !important;">
                    <div class="card p-3 shadow">
                        <div class="card-body">
                            <center><a class="fw-bold" href="/"><img src="/img/logo/favi-logo2.png" alt="" style="max-width: 150px;height: 50px;"></a></center>
                            <div class="text-center fw-bold h4 mt-3 mb-5">PT Multi Visi Karya</div>
                            <div class="message-register success my-3"></div>
                            <form action="#" method="POST" autocomplete="off" id="form-login">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="payment" value="<?= $payment ?>">
                                <div class="mb-3">
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Ketik email Anda" autofocus>
                                    <div class="invalid-feedback email"></div>
                                </div>
                                <div class="mb-3">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Ketik password Anda">
                                    <div class="invalid-feedback password"></div>                                    
                                </div>
                                <div class="mb-5">
                                    <a href="#" style="color: #407a04;font-style: normal;font-size: 15px;position: absolute;right: 30px;">Lupa Password Anda?</a>                                 
                                </div>
                            </form>
                            <div class="mb-1">
                                <button class="btn btn-orange text-white btn-login mt-2 w-100 rounded-pill" id="btnLogin" name="login" style="letter-spacing: 0;padding: 10px;">MASUK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="wave2"></div>
    </div>
    
    <script src="/asset/custom_vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/custom_vendor/fontawesome612/js/all.min.js"></script>

    <script>
        $(document).ready(function() {
            $(function() {
                let lastSegment = window.location.href.split('#').pop();
                if (lastSegment == 'register') {
                    $('#login').addClass('d-none');
                    $('#register').removeClass('d-none');
                }
                if (lastSegment == 'login') {
                    $('#register').addClass('d-none');
                    $('#login').removeClass('d-none');
                }
            })

            $('.navbar-toggler').hide();

            $('#toRegister').click(function() {
                $('#login').addClass('d-none');
                $('#register').removeClass('d-none');
            })
            
            $('#toLogin').click(function() {
                $('#register').addClass('d-none');
                $('#login').removeClass('d-none');
            })

            $('#show-password-login, #show-password-register').change(function() {
                if (this.checked) {
                    $('#password,#register-password,#register-confirm-password').attr('type', 'text');
                } else {
                    $('#password,#register-password,#register-confirm-password').attr('type', 'password');
                }
            })

            $('#btnLogin').click(function() {
                /*$(this).html(`<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>`);
                $('#login #email,#login #password').removeClass("is-invalid");
                $('.invalid-feedback').html('');
                $(".message-register.success").removeClass('alert alert-success').html('');
                let email = $('#login #email').val();
                let password = $('#login #password').val();
                if (email == '') {
                    $(this).html('LOGIN');
                    $('#login #email').addClass("is-invalid").focus();
                    $('.invalid-feedback.email').html("Masukan Email");
                } else if (password == '') {
                    $(this).html('LOGIN');
                    $('#login #password').addClass("is-invalid").focus();
                    $('.invalid-feedback.password').html("Masukan Password");
                } else {
                    $.ajax({
                        url: '/verifikasi-login',
                        type: 'post',
                        dataType: 'json',
                        data: $('#form-login').serialize(),
                        success: function(result) {
                            $('#btnLogin').html('LOGIN');
                            if (result.message == 'email tidak ditemukan') {
                                $("#email").addClass('is-invalid').focus();
                                $('.invalid-feedback.email').html(result.message);
                            }
                            if (result.message == 'password salah') {
                                $("#password").addClass('is-invalid').focus();
                                $('.invalid-feedback.password').html(result.message);
                            }
                            if (result.message == 'login success') {
                                window.location.href = result.redirect;
                            }
                        }
                    })
                }*/
            })
            
            $('#login #email,#login #password').keypress(function(e) {
                if (e.which == 13) {
                    $('#btnLogin').click();
                }
            })
            
            $('#register input').keypress(function(e) {
                if (e.which == 13) {
                    $(".btn-register").click();
                }
            })
            
            $('.btn-register').click(function() {
                $(this).html(`<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>`);
                $('#register #register-email,#register #register-password,#register #register-fullname, #register #register-confirm-password').removeClass("is-invalid");
                $('#register .invalid-feedback').html('');
                $(".message-register.failed").removeClass('alert alert-danger').html('');
                let fullname = $('#register-fullname').val();
                let email = $('#register-email').val();
                let password = $('#register-password').val();
                let confirmPassword = $('#register-confirm-password').val();
                if (fullname == '') {
                    $(this).html('CREATE');
                    $('#register #register-fullname').addClass("is-invalid").focus();
                    $('#register .invalid-feedback.fullname').html("Masukan Nama");
                } else if (email == '') {
                    $(this).html('CREATE');
                    $('#register #register-email').addClass("is-invalid").focus();
                    $('#register .invalid-feedback.email').html("Masukan Email");
                } else if (password == '') {
                    $(this).html('CREATE');
                    $('#register #register-password').addClass("is-invalid").focus();
                    $('#register .invalid-feedback.password').html("Masukan Password");
                } else if (confirmPassword == '') {
                    $(this).html('CREATE');
                    $('#register-confirm-password').addClass("is-invalid").focus();
                    $('#register .invalid-feedback.confirm-password').html("Masukan Konfirmasi Password");
                } else if (password != confirmPassword) {
                    $(this).html('CREATE');
                    $('#register #register-confirm-password').addClass("is-invalid").focus();
                    $('#register .invalid-feedback.confirm-password').html("Konfirmasi password tidak sesuai");
                } else {
                    $.ajax({
                        url: '/verifikasi-register',
                        type: 'post',
                        dataType: 'json',
                        data: $('#form-register').serialize(),
                        success: function(result) {
                            if (result.code == '200') {
                                $('.btn-register').html("CREATE");
                                $('.message-register.success').html('Registrasi berhasil. silahkan login').addClass("alert alert-success");
                                $('#toLogin').click();
                            } else {
                                $('.btn-register').html("CREATE");
                                $('.message-register.failed').html('Registrasi gagal. silahkan registrasi ulang').addClass('alert alert-danger');
                            }
                        }
                    })
                }
            });
        });
    </script>
</body>
</html>