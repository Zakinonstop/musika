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
                <div class="h4 mb-3">Deskripsi Kursus</div>
                <div class="description-course text-muted"><?= $rincian->description ?></div>
                <div class="mt-3">
                    <?php if (isset($rincian->tag)) { foreach ($rincian->tag as $x) : ?>
                        <span class="btn btn-light px-3 rounded-pill tag-course"><?= $x->name ?></span>
                    <?php endforeach; } else { ?>
                        <span class="btn btn-light px-3 rounded-pill tag-course">Architecture</span>
                        <span class="btn btn-light px-3 rounded-pill tag-course">Structure</span>
                        <span class="btn btn-light px-3 rounded-pill tag-course">MEP</span>
                    <?php } ?>
                </div>
                <div class="mt-5 w-50 card-price">
                    <h5><s class="old_price text-secondary">Rp <?= number_format($rincian->old_price, 0, ",", ".") ?></s></h5>
                    <h4 class="new_price text-orange">Rp <?= number_format($rincian->new_price, 0, ",", ".") ?></h4>
                    <div class="row mt-3">
                        <div class="col-9">
                            <div class="btn btn-red text-white py-2 w-100 rounded-pill btn-buy-course">Beli Sekarang</div>
                        </div>
                        <div class="col-3 p-0 align-self-center">
                            <div class="btn-chart-course" style="margin-top: -5px;"><i class="fa-solid fa-cart-shopping"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 pt-3 list-kurikulum">
        <?php if (isset($rincian->video)) { foreach ($rincian->video as $x) : ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card border-0 shadow br-15 mb-4 p-3">
                        <div class="card-body">
                            <div class="step mb-2"> <i class="fa-solid fa-chart-simple text-purple me-2"></i> <span>Topik  <?= $x->order ?></span></div>
                            <div class="title-course h5 my-3"><?= $x->title ?></div>
                            <div class="row">
                                <div class="col-4 d-flex">
                                    <div class="me-4"><i class="fa-solid fa-clock text-purple"></i></div>
                                    <div class="my-auto mt-2"><?= rand(5,15). ' Menit' ?></div>
                                </div>
                                <div class="col-3 d-flex">
                                    <div class="me-3"><i class="fa-solid fa-star text-orange"></i></div>
                                    <div class="my-auto mt-2"><?= rand(40,50)/10 ?></div>
                                </div>
                                <div class="col-4 d-flex">
                                    <div class="me-3"><i class="fa-solid fa-chart-pie text-purple"></i></div>
                                    <div class="my-auto mt-2 category-course"><?= $rincian->category->name ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center col-line">
                    <div class="line-before"></div>
                    <div class="step-number fw-bold"><?= $x->order ?></div>
                    <div class="line-after"></div>
                </div>
                <div class="col-lg-5 col-penjelasan-langkah">
                    <div class="h5">Topik <?= $x->order ?></div>
                    <div>Pada topik ini Anda akan mempelajari materi tentang <?= $x->title ?></div>
                </div>
            </div>
        <?php endforeach; } ?>
        
        <div class="d-flex justify-content-center mt-4">
            <a href="/edu/materi/<?= $rincian->course_id ?>" class="btn btn-orange text-white px-5">Lihat Materi</a>
        </div>
    </div>

    <div id="course" class="container mb-6">
        <div class="row mb-4">
            <h2 class="text-purple fw-bold" style="letter-spacing: 0;">Kursus Lainnya</h2>
        </div>
        <div id="card-list-course" class="row" data-aos="zoom-out">
            <?php foreach ($kursus as $x) : ?>
                <div class="col-md-6 col-lg-4 col-sm-12 col-course mb-5">
                    <div class="card card-course border-0 shadow br-15">                
                        <div class="image-content card-thumbnail-course cursor-pointer" data-id="<?= $x->course_id ?>">
                            <div class="text-center p-2 btn-light-50-hover-0 position-absolute small br-end-10 mt-3"><?= $x->category ?></div> 
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
            <?php endforeach; ?>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/edu" class="btn btn-orange text-white px-5 btn-more-course">Lihat Semua</a>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        setTimeout(() => {
            $(".line-before, .line-after").css({
                'background': '#61AF11',
                'width': '2px',
                'margin': '0 auto'
            })
            // mengatur tinggi line
            // hitung dulu colom pertama
            let heightCol1 = $('.col-line')[0].scrollHeight;
            // hitung tinggi step number
            let heightStepNumber = $('.step-number')[0].scrollHeight;
            // mengatur line pertama
            $('.line-before').css('height', (heightCol1 / 2) - heightStepNumber);
            $('.line-after').css('height', (heightCol1 / 2) + heightStepNumber);
            // $('.list-kurikulum .line-after:last-child').css('height', (heightCol1 / 2) - heightStepNumber);
        }, 800);
    })
    
    $('.card-thumbnail-course, .card-content-course .card-title').click(function() {
        let id = $(this).data('id');
        window.location.href = '/edu/detail/' + id;
    })
    
    $('.btn-buy-course, .btn-chart-course').click(function() {
        window.location.href = '/login';
    })
</script>

<?= $this->include('swevel/course/footer-course'); ?>
<?= $this->endSection(); ?>