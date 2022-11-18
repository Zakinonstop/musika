<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<?
    function circle() { makeCircle(); }
    function circle1() { makeCircle(); }
?>

<style>
    #about-us .page-1 {
        padding-bottom: 20px;
        min-height: calc(100vh - 70px);
        background: rgb(186, 237, 134);
        background: linear-gradient(340deg, rgba(186, 237, 134, 1) -20%, rgba(255, 255, 255, 1) 62%);
    }

    #about-us .page-2 {
        margin-top: -5px;
        padding-bottom: 10px;
        background: rgb(186, 237, 134);
        background: linear-gradient(590deg, rgba(186, 237, 134, 1) -20%, rgba(255, 255, 255, 1) 70%);
    }

    .card-profile {
        border-radius: 15px;
        min-height: 120px;
        padding: 10px 20px;
        font-size: 18px;
    }

    .semi-circle { display: flex; }

    .semi-circle .img {
        clip-path: circle(49.9% at 0 50%);
        width: 350px;
        height: 450px;
        position: relative;
        z-index: 5;
    }

    .semi-circle .bg {
        position: absolute;
        width: 380px;
        margin-top: -50px;
        margin-left: -70px;
    }
    
    .list-portofolio img { width: 100%; }

    .form-check-input:checked {
        background-color: #61af11;
        border-color: #61af11;
    }

    @media only screen and (max-width: 992px) {
        .semi-circle { display: none; }

        #about-us .page-1 { min-height: calc(50vh - 70px); }

        .image-customer-review { display: none; }
    }
</style>

<div id="about-us">
    <div class="page-1 pt-5">
        <div class="container">
            <div class="col-lg-6 col-md-12 col-12 mb-5">
                <div class="text pt-9" data-aos="fade-right">
                    <h1 class="fw-bold" style="letter-spacing: 0;">Mari Selesaikan Bersama <span class="ch_color">Proyek</span> Anda!</h1>
                    <p class="cover-text my-4" style="line-height: 1.8;font-size: 17px;">Kami telah memiliki lebih dari 10 tahun pengalaman pekerjaan dan telah dipercaya oleh ratusan pengguna jasa terkemuka mulai dari perencanaan, pengawasan, dan konsultansi lainnya.<br>
                    Memiliki tenaga ahli professional yang kompeten dan telah tersertifikasi oleh Lembaga Pengembangan Jasa Konstruksi (LPJK).</p>
                    <a href="/#kontak" class="btn btn-orange text-white px-5 py-3" style="font-size: 18px;">Konsultasi dengan Kami</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-homepage">
                    <img class="shadow mt-5" src="/img/portofolio/perpustakaan (4).jpg" alt="" style="width: 44%;border-radius: 40px 0 0 40px;">
                </div>
                <div class="circle-3"><?= circle(); ?></div>
            </div>
        </div>
    </div>
    <div id="tentang" class="page-2 py-5">
        <div class="container pt-lg-3">
            <div class="row">
                <div class="col-lg-5">
                    <div class="semi-circle justify-content-center">
                        <img src="/img/kostruksi.webp" alt="" class="img">
                        <img src="/img/Group 2317.png" alt="" class="bg">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card card-profile border-0 shadow px-3" data-aos="fade-left" style="font-size: 17px;">
                        <div class="card-body">
                            <div class="row btn-card-profile">
                                <div class="col-lg-9 fw-bold">
                                    <h3>PT Multi Visi Karya</h3>
                                </div>
                                <div class="text-dark mt-2">Kami merupakan biro konsultasi yang bergerak di bidang jasa perencana dan pengawas konstruksi yang terdiri dari bidang arsitektur, sipil, jasa inspeksi teknis, tata lingkungan, dan survey. Selain itu, kami juga menyediakan layanan pelatihan bagi engineer muda untuk memahami secara mendalam terkait bidang konstruksi.</div>
                            </div>
                            <div class="deskripsi-profile mt-3">
                                <div class="card-about">
                                    Berikut sub klasifikasi bidang yang kami sediakan:
                                    <ul class="mt-2 mb-0">
                                        <li>&ensp;71101 - Aktivitas Arsitektur</li>
                                        <li>&ensp;71102 - Aktivitas Keinsinyuran dan Konsultasi Teknis YBDI</li>
                                        <li>&ensp;74120 - Aktivitas Desain Interior</li>
                                        <li>&ensp;78421 - Pelatihan Kerja Teknik Swasta</li>
                                        <li>&ensp;78422 - Pelatihan Kerja Teknologi Informasi dan Komunikasi Swasta</li>
                                        <li>&ensp;78431 - Pelatihan Kerja Teknik Perusahaan</li>
                                        <li>&ensp;78432 - Pelatihan Kerja Teknologi Informasi dan Komunikasi Perusahaan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="layanan">
    <div class="container pt-5">
        <div class="text-center mb-5 pb-5">
            <h1 class="fw-bold" style="letter-spacing: 0;"><span class="text-purple">Layanan</span> Kami</h1>
            <div class="">
                <span class="d-block">Kami menyediakan berbagai jasa konsultasi bidang konstruksi dan instrumen pembelajaran terkait BIM (Building Information Modelling)</span>
                <span class="d-block">bagi para akademisi atau engineer muda professional</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center d-flex justify-content-center">
                <a href="/#kursus" class="text-decoration-none text-dark" data-aos="zoom-in-up">
                    <div class="card card-service shadow mb-md-4 mb-sm-4 mx-3" style="max-width: 350px;">
                        <div class="card-body">
<<<<<<< HEAD
                            <h3 class="card-title text-center">Pelatihan Teknik</h3>
                            <p class="card-text text-center">Ikuti berbagai kursus dan pelatihan terkait BIM yang akan difasilitasi oleh mentor handal yang akan membantu menaikkan level keahlian Anda</p>
=======
                            <h3 class="card-title">Pelatihan Teknik</h3>
                            <p class="card-text">Kami menyediakan berbagai macam pelatihan teknik dengan mentor yang akan membimbing dan membina kalian</p>
>>>>>>> 7a9fde547cd401387d3751c1752701cf7b28f184
                        </div>
                        <img src="/img/kostruksi.webp" class="card-img-bottom" alt="">
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-lg-start justify-content-md-center justify-content-sm-center d-flex justify-content-center">
                <a href="/#portofolio" class="text-decoration-none text-dark" data-aos="zoom-in-up">
                    <div class="card card-service shadow mb-md-4 mb-sm-4 mx-3" style="max-width: 350px;">
                        <img src="/img/konsultasi.jpg" class="card-img-top" alt="">
                        <div class="card-body">
<<<<<<< HEAD
                            <h3 class="card-title text-center">Konsultasi Proyek</h3>
                            <p class="card-text text-center">Dukungan tenaga ahli dan tim teknis yang kompeten dan tersertifikasi yang siap membantu menyelesaikan proyek Anda lebih cepat</p>
=======
                            <h3 class="card-title">Konsultasi Projek</h3>
                            <p class="card-text">Kami juga menyediakan jasa konsultasi projek untuk membantu menyelesaikan permasalahan yang dihadapi disegala bidang projek</p>
>>>>>>> 7a9fde547cd401387d3751c1752701cf7b28f184
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="kursus">
    <div class="container pt-5 my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-purple fw-bold">Kursus</h2>
                <p>Kami menyediakan berbagai topik kursus di bidang engineering seperti implementasi BIM dan estimasi biaya proyek konstruksi</p>
            </div>
            <div class="col-lg-6 d-sm-none d-lg-block d-md-none" style="height: 165px;">
                <img src="/img/GroupImg.png" alt="" class="decoration" style="z-index: 5;margin-top: -20vh;">
            </div>
        </div>
        <div id="card-list-course" class="row" data-aos="zoom-out">
            <?php foreach ($kursus as $x) : ?>
                <div class="col-md-6 col-lg-4 col-sm-12 col-course mb-5">
                    <div class="card card-course border-0 shadow br-15">                
                        <div class="image-content card-thumbnail-course cursor-pointer" data-id="<?= $x->course_id ?>">
                            <div class="text-center p-2 btn-light-50-hover-0 position-absolute small br-end-10 mt-3"><?= $x->category ?></div> 
                            <img src="https://musika.id/img/portofolio/perpustakaan%20(4).jpg" alt="<?= $x->title ?>" style="width: 100%;">
                        </div>                
                        <div class="card-content card-content-course px-4 py-4">
                            <h5 class="card-title fw-bold lh-base cursor-pointer" data-id="<?= $x->course_id ?>"><?= $x->title ?></h5>                                                                            
                            <div class="row">
                                <div class="col-sm-8 col-md-6 col-lg-12">
                                    <p class="card-text h6 text-decoration-line-through text-secondary">Rp <?= number_format($x->old_price, 0, ",", ".") ?></p>
                                    <p class="card-text h5 fw-bold text-orange">Rp <?= number_format($x->new_price, 0, ",", ".") ?></p>
                                </div>                        
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-10">
                                    <div class="btn btn-green text-white cursor-pointer btn-buy-course" style="width: 108%;">Beli Kursus</div>
                                </div>
                                <div class="col-md-2 text-center">                        
                                    <div class="btn-chart-course cursor-pointer"><i class="fa-solid fa-cart-shopping" style="margin-top: 2px;"></i></div>                                             
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/edu" class="btn btn-orange text-white px-5 btn-more-course">Lihat Semua</a>
        </div>
    </div>
</section>

<section id="portofolio">
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 d-sm-none d-lg-block d-md-none">
                <img src="/img/GroupImg.png" alt="" class="decoration" style="z-index: 5;">
            </div>
            <div class="col-lg-6 text-lg-end text-md-center text-sm-center">
                <h2 class="text-purple fw-bold">Portofolio</h2>
                <p>Kami telah memiliki pengalaman lebih dari 10 tahun mengerjakan proyek di berbagai bidang konstruksi maupun non konstruksi</p>
            </div>
        </div>
        <div class="image-portofolio text-center">
            <div class="row fadeInUp" data-wow-delay="0.5s">
                <div class="portfolioFilter clearfix mb-4">
                    <button class="mx-2 p-2 cursor-pointer mb-3 active" data-kategori="semua">Semua</button>
                    <?php foreach ($group_portofolio as $x) : ?>
                        <button class="mx-2 p-2 cursor-pointer mb-3" data-kategori="<?= $x['kategori']; ?>"><?= ucwords($x['kategori']); ?></button>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <img src="/img/loaderpurple1.gif" class="loader-portofolio hide" style="width: 60px;">
            </div>
            <div class="row list-portofolio">
                <?php foreach ($portofolio as $x) : ?>
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <img src="/img/portofolio/<?= $x['gambar']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="/js/isotope/isotope.pkgd.min.js"></script>
<script src="/js/isotope/isotope.pkgd.js"></script>
<script>
    // js loadmore
    $(document).ready(function() {
        $(".moreBox").slice(0, 11).css('display', 'block');
        $(".moreBox").slice(12, 23).css('display', 'none');

        $('#loadMore').css('display', 'block');
        $('#loadLess').css('display', 'none');

        $("#loadMore").on('click', function(e) {
            e.preventDefault();
            $(".moreBox").slice(0, 23).css('display', 'block');
            $('#loadMore').css('display', 'none');
            $('#loadLess').css('display', 'block');
        });

        $("#loadLess").on('click', function(e) {
            e.preventDefault();
            $(".moreBox").slice(0, 11).css('display', 'block');
            $(".moreBox").slice(12, 23).css('display', 'none');
            $('#loadLess').css('display', 'none');
            $('#loadMore').css('display', 'block');
        });

        $('.portfolioFilter button').click(function() {
            $('.loader-portofolio').removeClass('hide');
            $('.list-portofolio').html('');
            $('.portfolioFilter button').removeClass('active');
            $(this).addClass('active');
            let kategori = $('.portfolioFilter button.active').data('kategori');
            $.ajax({
                url: '/getPortofolio/' + kategori,
                type: 'get',
                dataType: 'json',
                success: function(result) {
                    $('.loader-portofolio').addClass('hide');
                    if (result.code == '200') {
                        $.each(result.portofolio, function(index, data) {
                            $('.list-portofolio').append(`
                                <div class="col-lg-3 col-md-6 col-12 mb-4">
                                    <img src="/img/portofolio/` + data.gambar + `">
                                </div>
                            `);
                        })
                    } else {
                        $('.list-portofolio').html(`<div class="alert alert-warning">Data tidak ditemukan</div>`)
                    }
                }
            })
        })
    });
    
    // js category
    /*$(window).load(function() {
        var $container = $('#foto');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
    });*/
</script>

<link rel="stylesheet" href="/css/splide.min.css">
<section id="client">
    <div class="container pt-5">
        <div class="row text-center mb-5">
            <h1 class="fw-bold text-center" style="letter-spacing: 0;"><span class="text-dark-purple">Klien</span> Kami</h1>
            <p>Ratusan institusi telah menggunakan layanan kami untuk menyelesaikan proyek mereka secara cepat dan meningkatkan keahlian tim di perusahaan</p>
        </div>
        <div class="pb-5">
            <div class="splide splide-client">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="splide__slide">
                            <div class="card card-client mx-1 border-0 bg-transparent">
                                <div class="card-body text-center pb-5">
                                    <div class="pb-3">
                                        <img src="/img/logo-pu.png" alt="" class="img-primary" style="max-width: 130px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="card card-client mx-1 border-0 bg-transparent">
                                <div class="card-body text-center pb-5">
                                    <div class="pb-3">
                                        <img src="/img/logo-cipta-karya.png" alt="" class="img-primary" style="max-width: 160px;margin-top: -19px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="card card-client mx-1 border-0 bg-transparent">
                                <div class="card-body text-center pb-5">
                                    <div class="pb-3">
                                        <img src="/img/logo-asuransi-jasindo.png" alt="" class="img-primary" style="max-width: 265px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="card card-client mx-1 border-0 bg-transparent">
                                <div class="card-body text-center pb-5">
                                    <div class="pb-3">
                                        <img src="/img/logo-dinas-pendidikan.png" alt="" class="img-primary" style="max-width: 105px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mb-0" style="margin-top: -20px;">100+ institusi lainnya</p>
            </div>
        </div>
    </div>
</section>

<main id="contact">
    <section id="ulasan" class="pt-5 pb-5">
        <div class="container mt-3">
            <h1 style="letter-spacing: 0;"><strong><span class=" text-dark-purple">Ulasan</span><span> Klien</span></strong></h1>
        </div>
        <div class="bg1 mt-5" data-aos="zoom-in-right">
            <div class="container bg-transparent p-3">
                <div class="row flex-row-reverse">
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center my-auto image-customer-review">
                        <img src="asset/image/contactUs/boyy.png" alt="" width="200px">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Pembelajaran kursus bagus dan berbobot
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6"><i>"Kurukulum pembelajarannya sangat yang jelas dan sistematis, dilengkapi video pembelajaran juga, saya jadi lebih mudah memahami isi materinya."</i></p>
                            <p class="fs-7">diulas oleh <span class="fw-semibold ls-05">Natasya Wulandari - Mahasiswa</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg2 mt-5" data-aos="zoom-in-left">
            <div class="container bg-transparent p-3">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center my-auto image-customer-review">
                        <img src="asset/image/contactUs/boyy.png" alt="" width="200px">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Pelayanan konsultasi yang professional
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6"><i>"Baru kali ini saya ketemu konsultan yang pelayanannya ramah, pengerjaan desainnya pun bagus sekali dan rapi, Good Job."</i></p>
                            <p class="fs-7">diulas oleh <span class="fw-semibold ls-05">Rudi Kurniawan - Kontraktor</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg1 mt-5" data-aos="zoom-in-right">
            <div class="container bg-transparent p-3">
                <div class="row flex-row-reverse">
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center my-auto image-customer-review">
                        <img src="asset/image/contactUs/boyy.png" alt="" width="200px">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Sistem pembelajaran mudah digunakan dan menarik
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6"><i>"Saya sebagai pengguna awam ketika menggunakan sistem pembelajarannya tidak merasa kesulitan dan cepat memahami penggunaannya, fiturnya lengkap."</i></p>
                            <p class="fs-7">diulas oleh <span class="fw-semibold ls-05">Rangga Widodo - Sipil</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="pb-5" style="background-color: #FAF6FF">
        <div class="container">
            <div class="row">
                <h1 class="mt-5 fw-bold text-center" style="letter-spacing: 0;"><span class=" text-dark-purple">Kontak</span> Kami</h1>
            </div>
            <div class="card mt-5 border-0 shadow">
                <div class="card-body p-0">
                    <div class="container">
                        <div class="row">
                            <div class="col1 col-sm-12 col-md-12 col-lg-4 bg-purple">
                                <div class="row justify-content-center text-white">
                                    <div class="col-12 text-center mt-5 pb-4">
                                        <h3 class="fw-bold">Informasi Kontak</h3>
                                        <p>Ada pertanyaan atau komentar?<br> Kirimkan pesan Anda kepada kami</p>
                                    </div>

                                    <div class="col col-11 pb-1">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-phone fs-4" style="height: 22px;margin-top: -3px;margin-left: 1px;"></i>
                                            </div>
                                            <div class="col-10" style="padding-top: 1px;">
                                                <span>(0274) 6497816</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-11 pb-1">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-envelope fs-4" style="height: 24px;"></i>
                                            </div>
                                            <div class="col-10" style="padding-top: 4px;">
                                                <span>musika_jogja@yahoo.co.id</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-11 pb-5">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-location-dot fs-4" style="margin-top: 1px;margin-left: 4px;"></i>
                                            </div>
                                            <div class="col-10" style="padding-top: 5px;">
                                                <span>Jalan Sutrisno Nomor 32, Candran RT/RW 10/05 Sidoarum, Godean, Sleman, Daerah Istimewa Yogyakarta</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col2 col-sm-12 col-md-12 col-lg-8">
                                <form class="row g-3 justify-content-between p-5">
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-input-label">Nama</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">Email</label>
                                        <input type="email" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">Telepon</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-input-label">Pesan</label>
                                        <textarea class="form-control" placeholder="" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="mt-3 fs-7 fw-bold">Apa topik yang ingin ditanyakan?</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" checked name="inlineRadioOptions" id="inlineRadio1" value="pelatihan">
                                            <label class="form-check-label cursor-pointer" for="inlineRadio1">Pelatihan Teknik</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="konsultasi">
                                            <label class="form-check-label cursor-pointer" for="inlineRadio2">Konsultasi Proyek</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="lainnya">
                                            <label class="form-check-label cursor-pointer" for="inlineRadio3">Lainnya</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end mt-3 sendMsg">
                                        <button id="btnSend" type="submit" class="btn btn-green text-white btn-md rounded-pill px-5">Kirim</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="/js/splide.min.js"></script>

<script>
    $(document).ready(function() {
        AOS.init();
        $('body').css('overflow-x', 'hidden');
        
        sliderClient();

        setTimeout(function() {
            $("#portofolio").removeClass('hide');
        }, 1000);
    })
    
    $('.card-thumbnail-course, .card-content-course .card-title').click(function() {
        let id = $(this).data('id');
        window.location.href = '/edu/detail/' + id;
    })
    
    $('.btn-buy-course, .btn-chart-course').click(function() {
        window.location.href = '/login';
    })

    let sliderClient = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 768px)");
        let mediaLg = window.matchMedia("(max-width: 100px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
            var perPage = 2;
        } else if (mediaLg.matches) {
            var perPage = 4;
        } else {
            var perPage = 4;
        }
        var splide = new Splide('.splide.splide-client', {
            perPage: perPage,
            rewind: true,
            arrows: false,
        });
        splide.mount();
    }
</script>

<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->endSection(); ?>