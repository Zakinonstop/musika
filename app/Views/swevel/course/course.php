<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<?= $this->include('swevel/training/page_first'); ?>
<?= $this->include('swevel/course/menu_course_training_event'); ?>

<section id="course" class="pb-5 mb-5">
    <div class="container mt-5">      
        <section id="popular-course"> 
            <div class="h1 mt-5 pt-4 mt-3 fw-bold"><span class="text-purple-100">Course</span></div>
            <div class="list-category-course pb-5">
                <span class="fw-bold">Category : </span>      
                <button class="btn btn-light btn-sm mx-2 btn-category-course">All</button>                                         
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
        <div class="h1 mt-5 pt-4 pb-3 fw-bold">Paket <span class="text-purple-100">Bundling</span></div>
        <div class="h3 text-muted col-lg-5 mb-5 ">Ambil paket bundling untuk raih lebih banyak</div>
        <section id="bundling-course">
            <div class="d-flex justify-content-center"><img src="/img/loaderpurple1.gif" alt="" class="skeleton-bundling"></div>
            <div class="row bundling-course card-group"></div>
        </section>
    </div>
</section>

<script>
    $(document).ready(function() {

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