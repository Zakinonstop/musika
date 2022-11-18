<section id="footer">
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-lg-5" id="service">
                <h2 class="lh-lg">PT Multi Visi Karya</h2>
                <p class="text-justify">Kami merupakan biro konsultasi yang bergerak di bidang jasa perencana dan pengawas konstruksi yang terdiri dari bidang arsitektur, sipil, jasa inspeksi teknis, tata lingkungan, dan survey. Selain itu, kami juga menyediakan layanan pelatihan bagi engineer muda untuk memahami secara mendalam terkait bidang konstruksi.</p>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <ul class="list-unstyled mt-4" id="link">
                    <li><a class="text-decoration-none" href="#edu">Kursus</a></li>
                    <li><a class="text-decoration-none" href="#training">Pelatihan</a></li>
                    <li><a class="text-decoration-none" href="#implementasi">Pendampingan</a></li>
                </ul>
            </div>
            <div class="col-lg-2 text-center">
                <div class="footer-logo mt-4">
                    <a href="/"><img src="/img/logo/musika-logo1.png" alt="" style="max-width: 207px;"></a>
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
            PT Multi Visi Karya © <?= date('Y') ?>
        </div>
    </div>
</section>