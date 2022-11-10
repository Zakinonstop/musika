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
                <img src="/img/Frame 69.png" alt="" class="detail-img">
            </div>
            <div class="col-lg-6">     
            <div class="h5 fw-bold mb-3">Penjelasan Course</div>           
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                </p>
                
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
                </p>   

                 <div class="row mt-5">
                    <div class="col-lg-6 col-sm-9 d-block">
                        <div class="card-text text-decoration-line-through text-secondary h5"><small>Rp 500.000</small></div>
                        <div class="card-text h4 fw-bold text-orange">Rp 325.000</div>
                    </div>
                    <div class="col-lg-6 col-sm-3 text-sm-start">
                        <button class="btn btn-purple-100 w-100">Gabung Sekarang</button>
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
                            <div class="card border-0 mb-5 shadow br-15">
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
                                            <button class="btn btn-sm btn-purple">Gabung Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>                        
                </div>

            </section>
        </div>
    </div>
</section>



<script>
   
</script>

<?= $this->include('swevel/homepage/footer'); ?>
<?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>