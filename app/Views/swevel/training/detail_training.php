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
<<<<<<< HEAD

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
=======
<section id="detail-training">
    <div class="container">
        <div class="title text-center mt-5 mb-lg-5 pb-4 fw-bold h3">Autodesk Certified Professional: Revit for Architectural Design Exam Prep</div>
        <div class="row mb-5">
            <div class="col-lg-6 overflow-hidden">
                <img src="/img/pos.jpg" alt="" class="detail-img">
            </div>
            <div class="col-lg-6">
                <div class="h5 fw-bold mb-3">Penjelasan Course</div>
                <p class="text-justify">
                    Memainkan peran penting dalam dunia konstruksi sipil sebagai drafter. Belajar membuat dan mempersiapkan gambar-gambar kerja teknik, sehingga gambar tersebut dapat dengan jelas dan mudah dapat dilakukan serta mudah dalam proses pemesanan obyek gambar tersebut. Mulailah dengan mengenal perangkat lunak desain gambar konstruksi bangunan berupa autocad dan sketsa, lalu pembangunan ke gambar konstruksi bangunan dengan mempertimbangkan metode dan efisiensi waktu sehingga meningkatkan kompetensi pencari kerja dalam menambah aspek pengetahuan dan keterampilan mengenai penggambaran konstruksi bangunan dengan Perangkat Lunak CAD.

                    Setelah mengikuti pelatihan, peserta mampu:
                <ul class="list-unstyled">
                    <li>komputer dasar</li>
                    <li>Penguasaan Alat Komputer dan Software Menggambar Teknik</li>
                    <li>Fase Pelatihan</li>
                </ul>

                <p>
                    fase ini, akan menggunakan model blended learning, dimana peserta diajak untuk menyelesaikan modul dan kegiatan belajar mandiri di platform e-traing kemnaker, yang akan dipadukan webinar workshop.
                    Proses pembelajaran campuran blended e-learnig
                </p>


                <ul class="list-unstyled">
                    <li>Durasi pelatihan: 56 JP (e-Training), 264 JP (Face to Face)</li>
                    <li>Tugas dan Kuis dikumpulkan diakhir sesi pembelajaran sesuai dengan waktu yang</li>
                    <li>ditentukan di e-Training Kemnaker</li>
                </ul>
                Mempersiapkan tugas besar berupa gambar bestek di akhir pelatihan di
                Kriteria Kelulusan Bobot

                Peserta yang tidak hadir lebih dari 3 hari selama pelatihan tidak lulus pelatihan
                Peserta harus menyelesaikan tugas dan kuis sesuai dengan waktu yang telah ditentukan
                </p>


                <div class="row mt-5">
                    <div class="col-lg-6 col-sm-9 d-block">
                        <div class="card-text text-decoration-line-through text-secondary h5"><small>Rp 500.000</small></div>
                        <div class="card-text h4 fw-bold text-orange">Rp 325.000</div>
                    </div>
                    <div class="col-lg-6 col-sm-3 text-sm-start">
                        <button type="button" class="btn btn-purple-100 w-100 modal-login">Gabung Sekarang</button>
                    </div>
>>>>>>> 7a9fde547cd401387d3751c1752701cf7b28f184
                </div>
            </div>
        </div>
    </div>

<<<<<<< HEAD
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
=======
        <div class="similiar-event mb-5 mt-5">
            <div class="h3 fw-bold mb-4 text-purple">Pelatihan lainnya</div>
            <section id="similiar-event" class="mb-5 pb-5">
                <div class="row ">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 card-training cursor-pointer mb-5 shadow br-15">
                                <div class="card-body">
                                    <div class="text-center py-3">
                                        <img src="/img/pos.jpg" class="card-img-top" alt="..." style="width: 200px;">
                                    </div>
                                    <h5 class="card-title text-purple">Autocad 3D</h5>
                                    <p class="card-text small">Buktikan kepada calon pemberi kerja bahwa Anda siap dengan tugas tersebut dengan menjadi Autocad 3D Profesional</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="small text-decoration-line-through">Rp 500.000</div>
                                            <div class="text-orange fw-bold">Rp 325.000</div>
                                        </div>
                                        <div class="col-6 text-center">
                                            <button class="btn btn-sm btn-purple">Lihat detail</button>
                                        </div>
                                    </div>
>>>>>>> 7a9fde547cd401387d3751c1752701cf7b28f184
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
<<<<<<< HEAD
    $('.card-thumbnail-course, .card-content-course .card-title').click(function() {
        let id = $(this).data('id');
        window.location.href = '/training/detail/' + id;
    })
    
    $('.btn-buy-course').click(function() {
        window.location.href = '/login';
=======
    $('.card-training').click(function() {
        window.location.href = "/training";
    })
    $('.modal-login').click(function() {
        $('#modal-login').addClass('active');
>>>>>>> 7a9fde547cd401387d3751c1752701cf7b28f184
    })
</script>

<?= $this->include('swevel/course/footer-course'); ?>
<?= $this->endSection(); ?>