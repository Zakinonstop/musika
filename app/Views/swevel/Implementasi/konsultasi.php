<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/course/navbar-course'); ?>

<!-- <section id="course-top">
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="fw-bold text-white h1">Carilah Daftar Course Sesuai kebutuhanmu.</div>
                    <p class="h3">
                        Kami menyediakan berbagai macam course yang dapat kamu ikuti sesuai dengan kebutuhanmu dan kemampuanmu. Yuk, cari course yang kamu inginkan!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="course" class="pb-5 mb-5">
    <div class="container mt-5">
        <section id="popular-course">
            <div class="row justify-content-center text-center my-5 pb-3">
                <div class="col-8">
                    <div class="row">
                        <h2 class="fw-bold mb-5">Implementasi</h2>
                        <h6>Kami siap membantu dengan cepat dan jitu</h6>
                        <h6>Layanan konsultasi yang dapat menyelesaikan permasalahan yang Anda hadapi</h6>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container mt-5">
        <main id="faq">
            <section id="faqTop">
                <div class="container">
                    <div class="row justify-content-between mt-5">

                        <div class="col-sm-12 col-md-4 img">
                            <img src="/img/File Musika/538.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="col-sm-12 col-md-7">
                            <div class="row mb-3">Keuntungan dari layanan jasa konsultasi kami </div>
                            <div class="row benefit">
                                <div class="col-12">
                                    <h3><i class="fa-solid fa-circle-check" style="color: green;"></i>&ensp;Konsultasi Langsung Dengan Ahli</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-12">
                                    <h3><i class="fa-solid fa-circle-check" style="color: green;"></i>&ensp;Waktu Fleksibel</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <div class="col-12">
                                    <h3><i class="fa-solid fa-circle-check" style="color: green;"></i>&ensp;Metode Lintas Disiplin</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <div class="row search">
                                <div class="col-8">
                                    <div class="hub_kami">
                                        <a href="" class="btn btn-success">Hubungi Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
    </div>
</section>

<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>