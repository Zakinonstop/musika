<section id="course-top">
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="fw-bold text-white h1">Carilah Daftar Pelatihan dan Tingkatkan Hardskil dan Softskill kamu</div>
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
        <h2 class="fw-bold mb-5 text-center text-purple">Daftar Pelatihan</h2>
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="card mb-3 border-0 shadow mb-5 py-4 br-15 cursor-pointer card-training">
                <div class="row g-0">
                    <div class="col-md-3 text-sm-center">
                        <img src="/img/Frame 57.png" class="img-fluid rounded-start" alt="..." style="max-width: 200px;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title text-purple-100 fw-bold">Pelatihan Softskill dan Hardskill Pemrogaman</h5>
                            <p class="card-text">Pelatihan Fullstack Developer yang akan dipandu oleh mentor Bapak Arif. Sebelum dimulai training akan disediakan modul pelatihan yang akan dipelajari dan tugas yang perlu diselesaikan. Penilaian dari tugas projek akhir akan dinilai dan dapat dijadikan sebagai pengalaman dan bukti karya ynag telah dbuat.</p>
                            <div class="row">
                                <div class="col-sm-8 col-md-6 col-lg-12">
                                    <p class="card-text h6 text-decoration-line-through text-secondary">Rp 500.000</p>
                                    <p class="card-text h5 fw-bold text-orange">Rp 325.000</p>
                                </div>
                                <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end  text-lg-start">
                                    <a href="/detail-training" class="btn btn-sm btn-purple-100 mt-2">Lihat detail</a>
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
    $('.card-training').click(function() {
        window.location.href = "detail-training";
    })
</script>