<section id="course-top">
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-12">
                    <h2 class="fw-bold text-white">Carilah Daftar Pelatihan dan Tingkatkan Hardskil dan Softskill kamu</h2>
                    <p>
                        Kami menyediakan berbagai macam pelatihan yang dapat kamu ikuti sesuai dengan kebutuhanmu dan kemampuanmu. Yuk, cari pelatihan yang kamu inginkan!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="training">
    <div class="training-list mx-lg-5 px-4 mt-5 pt-5">
        <h2 class="fw-bold mb-5">Daftar Pelatihan</h2>
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="card mb-3 border-0 mb-5 ps-4 py-3">
                <div class="row g-0">
                    <div class="col-md-3 text-sm-center">
                        <img src="/img/Frame 57.png" class="img-fluid rounded-start" alt="..." style="max-width: 200px;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-purple-100 fw-bold">Pelatihan Softskill</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut. </p>
                            <div class="row">
                                <div class="col-sm-8 col-md-6 col-lg-12">
                                    <p class="card-text h6 text-decoration-line-through text-secondary">Rp 500.000</p>
                                    <p class="card-text h5 fw-bold text-danger">Rp 325.000</p>
                                </div>
                                <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end  text-lg-start">
                                    <a href="/detail-training" class="btn btn-sm btn-purple-100 mt-2">Gabung Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        // Slider Team
        sliderTeam();
    })

    let sliderTeam = () => {
        let mediaSm = window.matchMedia("(max-width: 576px)");
        let mediaMd = window.matchMedia("(max-width: 577px)");
        if (mediaSm.matches) {
            var perPage = 1;
        } else if (mediaMd.matches) {
            var perPage = 3;
        } else {
            var perPage = 3;
        }
        var splide = new Splide('.splide.splide-training', {
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