<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->include('swevel/course/navbar-course'); ?>

<style>
    .detail-img {
        max-width: 500px;
    }
</style>
<section id="detail-training">
    <div class="container">
        <div class="title text-center mt-5 mb-lg-5 pb-4 fw-bold h3">Pelatihan Softskill</div>
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
                </div>
            </div>
        </div>

        <div class="similiar-event mb-5 mt-5">
            <div class="h3 fw-bold mb-4 text-purple">Pelatihan lainnya</div>
            <section id="similiar-event" class="mb-5 pb-5">
                <div class="row ">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 card-training cursor-pointer mb-5 shadow br-15">
                                <div class="card-body">
                                    <div class="text-center py-3">
                                        <img src="/img/Frame 57.png" class="card-img-top" alt="..." style="width: 200px;">
                                    </div>
                                    <h5 class="card-title text-purple">Training Softskill</h5>
                                    <p class="card-text small">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="small text-decoration-line-through">Rp 500.000</div>
                                            <div class="text-orange fw-bold">Rp 325.000</div>
                                        </div>
                                        <div class="col-6 text-center">
                                            <button class="btn btn-sm btn-purple">Lihat detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <a href="/training" class="btn btn-purple px-5 btn-more-course">Lihat semua</a>
                </div>
            </section>
        </div>
    </div>
</section>



<script>
    $('.card-training').click(function() {
        window.location.href = "/training";
    })
    $('.modal-login').click(function() {
        $('#modal-login').addClass('active');
    })
</script>

<?= $this->include('swevel/course/footer-course'); ?>
<?= $this->endSection(); ?>