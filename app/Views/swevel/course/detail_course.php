<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/course/navbar-course'); ?>

<section id="detail-course">
    <input type="hidden" readonly id="id_course" value="<?= $id; ?>">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="text-white kotak-text title-course"></div>
            <img src="/img/skeleton2.gif" class="detail-img" alt="course">
        </div>
        <div class="h3 title-course text-center d-lg-none my-3 text-purple fw-bold"></div>
        <div class="col" style="margin: auto;">

        </div>
    </div>

    <div class="container">
        <div class="row mb-5 pb-5" id="section2.">
            <div class="text-start mb-lg-0 mb-md-5 mb-sm-5 border-kotak">
                <h5><s class="old_price">Rp </s></h5>
                <h4 class="text-red new_price">Rp </h4>
                <div class="row mb-3 col-lg-2">
                    <div class="col-10">
                        <div class="btn btn-purple w-100 btn-sm btn-buy-course">Buy Course</div>
                    </div>
                    <div class="col-2 p-0 align-self-center">
                        <div class="btn-chart-course"><i class="fa-solid fa-cart-shopping"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 mb-5 pb-5 text-center">
            <div class="h2 text-purple fw-bold mb-4 title-course"></div>
            <div class="d-flex justify-content-center">
                <div class="col-lg-8 description-course"></div>
            </div>
        </div>

        <div class="row mt-4 pt-4 mb-5 pb-5 justify-content-center" id="section3">
            <div class="col-lg-6 d-lg-block d-md-none d-sm-none">
                <img src="/img/skeleton2.gif" class="detail-img2" alt="course">
            </div>
            <div class="col-lg-6">
                <h4><strong>Penjelasan Course</strong></h4>
                <div class="description-course"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php for($i=1; $i<=5; $i++) : ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card border-0 shadow br-15 mb-5 p-2">
                        <div class="card-body">
                            <div class="step mb-2"> <i class="fa-solid fa-chart-simple text-purple me-2"></i> <span>Langkah <?= $i; ?> </span></div>
                            <div class="title-course h5 my-3">Memulai Pemrograman dengan kotlin</div>
                            <div class="row">
                                <div class="col-3 d-flex">
                                    <div class="me-4"><i class="fa-solid fa-clock text-success"></i></div>
                                    <div class="my-auto mt-2">50 Jam</div>
                                </div>
                                <div class="col-3 d-flex">
                                    <div class="me-3"><i class="fa-solid fa-star text-orange"></i></div>
                                    <div class="my-auto mt-2">4,8</div>
                                </div>
                                <div class="col-4 d-flex">
                                    <div class="me-3"><i class="fa-solid fa-chart-pie"></i></div>
                                    <div class="my-auto mt-2">Intermediate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 text-center col-line">
                    <div class="line-before"></div>
                    <div class="step-number"><?= $i; ?></div>
                    <div class="line-after"></div>
                </div>
                <div class="col-lg-5">
                    <div class="h5">Langkah <?= $i; ?></div>
                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, esse libero. Voluptatibus illum doloremque autem neque at! Dolores, dolorem soluta!</div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="container my-5 pb-3" id="course">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-purple h1 fw-bold position-absolute">Course</div>
            </div>            
        </div>
        <div class="mt-4"></div>
        <div id="card-list-course" class="row mt-5 pt-5"></div>
        <input type="hidden" name="" id="limit-course" value="3">
        <div class="d-flex justify-content-center mt-3">
            <a href="/course" class="btn btn-purple px-5 btn-more-course hide">Lihat semua</a>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        let id_course = $('#id_course').val();
        $.ajax({
            url: 'https://lms.lazy2.codes/api/course/detail/' + id_course,
            type: 'GET',
            dataType: 'json',         
            success: function(result) {
                $('.title-course').html(result.title);
                $('.key_takeaways').html(result.key_takeaways);
                $('.description-course').html(result.description);
                $(".old_price").html('Rp ' + formatRupiah(result.old_price));
                $(".new_price").html('Rp ' + formatRupiah(result.new_price));
                $('.detail-img').attr('src', result.thumbnail);
                // $('.detail-img').attr('src', '/img/loaderpurple2.gif');
                $('.detail-img2').attr('src', result.thumbnail);
            }
        })

        getCourse('https://lms.lazy2.codes/api/course');

        $("img").bind("error", function() {
            $(this).attr("src", "/img/loaderpurple2.gif");
        });


        $(".line-before, .line-after").css({'background':'#61AF11','width':'2px','margin':'0 auto'})
        // mengatur tinggi line
        // hitung dulu colom pertama
        let heightCol1 = $('.col-line')[0].scrollHeight;
        // hitung tinggi step number
        let heightStepNumber = $('.step-number')[0].scrollHeight;
        // mengatur line pertama
        $('.line-before').css('height', (heightCol1 / 2) - heightStepNumber);        
        $('.line-after').css('height', (heightCol1 / 2) + heightStepNumber);


        $(".timeline").find('.card').hover(function() {
            $(this).addClass("shadow");
        })
        $(".timeline").find('.card').mouseleave(function() {
            $(this).removeClass("shadow");
        })        
    })    
</script>

<script src="/js/course.js"></script>
<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>