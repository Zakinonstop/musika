<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/course/navbar-course'); ?>

<section id="detail-course">
    <input type="hidden" readonly id="id_course" value="<?= $id; ?>">
    <div class="container">
        <div class="h3 text-purple fw-bold mb-4 title-course pt-5"></div>
        <div class="row mb-3">
            <div class="col-lg-6 text-center">
                <img src="" class="detail-img br-15" alt="course">
                <div class="container mt-4 d-flex justify-content-center">
                    <a href="/course/materi/<?= $id; ?>" class="btn btn-purple btn-sm w-100 btn-lihat-kurikulum hide">Lihat kurikulum</a>
                </div>
            </div>
            <div class="col-lg-5 ms-4" style="position:relative;">
                <div class="h4 text-dark mb-3">Penjelasan Kursus</div>
                <div class="description-course text-muted"></div>

                <div class="mt-5 w-50 card-price hide" style="position:absolute; bottom:0;">                    
                    <h5><s class="old_price">Rp </s></h5>
                    <h4 class="text-orange new_price">Rp </h4>
                    <div class="row ">
                        <div class="col-10">
                            <div class="btn btn-purple w-100 btn-sm btn-buy-course">Beli Kursus</div>
                        </div>
                        <div class="col-2 p-0 align-self-center">
                            <div class="btn-chart-course"><i class="fa-solid fa-cart-shopping"></i></div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>     
    </div>

    
    <div class="container mt-5 pt-5 list-kurikulum"></div>

    <div class="container my-5 pb-3" id="course">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-purple h1 fw-bold position-absolute">Kursus lainnya</div>
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
    $(document).ajaxComplete(function(){
        $('.btn-lihat-kurikulum').removeClass('hide');
        
        setTimeout(() => {
            $(".line-before, .line-after").css({'background':'#61AF11','width':'2px','margin':'0 auto'})
            // mengatur tinggi line
            // hitung dulu colom pertama
            let heightCol1 = $('.col-line')[0].scrollHeight;
            // hitung tinggi step number
            let heightStepNumber = $('.step-number')[0].scrollHeight;
            // mengatur line pertama
            $('.line-before').css('height', (heightCol1 / 2) - heightStepNumber);        
            $('.line-after').css('height', (heightCol1 / 2) + heightStepNumber);
        }, 1000);
        
    })
    $(document).ready(function() {
        let id_course = $('#id_course').val();
        // get detail
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
            }
        })

        // List kurikulum
        $.ajax({
            url: "https://lms.lazy2.codes/api/course/detail/" + id_course,
            type: "GET",
            dataType: "JSON",
            success: function(result) {                             
                $('.title-course').html(result.title);
                $.each(result.video, function(i, data) {
                    $(".list-kurikulum").append(`
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card border-0 shadow br-15 mb-4 p-3">
                                    <div class="card-body">
                                        <div class="step mb-2"> <i class="fa-solid fa-chart-simple text-purple me-2"></i> <span>Langkah  `+data.order+`</span></div>
                                        <div class="title-course h5 my-3">`+data.title+`</div>
                                        <div class="row">
                                            <div class="col-4 d-flex">
                                                <div class="me-4"><i class="fa-solid fa-clock text-purple"></i></div>
                                                <div class="my-auto mt-2">50 Jam</div>
                                            </div>
                                            <div class="col-3 d-flex">
                                                <div class="me-3"><i class="fa-solid fa-star text-orange"></i></div>
                                                <div class="my-auto mt-2">4,8</div>
                                            </div>
                                            <div class="col-4 d-flex">
                                                <div class="me-3"><i class="fa-solid fa-chart-pie text-purple"></i></div>
                                                <div class="my-auto mt-2 category-course"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 text-center col-line">
                                <div class="line-before"></div>
                                <div class="step-number fw-bold">`+data.order+`</div>
                                <div class="line-after"></div>
                            </div>
                            <div class="col-lg-5">
                                <div class="h5">Langkah `+data.order+`</div>
                                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, esse libero. Voluptatibus illum doloremque autem neque at! Dolores, dolorem soluta!</div>
                            </div>
                        </div>
                    `);
                });                          

                if(result.category){                    
                    $('.category-course').html(result.category.name);                    
                }else{
                    $('.category-course').html('-');                    
                }
            }    


        });    


        getCourse('https://lms.lazy2.codes/api/course');

        $("img").bind("error", function() {
            $(this).attr("src", "/img/poster.png");
        });
        
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