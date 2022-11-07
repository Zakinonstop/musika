<?= $this->extend("layout/template"); 
$this->section('content'); ?>
<?= $this->include('swevel/navbar'); ?>
<?php
function circle(){makeCircle();}
function circle1(){makeCircle();}
?>
<style>
    #about-us .page-1{        
        padding-bottom:  20px;
        min-height : calc(100vh - 70px);
        background: rgb(216, 185, 255);
        background: linear-gradient(340deg, rgba(159, 136, 195, 1) -20%, rgba(255, 255, 255, 1) 62%);        
    }
    #about-us .page-2{
        margin-top:  -5px;      
        padding-bottom: 10px;  
        background: rgb(216, 185, 255);
        background: linear-gradient(590deg, rgba(159, 136, 195, 1) -20%, rgba(255, 255, 255, 1) 70%);        
    } 
    .card-profile{
        border-radius: 15px;
        min-height: 120px;
        padding: 10px 20px;        
        font-size: 18px;        
    }    
    .semi-circle{
        display:flex;
    }
    .semi-circle .img{
        clip-path: circle(49.9% at 0 50%);        
        width: 350px;
        position: relative;
        z-index:5
    }    
    .semi-circle .bg{
        position:absolute;
        width:380px;
        margin-top: -50px;
        margin-left:-70px;
    }   
    .btn-more-milestone{
        padding:15px;
        border-radius:25px;
    }

    @media only screen and (max-width: 992px){
        .semi-circle{
            display:none;
        }
        #about-us .page-1{
            min-height : calc(50vh - 70px);
        }
        .image-customer-review{
            display: none;
        }
    }
</style>

<div id="about-us">
    <div class="page-1 pt-5">
        <div class="container">
            <div class="col-lg-8 col-md-12 col-12 mb-5">
                <div class="text pt-5">
                    <h1 class="fw-bold">One of <span class="ch_color">Information Technology</span> Service Industry</h1>
                    <p class="cover-text my-5">PT. Swevel Universal Media is one of Information Technology Service Industry that gives service excellence quality. Point of product of PT. Swevel Universal Media prioritize System End User and gives creative solution IT. PT. Swevel
                        Universal Media focus in WEB Developer and Mobile Smart Phone Application.</p>
                </div>                
            </div>
            <div class="col-lg-4">
                <div class="image-homepage">
                    <img src="/img/Gambar.png" class="mt-5" alt="...">
                </div>                
                <div class="circle-3"><?= circle(); ?></div>
            </div>
        </div>
    </div>
    <div id="aboutUs" class="page-2 py-5">
        <div class="container mt-5 pt-lg-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="semi-circle justify-content-center">
                    <img src="/img/image 9.png" alt="" class="img">                    
                    <img src="/img/Group 2317.png" alt="" class="bg">                                        
                </div>                
            </div>
            <div class="col-lg-6">                
                       <div class="card card-profile mb-4 border-0 shadow cursor-pointer">
                        <div class="card-body">
                            <div class="row btn-card-profile">
                                <div class="col-lg-9">Lorem ipsum dolor, sit amet.</div>
                                <div class="text-muted mt-2">PT. Swevel Universal Media</div>
                            </div>
                            <div class="deskripsi-profile mt-5">
                                <div>
                                    Lorem ipsum dolor sit amet consectetur adipisicing, elit. Inventore delectus cumque repudiandae, possimus, nobis iste sed doloremque eum cupiditate placeat!
                                    Lorem ipsum dolor sit amet consectetur adipisicing, elit. Inventore delectus cumque repudiandae, possimus, nobis iste sed doloremque eum cupiditate placeat!
                                </div>
                            </div>
                        </div>                        
                    </div>
            </div>
        </div>
    </div>
    </div>    
</div>

<section id="service" class="pb-5">
    <div class="container pt-5">
        <div class="text-center mb-5 pb-5 ">
            <h1 class="fw-bold">Our <span class="text-purple">Servive</span></h1>
            <div class="">
                <span class="d-block">Swevel Universal Media focus in Software Development</span>
                <span class="d-block">and Learning Management</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center d-flex justify-content-center">
                <a href="/course" class="text-decoration-none text-dark">
                    <div class="card card-service shadow mb-md-4 mb-sm-4 mx-3">
                        <div class="card-body">
                            <h3 class="card-title">Software Development</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <img src="https://img.business.com/w/700/aHR0cHM6Ly9pbWFnZXMuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2FwcC91cGxvYWRzLzIwMjIvMDQvMDQwNzQ1NTMvMTU1NDI0NDAxMC5qcGVn" class="card-img-bottom" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-lg-start justify-content-md-center justify-content-sm-center d-flex justify-content-center">
                <a href="/course" class="text-decoration-none text-dark">
                    <div class="card card-service shadow mb-md-4 mb-sm-4 mx-3">
                        <img src="https://img.business.com/w/700/aHR0cHM6Ly9pbWFnZXMuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2FwcC91cGxvYWRzLzIwMjIvMDQvMDQwNzQ1NTMvMTU1NDI0NDAxMC5qcGVn" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Learning Management</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>    
    <!-- <div class="circle-1 d-sm-none d-md-none d-lg-block"><?= circle1(); ?></div>
    <div class="circle-2 d-sm-none d-md-none d-lg-block"><?= circle1(); ?></div> -->
</section>


<div class="container">
    <div class="text-center h1 mb-5 text-purple">Course</div>
    <div id="card-popular-course" class="row"></div>
    <input type="hidden" name="" id="limit-course" value="3">

<div class="d-flex justify-content-center mt-3">
    <a href="/course" class="btn btn-purple px-3">Lihat semua</a>
</div>

</div>

<section id="portofolio" class="">
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-lg-6 d-sm-none d-lg-block d-md-none">
                <img src="/img/GroupImg.png" alt="" class="decoration" style="z-index: 5;">
            </div>
            <div class="col-lg-6 text-lg-end text-md-center text-sm-center">
                <h2 class="text-purple fw-bold">Portofolio</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem reiciendis dolorum doloremque eius facilis voluptatum corporis.</p>
            </div>
        </div>
        <div class="image-portofolio text-center">
            <div class="mt-lg-3 mb-3">
                <div class="">
                    <?php for ($i=1; $i<=8; $i++) : ?>                        
                        <img src="https://imgsrv2.voi.id/53SPlz77W6svUtBMlJXhxw1VIVgnye05zJ7rm2UKiTg/auto/1280/853/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy80NjA5MS8yMDIxMDQyMTE3MjUtbWFpbi5jcm9wcGVkXzE2MTkwMDA3NjIuanBlZw.jpg" class="mx-2 mb-4">                        
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="/css/splide.min.css">
<section id="client">
    <div class="container pt-5">
        <div class="text-center mb-5 mt-4">
            <h2 class="text-purple-100">Our <span class="fw-bold">Client</span></h2>
            <p>Colaboration with various top companies</p>
        </div>
        <div class="pb-5">
            <div class="splide splide-client">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php for ($i = 0; $i < 10; $i++) : ?>
                            <div class="splide__slide">
                                <div class="card card-client mx-1 border-0 bg-transparent">
                                    <div class="card-body text-center pb-5">
                                        <div class="pb-3">
                                            <img src="http://new2.beecons.co.id/wp-content/uploads/2020/04/Logo-BEE.png" alt="" class="img-primary" style="max-width: 130px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="/js/splide.min.js"></script>

<script>
    $(document).ready(function() {        
        sliderClient();
    })

    let sliderClient = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 768px)");
        let mediaLg = window.matchMedia("(max-width: 100px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
            var perPage = 2;
        } else if (mediaLg.matches) {
            var perPage = 4;
        } else {
            var perPage = 4;
        }
        var splide = new Splide('.splide.splide-client', {
            // type: 'loop',
            perPage: perPage,
            rewind: true,
            arrows: false,
            // autoplay: true,
            // speed: 2000,
            // width: '100%',
            // padding: '10px',
        });
        splide.mount();
    }
</script>
<main id="contact">
    <section id="customer-review" class="pt-5 pb-5">
        <div class="container mt-3">
            <h1><strong><span class="text-dark-purple">Customer </span><span>Review</span></strong></h1>
        </div>
        <div class="bg1 mt-5">
            <div class="container bg-transparent p-3">
                <div class="row flex-row-reverse">
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center my-auto image-customer-review">
                        <img src="asset/image/contactUs/img.png" alt="" width="150px">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro esse commodi.
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatibus harum iusto ipsa, temporibus, recusandae sequi accusamus porro hic quibusdam sapiente rerum asperiores impedit saepe debitis ut? Voluptatibus, sapiente quae.</p>
                            <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg2 mt-5">
            <div class="container bg-transparent p-3">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center my-auto image-customer-review">
                        <img src="asset/image/contactUs/img.png" alt="" width="150px">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro esse commodi.
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatibus harum iusto ipsa, temporibus, recusandae sequi accusamus porro hic quibusdam sapiente rerum asperiores impedit saepe debitis ut? Voluptatibus, sapiente quae.</p>
                            <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg1 mt-5">
            <div class="container bg-transparent p-3">
                <div class="row flex-row-reverse">
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center my-auto image-customer-review">
                        <img src="asset/image/contactUs/img.png" alt="" width="150px">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <p class="fs-4">
                            <span class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro esse commodi.
                            </span class="fw-bold">
                        </p>
                        <div class="p">
                            <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatibus harum iusto ipsa, temporibus, recusandae sequi accusamus porro hic quibusdam sapiente rerum asperiores impedit saepe debitis ut? Voluptatibus, sapiente quae.</p>
                            <p class="fs-7">created by <span class="fw-semibold ls-05">natasyafw</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="contactUs" class="pb-5" style="background-color: #FAF6FF">
        <div class="container">
            <div class="row">
                <h1 class="mt-5 fw-bold text-center">Contact <strong>Us</strong></h1>
                <p class="text-center">Any question or Remarks? Just Write Us a Message</p>
            </div>
            <div class="card mt-5 border-0 shadow">
                <div class="card-body p-0">
                    <div class="container">
                        <div class="row">

                            <div class="col1 col-sm-12 col-md-12 col-lg-4 bg-purple">
                                <div class="row justify-content-center text-white">
                                    <div class="col-12 text-center">
                                        <h3 class="fw-bold">Contact Information</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id rerum saepe.</p>
                                    </div>

                                    <div class="col col-11">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-phone fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <?php foreach ($kontak as $x) : ?>
                                                    <?php if ($x['name'] == 'phone') : ?>
                                                        <span><?= $x['description']; ?></span>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-11">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-regular fa-envelope fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <?php foreach ($kontak as $x) : ?>
                                                    <?php if ($x['name'] == 'envelope') : ?>
                                                        <span><?= $x['description']; ?></span>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-11 pb-5">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa-solid fa-location-dot fs-5"></i>
                                            </div>
                                            <div class="col-10">
                                                <span>Jl. H.R. Rasuna Said, Kav 3, South Jakarta, 12950 - Indonesia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col2 col-sm-12 col-md-12 col-lg-8">
                                <form class="row g-3 justify-content-between p-5">
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">first name</label>
                                        <input type="text" class="form-control" placeholder="write your first name">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">last name</label>
                                        <input type="text" class="form-control" placeholder="write your last name">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">mail</label>
                                        <input type="email" class="form-control" placeholder="write your mail">
                                    </div>
                                    <div class="col-sm-12 col-md-5">
                                        <label class="form-input-label">phone</label>
                                        <input type="text" class="form-control" placeholder="08123456789">
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <label class="form-input-label">message</label>
                                        <textarea class="form-control" placeholder="write your message" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="mt-3 fs-7 fw-bold">what topic you need to ask ?</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="softwareDevelopment">
                                            <label class="form-check-label" for="inlineRadio1">software development</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="learningManagement">
                                            <label class="form-check-label" for="inlineRadio2">learning management</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" checked name="inlineRadioOptions" id="inlineRadio3" value="other">
                                            <label class="form-check-label" for="inlineRadio3">other</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end mt-5 sendMsg">
                                        <button id="btnSend" type="submit" class="btn btn-dark-purple btn-sm text-white fw-bolder rounded-pill ps-4 pe-4">SEND</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<script>
    $(document).ready(function() {
        $('body').css('overflow-x','hidden');
        getCourse('https://lms.lazy2.codes/api/course','');

    })    
</script>
<script src="/js/course.js"></script>

<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->endSection(); ?>
