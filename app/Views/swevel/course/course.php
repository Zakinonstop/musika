<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/course/navbar-course'); ?>

<style>
    .search-event .input-group {
        width: 30em;
        margin-right: 0;
    }
</style>

<section id="course-top">
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-12">
                    <h1 class="fw-bold" style="letter-spacing: 0;">Tingkatkan <span class="ch_color">Level Keahlian</span> Anda!</h1>
                    <p class="cover-text my-4" style="line-height: 1.8;font-size: 17px;">Kami menyediakan berbagai topik kursus di bidang engineering seperti implementasi BIM dan estimasi biaya proyek konstruksi sesuai kebutuhan dan kemampuan Anda</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="course">
    <div class="container my-5">
        <div id="popular-course">
            <div class="row my-5">
                <div class="col-lg-7">
                    <h1 class="fw-bold text-purple" style="letter-spacing: 0;">Kursus</h1>
                    <input type="hidden" id="limit-course" value="0">
                    <div class="list-category-course">
                        <span style="margin-right: 4px;">Kategori: </span>
                        <input type="hidden" id="input-categ" value="">
                        <button class="btn btn-green text-white btn-sm mx-1 px-3 rounded-pill btn-category-course" data-categ="">Semua</button>
                        <button class="btn btn-light btn-sm mx-1 px-3 rounded-pill btn-category-course" data-categ="basic">Basic</button>
                        <button class="btn btn-light btn-sm mx-1 px-3 rounded-pill btn-category-course" data-categ="intermediate">Intermediate</button>
                        <button class="btn btn-light btn-sm mx-1 px-3 rounded-pill btn-category-course" data-categ="advanced">Advanced</button>
                    </div>
                </div>
                <div class="col-lg-5 col-search-course">
                    <div class="search-event">
                        <div class="input-group mt-5">
                            <input type="text" class="form-control" name="search" data-kategori="course" id="search-course-training" placeholder="Ketik kursus yang ingin Anda ikuti">
                            <button class="btn btn-green text-white px-4" id="btn-search-course-training">Cari</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <img src="/img/loaderpurple1.gif" class="skeleton mb-5" style="width: 60px;">
            </div>
            <div id="card-list-course" class="row" data-aos="zoom-out"></div>
        </div>
    </div>
    
    <!-- <div class="container mt-5">
        <main id="faq">
            <section id="faqTop">
                <div class="container">
                    <div class="row justify-content-between flex-row-reverse mt-5">

                        <div class="col-sm-12 col-md-4 img">
                            <img src="/img/File Musika/FAQ.png" width="100%" alt="">
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
    </div> -->
</section>

<script>
    function refreshCourse() {
        let inputSearch = $('#search-course-training').val();
        
        if (inputSearch === '') {
            getCourse('https://stufast.id/api/course/author/filter/title/2?title=');
        } else {
            getCourse('https://stufast.id/api/course/author/filter/title/2?title=' + inputSearch);
        }
    }
    
    function getCourse(url) {
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                $('.skeleton').removeClass('hide');
                $('#card-list-course').html('');
                
                let countData = result.length;
                if (countData > 0) {
                    $.each(result, function(i, data) {                    
                        $('#card-list-course').append(`
                            <div class="col-md-6 col-lg-4 col-sm-12 col-course mb-5">
                                <div class="card card-course border-0 shadow br-15">                
                                    <div class="image-content card-thumbnail-course cursor-pointer" data-id="` + data.course_id + `">
                                        <div class="text-center p-2 btn-light-50-hover-0 position-absolute small br-end-10 mt-3">` + data.category[0].name + `</div> 
                                        <img src="https://musika.id/img/portofolio/perpustakaan%20(4).jpg" alt="` + data.title + `" style="width: 100%;">
                                    </div>                
                                    <div class="card-content card-content-course px-4 py-4">
                                        <h5 class="card-title fw-bold lh-base cursor-pointer" data-id="` + data.course_id + `">` + data.title + `</h5>                                                                            
                                        <div class="row">
                                            <div class="col-sm-8 col-md-6 col-lg-12">
                                                <p class="card-text h6 text-decoration-line-through text-secondary">Rp ` + formatRupiah(data.old_price) + `</p>
                                                <p class="card-text h5 fw-bold text-orange">Rp ` + formatRupiah(data.new_price) + `</p>
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
                        `);
                    });
                } else {
                    $('#card-list-course').append(`
                        <div class="d-flex justify-content-center">   
                            <div class="alert alert-warning w-50 text-center br-20" role="alert">
                                Maaf, kata kunci yang Anda cari tidak ditemukan.<br>
                                Silakan coba menggunakan kata kunci lain.
                            </div>
                        </div> 
                    `);
                }
                
                $('.skeleton').addClass('hide');
                
                $('.card-thumbnail-course, .card-content-course .card-title').click(function() {
                    let id = $(this).data('id');
                    window.location.href = '/edu/detail/' + id;
                })
                
                $('.btn-buy-course, .btn-chart-course').click(function() {
                    window.location.href = '/login';
                })
            },
            error: function(result, ajaxOptions, thrownError) {
                $('.skeleton').addClass('hide');
                $('#card-list-course').html('');
                
                $('#card-list-course').append(`
                    <div class="d-flex justify-content-center">   
                        <div class="alert alert-warning w-50 text-center br-20" role="alert">
                            Maaf, kursus tidak tersedia untuk saat ini.<br>
                            Silakan ulangi beberapa saat lagi.
                        </div>
                    </div> 
                `);
            }
        })
    }

    $(document).ready(function() {
        getCourse('https://stufast.id/api/course/author/2');
        
        /*searchHover = function() {
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
        })

        getBundling();*/
    })
    
    $('.btn-category-course').click(function(){
        let getCateg = $(this).data('categ');
        
        $('.btn-category-course').removeClass('btn-green text-white').addClass('btn-light');
        $(this).removeClass('btn-light').addClass('btn-green text-white');
        $('#input-categ').val(getCateg);
        
        getCourse('https://stufast.id/api/course/author/filter/category/2?cat='+getCateg);
    })
    
    $('#btn-search-course-training').click(function() {
        refreshCourse();
    })
    
    $('#search-course-training').on('keypress', function(e) {
        if (e.which == 13) refreshCourse();
    })
</script>

<?= $this->include('swevel/course/footer-course'); ?>
<?= $this->endSection(); ?>