<section id="footer">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-5" id="service">
                <h2 class="lh-lg">PT Multi Visi Karya</h2>
                <p class="text-justify">Memberikan pelayanan pendidikan yang terbaik dan dapat diakses oleh pelanggan secara gratis dan berbayar dan jasa konsultasi lainnya. <br>Layanan yang tersedia: <a href="/course" style="text-decoration: none;">Kursus</a>, <a href="/training" style="text-decoration: none;">Pelatihan</a> dan <a href="/konsultasi" style="text-decoration: none;">Konsultasi</a>.</p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2">
                <ul class="list-unstyled" id="link">
                    <li><a class="text-decoration-none" href="<?= ($title == 'Swevel') ? '#about-us' : '/#about-us'; ?>">Tentang Kami</a></li>
                    <li><a class="text-decoration-none" href="<?= ($title == 'Swevel') ? '#service' : '/#service'; ?>">Pelayanan</a></li>
                    <li><a class="text-decoration-none" href="<?= ($title == 'Swevel') ? '#portofolio' : '/#portofolio'; ?>">Portofolio</a></li>
                    <li><a class="text-decoration-none" href="<?= ($title == 'Swevel') ? '#customer-review' : '/#customer-review'; ?>">Testimoni</a></li>
                    <li><a class="text-decoration-none" href="/faq">FAQ</a></li>
                    <li><a class="text-decoration-none" href="<?= ($title == 'Swevel') ? '#contactUs' : '/#contactUs'; ?>">Kontak Kami</a></li>
                </ul>
            </div>
            <div class="col-lg-4 text-center">
                <div class="footer-logo mt-3">
                    <a href="/"><img src="/img/logo/musika-logo1.png" alt="" style="max-width: 220px;"></a>
                </div>
                <div class="footer-sosmed">
                    <?php foreach ($kontak as $x) : ?>
                        <a href="<?= $x['description']; ?>" target="_blank" class="mx-2 text-dark h4"><?= $x['icon']; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="coba-circle circle-1"></div>
</section>
<section id="footer-training">
    <div class="container">
        <div class="text-center p-4 text-purple-100 fw-bold">
            Musika | <?= date('Y') ?>
        </div>
    </div>
</section>