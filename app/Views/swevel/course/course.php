<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/navbar_course'); ?>
<?= $this->include('swevel/training/page_first'); ?>
<section id="course" class="pb-5 mb-5">
    <div class="container mt-5">      
        <section id="popular-course"> 
            <div class="row my-5 pb-3">
                <div class="col-lg-7">
                    <div class="h1 fw-bold"><span class="text-purple-100">Course</span></div>
                    <div class="list-category-course">
                        <span class="fw-bold">Category : </span>      
                        <button class="btn btn-light btn-sm mx-2 btn-category-course">All</button>                                         
                    </div>
                </div>
                <div class="col-lg-5 col-search-course">                    
                    <div class="search-event">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" data-kategori="course" id="search-course-training" placeholder="Search">
                            <button class="btn btn-purple" type="button" id="btn-search-course-training">search</button>
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