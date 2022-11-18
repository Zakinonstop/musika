<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/course/navbar-course'); ?>

<section id="course-top">
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="fw-bold text-white h1">Carilah Daftar Pelatihan dan Tingkatkan Hardskil dan Softskill kamu.</div>
                    <p class="h3">
                        Kami menyediakan berbagai macam pelatihan yang dapat kamu ikuti sesuai dengan kebutuhanmu dan kemampuanmu. Yuk, cari pelatihan yang kamu inginkan!
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
                <div class="col-lg-12 text-center">
                    <div class="h1 fw-bold "><span class="text-purple-100">Daftar Training</span></div>
                    <input type="hidden" name="" id="limit-course" value="0">
                    <!-- <div class="list-category-course">
                        <span class="fw-bold">Kategori : </span>
                        <input type="hidden" id="input-categ" value="semua" readonly>
                        <button class="btn btn-purple btn-sm mx-2 btn-category-course" data-categ="semua">Semua</button>
                    </div> -->
                </div>
                <!-- <div class="col-lg-5 col-search-course">
                    <div class="search-event">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" data-kategori="course" id="search-course-training" placeholder="Cari kursus">
                            <button class="btn btn-purple" type="button" id="btn-search-course-training">Cari</button>
                        </div>
                    </div>
                </div> -->
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

        getCourse('https://lms.lazy2.codes/public/api/course/filter/training/2');
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

<script src="/js/training.js"></script>
<?= $this->include('swevel/course/footer-course'); ?>
<?= $this->endSection(); ?>