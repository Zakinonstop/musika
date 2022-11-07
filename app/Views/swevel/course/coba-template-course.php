<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card card-course border-0 cursor-pointer shadow" data-id="`+data.course_id+`">
                <div class="course-circle-time small text-capitalize"><small class="category-other category-course-`+data.course_id+`"></small></div>
                <div class="image-content">
                    <div class="card-image.">
                        <div class="course-img-polygon">
                            <img src="/img/Poster.png" alt="" class="card-img">
                        </div>
                    </div>
                </div>
                <div class="card-content ps-4 py-4">
                    <h5 class="card-title fw-bold lh-base">Judul Course</h5>                                        
                    <div class="small text-purple">Mahasiswa / Umum</div>
                    <div class="row">
                        <div class="col-sm-8 col-md-6 col-lg-12">
                            <p class="card-text h6 text-decoration-line-through text-secondary">Rp 500.000</p>
                            <p class="card-text h5 fw-bold text-red">Rp 200.000</p>
                        </div>
                        <!-- <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end text-lg-start">
                            <a href="/payment/`+data.course_id+`" class="btn btn-sm btn-purple-100 mt-2 me-md-4 me-sm-4">Join Now</a>
                        </div> -->
                    </div>
                </div>
                <div class="row beli-course w-100 m-0">
                    <div class="col-10 p-0 pe-3">
                        <a href="/auth" class="btn w-100">Beli Course</a>
                    </div>
                    <div class="col-2 p-0 align-self-center">
                        <a href="/auth" class="fa fa-sharp fa-solid fa-cart-plus py-2"></a>
                    </div>
                </div>
                <div class="d-flex">
                    <a href="/course/detail/` + data.course_id + `" class="text-decoration-none btn btn-sm btn-purple course-btn-read-more">Buy</a>
                    <a href="/course/detail/` + data.course_id + `" class="text-decoration-none btn btn-sm btn-light ms-3"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>