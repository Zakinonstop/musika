<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/course/navbar-course'); ?>

<style>
    .detail-img { max-width: 100%; }
    
    .tag-course {
        margin-right: 1px;
        background: #ddf6c3;
        border: none;
    }
    
    .tag-course:hover { background: #b9df92; }
</style>

<section id="detail-course">
    <input type="hidden" readonly id="id_course" value="<?= $rincian->course_id ?>">
    
    <div class="container">
        <div class="h2 text-purple fw-bold mb-4 title-course pt-5"><?= $rincian->title ?></div>
        <div class="row mb-3">
            <div class="col-lg-6 text-center">
                <img src="https://musika.id/img/portofolio/perpustakaan%20(4).jpg" class="detail-img br-15">
            </div>
            <div class="col-lg-5 ms-4 penjelasan-course" style="position: relative;">
                <div class="h4 mb-3">Deskripsi Pelatihan</div>
                <!--<div class="description-course text-muted"><?= $rincian->description ?></div>-->
                <div class="mt-3">
                    <span class="btn btn-light px-3 rounded-pill tag-course">Intermediate</span>
                </div>
                <div class="mt-5 w-50 card-price">
                    <h5><s class="old_price text-secondary">Rp <?= number_format($rincian->old_price, 0, ",", ".") ?></s></h5>
                    <h4 class="new_price text-orange">Rp <?= number_format($rincian->new_price, 0, ",", ".") ?></h4>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="btn btn-red text-white py-2 w-75 rounded-pill btn-buy-course">Ikuti Sekarang</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="course" class="container mt-6 mb-6">
        <div class="row mb-4">
            <h2 class="text-purple fw-bold" style="letter-spacing: 0;">Pelatihan Lainnya</h2>
        </div>
        <div id="card-list-course" class="row" data-aos="zoom-out">
            <?php foreach ($pelatihan as $x) : ?>
                <div class="col-md-6 col-lg-4 col-sm-12 col-course mb-5">
                    <div class="card card-course border-0 shadow br-15">                
                        <div class="image-content card-thumbnail-course cursor-pointer" data-id="<?= $x->course_id ?>">
                            <img src="https://musika.id/img/portofolio/perpustakaan%20(4).jpg" alt="<?= $x->title ?>" style="width: 100%;">
                        </div>                
                        <div class="card-content card-content-course px-4 py-4">
                            <h5 class="card-title fw-bold lh-base cursor-pointer" data-id="<?= $x->course_id ?>"><?= $x->title ?></h5>                                                                            
                            <div class="row">
                                <div class="col-sm-8 col-md-6 col-lg-12">
                                    <p class="card-text h6 text-decoration-line-through text-secondary">Rp <?= number_format($x->old_price, 0, ",", ".") ?></p>
                                    <p class="card-text h5 fw-bold text-orange">Rp <?= number_format($x->new_price, 0, ",", ".") ?></p>
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
            <?php endforeach; ?>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/training" class="btn btn-orange text-white px-5 btn-more-course">Lihat Semua</a>
        </div>
    </div>
</section>

<script>
    $('.card-thumbnail-course, .card-content-course .card-title').click(function() {
        let id = $(this).data('id');
        window.location.href = '/training/detail/' + id;
    })
    
    $('.btn-buy-course').click(function() {
        window.location.href = '/login';
    })
</script>

<?= $this->include('swevel/course/footer-course'); ?>
<?= $this->endSection(); ?>