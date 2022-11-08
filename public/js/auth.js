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
    });

    $('#toRegister').click(function() {
        $('#login').addClass('d-none');
        $('#register').removeClass('d-none');
    });
    $('#toLogin').click(function() {
        $('#register').addClass('d-none');
        $('#login').removeClass('d-none');
    });

    $('#show-password-login, #show-password-register').change(function(){
        if(this.checked){
            $('#password,#register-password,#register-confirm-password').attr('type','text');
        }else{                
            $('#password,#register-password,#register-confirm-password').attr('type','password');
        }
    })

    $('#btnLogin').click(function() {
        $(this).html(`<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>`);
        $('#login #email,#login #password').removeClass("is-invalid");
        $('.invalid-feedback').html('');
        $(".message-register.success").removeClass('alert alert-success').html('');
        let email = $('#login #email').val();
        let password = $('#login #password').val();
        if (email == '') {
            $(this).html('LOGIN');
            $('#login #email').addClass("is-invalid").focus();
            $('.invalid-feedback.email').html("Masukan Email");
        }else if ( password == '') {
            $(this).html('LOGIN');
            $('#login #password').addClass("is-invalid").focus();
            $('.invalid-feedback.password').html("Masukan Password");
        }else{
            $.ajax({
                url: '/verifikasi-login',
                type: 'post',
                dataType: 'json',
                data: $('#form-login').serialize(),
                success : function(result){
                    $('#btnLogin').html('LOGIN');
                    if(result.message == 'email tidak ditemukan'){
                        $("#email").addClass('is-invalid').focus();
                        $('.invalid-feedback.email').html(result.message);
                    }
                    if(result.message == 'password salah'){
                        $("#password").addClass('is-invalid').focus();
                        $('.invalid-feedback.password').html(result.message);
                    }
                    if(result.message == 'login success'){
                        window.location.href = result.redirect;
                    }
                }
            })
        }
    });              
    $('#login #email,#login #password').keypress(function(e){
        if(e.which == 13){
            $('#btnLogin').click();
        }
    })
    $('#register input').keypress(function(e){
        if(e.which == 13){
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
        }
        else if (email == '') {
            $(this).html('CREATE');
            $('#register #register-email').addClass("is-invalid").focus();
            $('#register .invalid-feedback.email').html("Masukan Email");
        }
        else if ( password == '') {
            $(this).html('CREATE');
            $('#register #register-password').addClass("is-invalid").focus();
            $('#register .invalid-feedback.password').html("Masukan Password");
        }
        else if ( confirmPassword == '') {
            $(this).html('CREATE');
            $('#register-confirm-password').addClass("is-invalid").focus();
            $('#register .invalid-feedback.confirm-password').html("Masukan Konfirmasi Password");
        }
        else if (password != confirmPassword) {
            $(this).html('CREATE');
            $('#register #register-confirm-password').addClass("is-invalid").focus();
            $('#register .invalid-feedback.confirm-password').html("Konfirmasi password tidak sesuai");
        }
                                
        else{
            $.ajax({
                url: '/verifikasi-register',
                type: 'post',
                dataType: 'json',
                data: $('#form-register').serialize(),
                success : function(result){
                    if(result.code == '200'){
                        $('.btn-register').html("CREATE");
                        $('.message-register.success').html('Registrasi berhasil. silahkan login').addClass("alert alert-success");
                        $('#toLogin').click();
                    }else{
                        $('.btn-register').html("CREATE");
                        $('.message-register.failed').html('Registrasi gagal. silahkan registrasi ulang').addClass('alert alert-danger');
                    }
                }
            })
        }
    }); 
    
});