<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/course/navbar-course'); ?>

<section id="course-top">
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="fw-bold text-white h1">Carilah Daftar Course Sesuai kebutuhanmu.</div>
                    <p class="h3">
                        Kami menyediakan berbagai macam course yang dapat kamu ikuti sesuai dengan kebutuhanmu dan kemampuanmu. Yuk, cari course yang kamu inginkan!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="course" class="pb-5 mb-5">
    <div class="container mt-5">
        <section id="popular-course">
            <div class="row my-5 pb-3">
                <div class="col-lg-7">
                    <div class="h1 fw-bold"><span class="text-purple-100">Kursus</span></div>
                    <input type="hidden" name="" id="limit-course" value="0">
                    <div class="list-category-course">
                        <span class="fw-bold">Kategori : </span>
                        <input type="hidden" id="input-categ" value="semua" readonly>
                        <button class="btn btn-light btn-sm mx-2 btn-category-course" data-categ="semua">Semua</button>
                    </div>
                </div>
                <div class="col-lg-5 col-search-course">
                    <div class="search-event">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" data-kategori="course" id="search-course-training" placeholder="Cari kursus">
                            <button class="btn btn-purple" type="button" id="btn-search-course-training">Cari</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <img src="/img/loaderpurple1.gif" alt="" class="skeleton">
            </div>
            <div class="row.">
                <div class="splide. popular-course">
                    <div class="splide.__track">
                        <div class="splide.__list pb-5 row" id="card-list-course"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container mt-5">
        <main id="faq">
            <section id="faqTop">
                <div class="container">
                    <div class="row justify-content-between flex-row-reverse mt-5">

                        <div class="col-sm-12 col-md-4 img">
                            <!-- <div class="card border-0">
                    <div class="card-body p-0"> -->
                            <img src="/img/File Musika/FAQ.png" width="100%" alt="">
                            <!-- </div>
                </div> -->
                        </div>

                        <div class="col-sm-12 col-md-7">
                            <h1 class="fw-light lh-base" style="letter-spacing: 0px;">
                                Masih Ada <span class="fw-bold text-dark-purple">Pertanyaan </span>?</br>
                                Lihat Disini
                            </h1>
                            <div class="row search">
                                <div class="col-8">
                                    <div class="input-group inputfaq">
                                        <span class="input-group-text border-0 bg-transparent" id="basic-addon1">
                                            <i class="bi bi-search text-secondary fs-5"></i>
                                        </span>
                                        <input type="text" class="form-control border-0" placeholder="Ketik disini ..." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section id="question">
                <div class="container pb-5 ">
                    <div class="row mt-5">
                        <div class="col-sm-12 col-md-5 justify-content-center d-flex">
                            <ul class="nav flex-column nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                <button class="nav-link active fw-normal" data-bs-toggle="pill" data-bs-target="#general" type="button" role="tab" aria-selected="true">Umum</button>
                                <button class="nav-link fw-normal" data-bs-toggle="pill" data-bs-target="#services" type="button" role="tab" aria-selected="false">Layanan</button>
                                <button class="nav-link fw-normal" data-bs-toggle="pill" data-bs-target="#aboutUs" type="button" role="tab" aria-selected="false">Tentang Kita</button>
                                <button class="nav-link fw-normal" data-bs-toggle="pill" data-bs-target="#event" type="button" role="tab" aria-selected="false">Kursus</button>
                                <button class="nav-link fw-normal" data-bs-toggle="pill" data-bs-target="#course" type="button" role="tab" aria-selected="false">Pelatihan</button>
                                <button class="nav-link fw-normal" data-bs-toggle="pill" data-bs-target="#training" type="button" role="tab" aria-selected="false">Implementasi</button>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab" tabindex="0">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed fw-normal" type="button" data-bs-toggle="collapse" data-bs-target="#general1" aria-expanded="false">
                                                    General #1
                                                </button>
                                            </h2>
                                            <div id="general1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed fw-normal" type="button" data-bs-toggle="collapse" data-bs-target="#general2" aria-expanded="false">
                                                    General #2
                                                </button>
                                            </h2>
                                            <div id="general2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed fw-normal" type="button" data-bs-toggle="collapse" data-bs-target="#general3" aria-expanded="false">
                                                    General #3
                                                </button>
                                            </h2>
                                            <div id="general3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab" tabindex="0">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed fw-normal" type="button" data-bs-toggle="collapse" data-bs-target="#services1" aria-expanded="false">
                                                    Services #1
                                                </button>
                                            </h2>
                                            <div id="services1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="aboutUs" role="tabpanel" aria-labelledby="aboutUs-tab" tabindex="0">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed fw-normal" type="button" data-bs-toggle="collapse" data-bs-target="#aboutus1" aria-expanded="false">
                                                    About Us #1
                                                </button>
                                            </h2>
                                            <div id="aboutus1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab" tabindex="0">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed fw-normal" type="button" data-bs-toggle="collapse" data-bs-target="#event1" aria-expanded="false">
                                                    Event #1
                                                </button>
                                            </h2>
                                            <div id="event1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="course" role="tabpanel" aria-labelledby="course-tab" tabindex="0">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed fw-normal" type="button" data-bs-toggle="collapse" data-bs-target="#course1" aria-expanded="false">
                                                    Course #1
                                                </button>
                                            </h2>
                                            <div id="course1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="training-tab" tabindex="0">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed fw-normal" type="button" data-bs-toggle="collapse" data-bs-target="#training1" aria-expanded="false">
                                                    Training #1
                                                </button>
                                            </h2>
                                            <div id="training1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                            </div>
                                        </div>

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

<script>
    $(document).ready(function() {

        searchHover = function() {
            let input = $('#faq .inputfaq input');
            let i = $('#faq .inputfaq i');
            input.on('focus', function() {
                $(this).parent().addClass('focus');
                i.addClass('text-dark-purple');
            })
            input.on('blur', function() {
                if ($(this).val().length == 0) {
                    $(this).parent().removeClass('focus');
                    i.removeClass('text-dark-purple');
                }
            })
        }
        searchHover();

        questionFunc = function() {
            let mediaSm = window.matchMedia("(max-width: 576px)");
            let mediaMd = window.matchMedia("(min-width: 577px)");
            let ul = $('#question ul');
            let parentUl = ul.parent();
            if (mediaSm.matches) {
                if (ul.hasClass('flex-column') && parentUl.hasClass('d-flex')) {
                    ul.removeClass('flex-column');
                    parentUl.removeClass('d-flex');
                }
            }
            if (mediaMd.matches) {
                if (!ul.hasClass('flex-column') && !parentUl.hasClass('d-flex')) {
                    ul.addClass('flex-column');
                    parentUl.addClass('d-flex');
                }
            }
        }
        questionFunc();
        $(window).resize(function() {
            questionFunc();
        });

        getCourse('https://lms.lazy2.codes/api/course');
        getBundling();

        $("img").bind("error", function() {
            $(this).attr("src", "/img/imagenotavailable.jpg");
        });

        $('#btn-search-course-training').click(function() {
            refreshCourse();
        })
        $('#search-course-training').on('keypress', function(e) {
            if (e.which == 13) {
                refreshCourse();
            }
        });
    })
</script>
<script src="/js/course.js"></script>
<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>