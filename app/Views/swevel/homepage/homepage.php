<?= $this->extend("layout/template");
$this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<?php
function circle()
{
    makeCircle();
}
function circle1()
{
    makeCircle();
}
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

    .semi-circle {
        display: flex;
    }

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

    .btn-more-milestone {
        padding: 15px;
        border-radius: 25px;
    }

    @media only screen and (max-width: 992px) {
        .semi-circle {
            display: none;
        }

        #about-us .page-1 {
            min-height: calc(50vh - 70px);
        }

        .image-customer-review {
            display: none;
        }
    }
</style>

<div id="about-us">
    <div class="page-1 pt-5">
        <div class="container">
            <div class="col-lg-8 col-md-12 col-12 mb-5">
                <div class="text pt-5" data-aos="fade-right">
                    <h1 class="fw-bold" style="letter-spacing: 0px;">Perusahaan Layanan <span class="ch_color">Jasa Konsultasi di Bidang Konstruksi</span> dan Non Konstruksi</h1>
                    <p class="cover-text my-5">PT. Multi Visi Karya memiliki lebih dari 40 pengalaman pekerjaan dan telah dipercaya oleh banyak pengguna jasa terkemuka mulai dari jasa perencanaan, pengawasan, dan konsultansi teknik sipil lainnya. Memiliki tenaga ahli dengan Sertifikat Keahlian yang diterbitkan oleh Lembaga Pengembangan Jasa Konstruksi.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="image-homepage">
                    <img src="/img/Gambar.png" class="mt-5" alt="...">
                </div>
                <div class="circle-3"><?= circle(); ?></div>
            </div>
        </div>
    </div>
    <div id="aboutUs" class="page-2 py-5">
        <div class="container mt-5 pt-lg-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="semi-circle justify-content-center">
                        <img src="/img/kostruksi.webp" alt="" class="img">
                        <img src="/img/Group 2317.png" alt="" class="bg">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-profile mb-4 border-0 shadow cursor-pointer" data-aos="fade-left">
                        <div class="card-body">
                            <div class="row btn-card-profile">
                                <div class="col-lg-9 fw-bold">
                                    <h3>PT. Multi Visi Karya</h3>
                                </div>
                                <div class="text-dark mt-2">Sebuah Biro Jasa Konsultasi yang bergerak dalam bidang asa Perencana dan Pengawas Konstruksi yang terdiri dari bidang Arsitektur, Sipil, Jasa Inspeksi Teknis, Tata Lingkungan dan Survey, bahkan Jasa Non Konstruksi (Pendidikan, Perindustrian, Perdagangan, dan lainya).</div>
                            </div>
                            <div class="deskripsi-profile mt-3">
                                <div class="card-about">
                                    Berikut sub-klasifikasi proyek-proyek yang disediakan :
                                    <ul class="mt-2">
                                        <li>&ensp;Perencanaan Arsitektur (AR)</li>
                                        <li>&ensp;Perencanaan Penataan Ruang (PR)</li>
                                        <li>&ensp;Pengawasan Teknik (RE)</li>
                                        <li>&ensp;Konsultasi Lainnya (KL)</li>
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

<section id="service" class="pb-5">
    <div class="container pt-5">
        <div class="text-center mb-5 pb-5 ">
            <h1 class="fw-bold" style="letter-spacing: 0px;"><span class=" text-purple">Layanan</span> Kami</h1>
            <div class="">
                <span class="d-block">Kami juga menyediakan berbagai pelatihan dan jasa konsultasi</span>
                <span class="d-block">dan juga kursus untuk para pelanggan yang ingin berlanggangan</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center d-flex justify-content-center">
                <a href="/training" class="text-decoration-none text-dark" data-aos="zoom-in-up">
                    <div class="card card-service shadow mb-md-4 mb-sm-4 mx-3">
                        <div class="card-body">
                            <h3 class="card-title">Pelatihan Teknik</h3>
                            <p class="card-text">Kami menyediakan berbagai macam pelatihan teknik dengan mentor yang akan membimbing dan membina kalian</p>
                        </div>
                        <img src="/img/kostruksi.webp" class="card-img-bottom" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-lg-start justify-content-md-center justify-content-sm-center d-flex justify-content-center">
                <a href="/implementasi" class="text-decoration-none text-dark" data-aos="zoom-in-up">
                    <div class="card card-service shadow mb-md-4 mb-sm-4 mx-3">
                        <img src="/img/konsultasi.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Konsultasi Projek</h3>
                            <p class="card-text">Kami juga menyediakan jasa konsultasi projek untuk membantu menyelesaikan permasalahan yang dihadapi disegala bidang projek</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<div class="container" id="course">
    <div class="row">
        <div class="col-lg-4">
            <div class="text-purple h1 fw-bold position-absolute">Kursus</div>
        </div>
        <div class="col-lg-8 d-sm-none d-lg-block">
            <img src="/img/GroupImg.png" alt="" class="decoration">
        </div>
    </div>
    <div class="mt-4"></div>
    <div id="card-list-course" class="row mt-5 pt-5" data-aos="zoom-out"></div>
    <input type="hidden" name="" id="limit-course" value="3">
    <input type="hidden" id="input-categ" value="semua" readonly>
    <div class="d-flex justify-content-center mt-3">
        <a href="/course" class="btn btn-green px-5 btn-more-course hide text-light">Lihat semua</a>
    </div>
</div>

<section id="portofolio" class="hide">
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-lg-6 d-sm-none d-lg-block d-md-none">
                <img src="/img/GroupImg.png" alt="" class="decoration" style="z-index: 5;">
            </div>
            <div class="col-lg-6 text-lg-end text-md-center text-sm-center">
                <h2 class="text-purple fw-bold">Portofolio</h2>
                <p>Berikut ini merupakan dokumentasi projek yang pernah dilakukan oleh PT Multi Visi Karya</p>

            </div>
        </div>
        <div class="image-portofolio text-center">
            <div class="row fadeInUp" data-wow-delay="0.5s">
                <div class="portfolioFilter clearfix mb-4">
                    <button class="mx-2 p-2 cursor-pointer mb-3 active" data-kategori="semua">semua</button>
                    <?php foreach ($group_portofolio as $x) : ?>
                        <button class="mx-2 p-2 cursor-pointer mb-3" data-kategori="<?= $x['kategori']; ?>"><?= $x['kategori']; ?></button>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <img src="/img/loaderpurple1.gif" style="width:150px" class="loader-portofolio mt-3 hide">
            </div>
            <div class="row list-portofolio">
                <?php foreach ($portofolio as $x) : ?>
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <img src="/img/portofolio/<?= $x['gambar']; ?>">
                    </div>
                <?php endforeach; ?>
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
            $(".portfolioFilter button").removeClass('active');
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
    $(window).load(function() {
        var $container = $('#foto');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
    });
</script>

<link rel="stylesheet" href="/css/splide.min.css">
<section id="client">
    <div class="container pt-5">
        <div class="text-center mb-5 mt-4">
            <h2 class="text-purple-100"><span class="fw-bold">Klien</span> Kami</h2>
            <p>Kolaborasi dengan berbagai perusahaan </p>
        </div>
        <div class="pb-5">
            <div class="splide splide-client">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php for ($i = 0; $i < 10; $i++) : ?>
                            <div class="splide__slide">
                                <div class="card card-client mx-1 border-0 bg-transparent">
                                    <div class="card-body text-center pb-5">
                                        <div class="pb-3">
                                            <img src="http://new2.beecons.co.id/wp-content/uploads/2020/04/Logo-BEE.png" alt="" class="img-primary" style="max-width: 130px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main id="contact">
    <section id="customer-review" class="pt-5 pb-5">
        <div class="container mt-3">
            <h1 style="letter-spacing: 0px;"><strong><span class=" text-dark-purple">Ulasan</span><span> Pelanggan</span></strong></h1>
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
                                Pembelajaran Kursus yang bagus dan berbobot
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6"><i>"Kursus pembelajaran menyajikan materi yang jelas dan lengkap disertai video pembelajaran lagi."</i></p>
                            <p class="fs-7">dibuat oleh <span class="fw-semibold ls-05">natasya</span></p>
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
                                Portofolio projek PT Multi Visi Karya terjamin kualitasnya.
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6"><i>"Dilihat dari foto portofolio pada website PT Multi Visi Kaya memang perusahaan yang kompeten dan memiliki banyak hasil kerja yang memuaskan disetiap klien pelanggan."</i></p>
                            <p class="fs-7">dibuat oleh <span class="fw-semibold ls-05">romanoff</span></p>
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
                                Fitur website yang mudah digunakan dan terlihat menarik
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6"><i>"Saya sebagai pengguna baru dalam menggunakan website ini tidak merasa kesulitan dan paham dengan fitur-fitur yang ada dalam website karena websitenya yang menarik dan responsif"</i></p>
                            <p class="fs-7">dibuat oleh <span class="fw-semibold ls-05">hackeye</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contactUs" class="pb-5" style="background-color: #FAF6FF">
        <div class="container">
            <div class="row">
                <h1 class="mt-5 fw-bold text-center" style="letter-spacing: 0px;"><span class=" text-dark-purple">Kontak</span> Kami</h1>
            </div>
            <div class="card mt-5 border-0 shadow">
                <div class="card-body p-0">
                    <div class="container">
                        <div class="row">

                            <div class="col1 col-sm-12 col-md-12 col-lg-4 bg-purple">
                                <div class="row justify-content-center text-white">
                                    <div class="col-12 text-center">
                                        <h3 class="fw-bold">Informasi Kontak</h3>
                                        <p>Ada pertanyaan atau Komentar? Cukup Tulis Pesan kepada Kami</p>
                                    </div>

                                    <div class="col col-11">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-phone fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <span>(0274) 6497816</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-11">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-regular fa-envelope fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <span>musika_jogja@yahoo.co.id</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-11 pb-5">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-location-dot fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <span>Jl Sutrisno No.032, Candran Rt/Rw 10/05 Sidoarum, Godean, kabupaten Sleman.</span>
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
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="softwareDevelopment">
                                            <label class="form-check-label cursor-pointer" for="inlineRadio1">Kursus</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="learningManagement">
                                            <label class="form-check-label cursor-pointer" for="inlineRadio2">Pelatihan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" checked name="inlineRadioOptions" id="inlineRadio3" value="other">
                                            <label class="form-check-label cursor-pointer" for="inlineRadio3">lainnya</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end mt-5 sendMsg">
                                        <button id="btnSend" type="submit" class="btn btn-dark-purple btn-sm text-white fw-bolder rounded-pill ps-4 pe-4">Kirim</button>
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
        sliderClient();

        setTimeout(function() {
            $("#portofolio").removeClass('hide');
        }, 1000);
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

<script>
    $(document).ready(function() {
        AOS.init();
        $('body').css('overflow-x', 'hidden');
        getCourse('https://lms.lazy2.codes/api/course', '');

    })
</script>
<script src="/js/course.js"></script>

<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>