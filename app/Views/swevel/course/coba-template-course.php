<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card card-course border-0 cursor-pointer shadow br-15" data-id="`+data.course_id+`">                
                <div class="image-content">
                    <div class="card-image.">
                        <div class="course-img-polygon">
                            <img src="/img/Poster.png" alt="" class="card-img">
                        </div>
                        <div class="text-center p-2 btn-purple-50-hover-0 w-50 position-absolute small br-end-10" style="z-index:5; margin-top: -35px;">Intermediate</div>
                    </div>
                </div>                
                <div class="card-content ps-4 py-4">
                    <h5 class="card-title fw-bold lh-base ">Judul Course</h5>                                        
                    <div class="small text-purple">Mahasiswa / Umum</div>
                    <div class="row">
                        <div class="col-sm-8 col-md-6 col-lg-12">
                            <p class="card-text h6 text-decoration-line-through text-secondary">Rp 500.000</p>
                            <p class="card-text h5 fw-bold text-red">Rp 200.000</p>
                        </div>                        
                    </div>
                </div>
                <div class="row m-0 mb-3">
                    <div class="col-10">
                        <a href="#" class="btn btn-purple w-100 btn-buy-course">Buy Course</a>
                    </div>
                    <div class="col-2 p-0 align-self-center">                        
                        <div class="btn-chart-course"><i class="fa-solid fa-cart-shopping"></i></div>                                                
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

<script>
    $(".btn-buy-course, .btn-chart-course").click(function(){
        alert()
    })
</script>

<?= $this->endSection(); ?>