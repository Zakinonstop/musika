<?= $this->extend('layout/template-materi'); ?>
<?= $this->section('content'); ?>

<style>
    .accordion-button:not(.collapsed) {
        color: var(--bs-btn-color);
        background-color: #ddf6c3;
    }
    
    ul.list-sub-menu-materi li { list-style: none; }
    
    ul.list-sub-menu-materi li:hover {
        cursor: pointer;
        color: #61af11;
    }
    
    ul.list-sub-menu-materi li i { width: 27px; }
</style>

<div class="container">
    <div id="materi">
        <input type="hidden" id="course" value="<?= $course ?>" readonly>
        <input type="hidden" id="category" value="<?= $category ?>" readonly>
        
        <div class="h4 mb-5 fw-bold title"></div>
        <div class="d-flex justify-content-center loader">
            <div class="h3 text-center mt-7">
                <div>Selamat belajar di kursus</div>
                <div class="title-course text-purple mt-2"></div>
                <div class="mt-5">
                    <button class="btn btn-green text-white btn-lg rounded-pill px-4 mulai-belajar">Mulai Pembelajaran</button>
                </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-center">
            <img src="" alt="" class="skeleton-video">
        </div>
        <div class="d-flex justify-content-center">
            <div class="click-yt" onclick="click_yt()" style="display: none;"></div>
            <iframe width="640" height="360" class="video1 hide" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="thumbnail-video position-relative"></div>
        </div>

        <div>
            <div class="fw-bold mb-4 judul-materi"></div>
            <div class="penjelasan-materi"></div>            
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // show sidebar materi (first load)
        let course = $('#course').val();
        
        $.ajax({
            url: 'https://lms.lazy2.codes/api/course/detail/' + course,
            type: 'GET',
            dataType: 'JSON',
            success: function (result) {
                $('.title-course').html(result.title);
                
                $.each(result.video, function (i, data) {
                    $('#menu-materi').append(
                        `<div class="accordion-item mb-3 border-bottom" data-order="` +data.order +`" data-video="` +data.video_id +`">
                            <h2 class="accordion-header btn-list-materi order-` +data.order +`" id="flush-materi">
                                <button class="accordion-button accordion-button-primary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse` +data.order +`" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="https://musika.id/img/portofolio/perpustakaan%20(4).jpg" alt="" style="width: 50px;" class="materi-thumbnail">
                                        </div>
                                        <div class="col-9">
                                            <div class="fw-bold">` +data.title +`</div>                                     
                                            <div class="mt-2">
                                                <i class="fa-solid fa-chart-simple text-purple"></i>
                                                <span class="ms-3">Topik ` +data.order +`</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapse` +data.order +`" class="accordion-collapse collapse" aria-labelledby="flush-materi" data-bs-parent="#menu-materi">
                                <div class="accordion-body">
                                    <ul class="list-sub-menu-materi">                                                                        
                                        <li class="mb-3"><i class="fa-solid fa-circle-play text-purple"></i> Materi</li>
                                        <li class="mb-3"><i class="fa-solid fa-rectangle-list text-purple"></i> Kuis</li>
                                        <li class="mb-3"><i class="fa-solid fa-file text-purple" style="padding-left: 3px;"></i> Resume</li>
                                    </ul>
                                </div>
                            </div>
                        </div>`
                    );
                })
                
                $('ul.list-sub-menu-materi li').click(function() {
                    window.location.href = '/login';
                })
    
                // cek kondisi apakah ada di halaman matari atau halaman kuis untuk membuat tombol menjadi anchor
                /*let category = $('#category').val();
                if (category == 'kuis') {
                    let video = $('#video').val();
                    $.ajax({
                        url: 'https://lms.lazy2.codes/public/api/course/video/' + video,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function (result) {
                            $('.judul-kuis').html('Kuis ' + result.title);
                            $('.btn-preview-strat-quiz').attr('href','/course/materi/' + course);
                        },
                    });
                    $('.btn-materi').attr('href', '/course/materi/' + course);
                }*/
            },
        });
    });
    
    $('.mulai-belajar').click(function () {
        $('.btn-list-materi.order-1 .accordion-button').click();
    })
    
    function click_yt() {
        $('#modal-login').addClass('active');
    }
</script>

<?= $this->endSection(); ?>