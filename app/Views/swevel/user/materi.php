<?= $this->extend('layout/template-materi'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div id="materi">
        <input type="hidden" readonly name="" id="course" value="<?= $course; ?>">
        <input type="hidden" readonly id="category" value="<?= $category; ?>">
        <div class="h4 mb-5 fw-bold title"></div>
        <div class="d-flex justify-content-center loader">
            <div class="h3 text-center mt-5">
                <div>Selamat belajar di course</div> 
                <div class="title-course text-purple mt-3"></div>
                <div class="mt-5 ">                    
                    <button class="btn btn-purple br-20 mulai-belajar">Mulai Pembelajaran</button>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <img src="" alt="" class="skeleton-video">
        </div>        
            <div class="d-none justify-content-center">
                <iframe width="640" height="360" class="video1 hide" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>         
            <div class="thumbnail-video position-relative"></div>
        <div>
            <div class="fw-bold mb-4 judul-materi"></div>
            <div class="penjelasan-materi"></div>            
        </div>
    </div>
</div>

<script src="/js/materi.js"></script>

<?= $this->endSection(); ?>