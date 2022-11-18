<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/course/navbar-course'); ?>

<style>
    .search-event .input-group {
        width: 30em;
        margin-right: 0;
    }
    
    .card-body { padding: 5px var(--bs-card-spacer-x); }
</style>

<section id="course-top">
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-12">
                    <h1 class="fw-bold" style="letter-spacing: 0;">Temukan <span class="ch_color">Jalan Pintas</span> Profesi Anda!</h1>
                    <p class="cover-text my-4" style="line-height: 1.8;font-size: 17px;">Mentor professional kami akan menunjukkan berbagai teknik yang akan mempermudah dan mempercepat pekerjaan Anda di perusahaan</p>
                </div>
            </div>
        </div>
    </div>
</section>
<<<<<<< HEAD

<section id="course">
    <div class="container my-5">
        <div id="popular-course">
            <div class="row my-5">
                <div class="col-lg-7">
                    <h1 class="fw-bold text-purple" style="letter-spacing: 0;">Pelatihan</h1>
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
                            <input type="text" class="form-control" name="search" data-kategori="course" id="search-course-training" placeholder="Ketik pelatihan yang ingin Anda ikuti">
                            <button class="btn btn-green text-white px-4" id="btn-search-course-training">Cari</button>
=======
<section id="training">
    <div class="training-list mx-lg-5 px-4 mt-5 pt-5">
        <h2 class="fw-bold mb-5 text-center text-purple">Daftar Pelatihan</h2>
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <div class="card mb-3 border-0 shadow mb-5 py-4 br-15 cursor-pointer card-training">
                <div class="row g-0">
                    <div class="col-md-3 text-sm-center">
                        <img src="/img/pos.jpg" class="img-fluid rounded-start" alt="..." style="max-width: 200px;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-purple-100 fw-bold">Autodesk Certified Professional: Revit for Architectural Design Exam Prep (part <?= $i; ?>)</h5>
                            <p class="card-text">Buktikan kepada calon pemberi kerja bahwa Anda siap dengan tugas tersebut dengan menjadi Autodesk Certified Professional</p>
                            <div class="row">
                                <div class="col-sm-8 col-md-6 col-lg-12">
                                    <p class="card-text h6 text-decoration-line-through text-secondary">Rp 500.000</p>
                                    <p class="card-text h5 fw-bold text-orange">Rp 325.000</p>
                                </div>
                                <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end  text-lg-start">
                                    <a href="/detail-training" class="btn btn-sm btn-purple-100 mt-2">Lihat detail</a>
                                </div>
                            </div>
>>>>>>> 7a9fde547cd401387d3751c1752701cf7b28f184
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
</section>

<script>
    function refreshCourse() {
        let inputSearch = $('#search-course-training').val();
        
        if (inputSearch === '') {
            getCourse('https://stufast.id/api/course/author/filter/training/title/2?title=');
        } else {
            getCourse('https://stufast.id/api/course/author/filter/training/title/2?title=' + inputSearch);
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
                        /*$('#card-list-course').append(`
                            <div class="col-md-6 col-lg-6 col-sm-12 col-course mb-5">
                                <div class="d-flex card card-training border-0 shadow br-15">
                                    <div class="col-12">
                                        <div class="p-3">
                                            <div class="d-flex justify-content-beetween">
                                                <div class="image-content card-thumbnail-course cursor-pointer" data-id="` + data.course_id + `">
                                                    <img src="https://musika.id/img/portofolio/perpustakaan%20(4).jpg" class="img-fluid rounded-start" alt="" style="max-width: 200px;">
                                                </div>
                                                <div class="description" style="padding-left: 10px">
                                                    <div class="card-body card-content-course">
                                                        <h5 class="card-title text-purple fw-bold lh-base cursor-pointer" data-id="` + data.course_id + `">` + data.title + `</h5>
                                                        <p class="card-text hide">` + data.description + `</p>
                                                        <div class="row">
                                                            <div class="col-sm-8 col-md-6 col-lg-12">
                                                                <p class="card-text h6 text-decoration-line-through text-secondary">Rp ` + formatRupiah(data.old_price) + `</p>
                                                                <p class="card-text h5 fw-bold text-orange">Rp ` + formatRupiah(data.new_price) + `</p>
                                                            </div>
                                                            <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end text-lg-start">
                                                                <a href="/training/detail/` + data.course_id + `" class="btn btn-green text-white px-4 mt-4">Lihat Detail</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                            </div>
                        `);*/
                        
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
                                            <div class="col-md-12">
                                                <div class="btn btn-green text-white cursor-pointer w-100 btn-buy-course">Ikuti Pelatihan</div>
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
                    window.location.href = '/training/detail/' + id;
                })
                
                $('.btn-buy-course').click(function() {
                    window.location.href = '/login';
                })
            },
            error: function(result, ajaxOptions, thrownError) {
                $('.skeleton').addClass('hide');
                $('#card-list-course').html('');
                
                $('#card-list-course').append(`
                    <div class="d-flex justify-content-center">   
                        <div class="alert alert-warning w-50 text-center br-20" role="alert">
                            Maaf, pelatihan tidak tersedia untuk saat ini.<br>
                            Silakan ulangi beberapa saat lagi.
                        </div>
                    </div> 
                `);
            }
        })
    }
 
    $(document).ready(function() {
        getCourse('https://stufast.id/api/course/filter/training/2');
        
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
        });*/
    })
    
    $('.btn-category-course').click(function(){
        let getCateg = $(this).data('categ');
        
        $('.btn-category-course').removeClass('btn-green text-white').addClass('btn-light');
        $(this).removeClass('btn-light').addClass('btn-green text-white');
        $('#input-categ').val(getCateg);
        
        getCourse('https://stufast.id/api/course/author/filter/training/category/2?cat='+getCateg);
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