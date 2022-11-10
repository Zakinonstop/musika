$(document).ajaxComplete(function() {
    $(".btn-buy-course, .btn-chart-course, .btn-materi-kuis-resume, .show-detail-pembayaran").click(function() {        
        $('#modal-login').addClass('active');
    });
        
    $("img").bind("error", function() {
        $(this).attr("src", "/img/poster.png");
    });    
})
// Format Rupiah
var formatRupiah = function(num) {
    var str = num.toString().replace("", ""),
        parts = false,
        output = [],
        i = 1,
        formatted = null;
    if (str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
    }
    str = str.split("").reverse();
    for (var j = 0, len = str.length; j < len; j++) {
        if (str[j] != ",") {
            output.push(str[j]);
            if (i % 3 == 0 && j < (len - 1)) {
                output.push(".");
            }
            i++;
        }
    }
    formatted = output.reverse().join("");
    return ("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
};


// login
$('#modal-login').append(`
    <section id="login" class="pt-lg-5">
    <div class="row justify-content-center h-100">
        <div class="col-sm-12 col-md-10 col-lg-5 my-auto px-4 mt-md-5">
            <div class="card px-3 shadow border-0 br-20">
                <div class="card-body">
                    <div class="close-modal-login text-dark d-flex justify-content-end">
                        <div class=""><i class="fa-solid fa-xmark small"></i></div>
                    </div>
                    <div class="text-center h4 my-4">
                        User Login
                    </div>
                    <div class="message-register success my-3"></div>
                    <form action="#" method="POST" autocomplete="off" id="form-login">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <input id="email" type="text" class="form-control" name="email" placeholder="Email" autofocus>
                            <div class="invalid-feedback email"></div>
                        </div>
                        <div class="mb-3">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Kata sandi">
                            <div class="invalid-feedback password"></div>                                    
                        </div>
                        <div class="mb-3">
                            <button id="btnLogin" type="button" class="btn btn-login w-100" name="login">Masuk</button>
                        </div>                                
                    </form>                            
                </div>
            </div>
        </div>
    </div>
    </section>
`);

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
    }
});
$('#login #email,#login #password').keypress(function(e) {
    if (e.which == 13) {
        $('#btnLogin').click();
    }
})
$('.close-modal-login').click(function() {
        $("#modal-login").removeClass('active');
    })
    // end login

// ================== Team =====================
$(".card-team").hover(function() {
    let heightCardTeam = $(this)[0].scrollHeight;
    $(this).removeClass('opacity-50').css({ 'transition': 'all .3s', 'box-shadow': '0px 1px 10px 10px #ddd', 'height': heightCardTeam + 20 });
    let heightImgPrimary = $(this).find('.card-body')[0].scrollHeight;
    $(this).find('.gradient').css({ 'display': 'block', 'height': heightImgPrimary + 2, 'position': 'absolute', "background": "rgb(255,255,255)", "background": "linear-gradient(22deg, rgba(255,255,255,0.6578803396358543) 19%, rgba(255,255,255,0) 72%)", 'bottom': '100px' })
});
$(".card-team").mouseleave(function() {
    let heightCardTeam = $(this)[0].scrollHeight;
    $(this).addClass('opacity-50').css({ "transition": "ease .3s", 'box-shadow': 'none', 'height': heightCardTeam - 20 });
    $(this).find('.gradient').css({ 'display': 'none' })
});

// Admin