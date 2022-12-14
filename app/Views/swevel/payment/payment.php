<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<style>
    .logo-bank button {
        width: 80px;
        height: 60px;
    }

    .logo-bank button:hover {
        border-color: gray;
    }

    .logo-bank img {
        width: 50px;
    }
</style>
 <nav class="navbar navbar-expand-lg bg-transparent position-absolute w-100 shadow border mb-5" style="top: 0;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><img src="/img/logo/musika-logo2.png" alt="" style="max-width: 150px; height:35px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-3"></ul>
        </div>
    </div>
</nav>
<main>
    <div class="container p-2 m-auto mt-5 pt-5">
        <input type="hidden" readonly id="id_course" value="<?= $id; ?>">
        <div class="row" id="section1">
            <div class="col-lg-8">
                <div class="card border-3 bg-white">
                    <div class="bg mt-3">
                        <div class="container bg-transparent p-3">
                            <div class="row flex-row-reverse">
                                <div class="col-sm-12 col-md-12 col-lg-12 my-auto">
                                    <div class="d-flex justify-content-center skeleton">
                                        <img src="/img/skeleton4.gif" alt="">
                                    </div>                                    
                                    <h3 class="fw-bold judul-course"></h3>
                                    <p class="text-muted"></p>
                                    <p class="deskripsi-course"></p>
                                    <h4 class="text-end mt-4 text-red new_price"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5 pb-5  mt-lg-0 mt-md-4 mt-sm-4">
                <div class="row" id="section2">
                    <div class="card border-3 bg-white">
                        <div class="bg mt-1">
                            <div class="container bg-transparent p-3">
                                <div class="row flex-row-reverse">
                                    <div class="col-sm-12 col-md-12 col-lg-12 my-auto">
                                        <div class="row border-bottom">
                                            <div class="col-6">
                                                <p class="text-muted">Harga Kelas</p>
                                                <p class="text-muted">Potongan</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="text-end fw-bold text-red old_price"></p>
                                                <p class="text-end fw-bold diskon_price"></p>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <p style="color: #666666;">Kelas</p>
                                            <div class="input-group mb-4">
                                                <input type="text" style="width: 30px;" class="form-control border-0 bg-light" placeholder="code">
                                                <button class="btn btn-purple">Use</button>
                                            </div>
                                            <div class="col-6">
                                                <p style="color: #666666;">Amount</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="text-end fw-bold new_price"></p>
                                                <input type="hidden" id="harga-bayar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3" id="section3">
                    <div class="card border-3 bg-white">
                        <div class="bg mt-1">
                            <div class="container bg-transparent p-3">
                                <div class="row flex-row-reverse">
                                    <div class="col-sm-12 col-md-12 col-lg-12 my-auto">
                                        <h6 class="fw-bold mb-4">Pilih Metode Pembayaran</h6>


                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h4 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="row">
                                                            <div class="col-2"><i class="fa-solid fa-building-columns"></i></div>
                                                            <div class="col-8 mt-2">
                                                                <p>Transfer Bank</p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h4>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="row logo-bank satu">
                                                            <?php foreach($bank_limit as $x) : ?>
                                                            <div class="col-4 mb-3">                                                                
                                                                <button class="btn bank" data-norek="<?= $x['no_rekening']; ?>" data-nama="<?= $x['nama_bank']; ?>">
                                                                    <img src="/img/bank/<?= $x['gambar']; ?>" alt="<?= $x['nama_bank']; ?>">
                                                                </button>                                                                
                                                            </div>
                                                            <?php endforeach; ?>                                                            
                                                            <div class="col-4 mb-3 more-bank">
                                                                <button class="btn text-center">                                                                                                                                        
                                                                    <div class="small text-muted">Lihat Semua</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="row logo-bank dua hide">
                                                            <?php foreach($bank as $x) : ?>
                                                            <div class="col-4 mb-3">                                                                
                                                                <button class="btn bank" data-norek="<?= $x['no_rekening']; ?>"  data-nama="<?= $x['nama_bank']; ?>">
                                                                    <img src="/img/bank/<?= $x['gambar']; ?>" alt="<?= $x['nama_bank']; ?>">
                                                                </button>                                                                                                                                                                                    
                                                            </div>
                                                            <?php endforeach; ?> 
                                                            <div class="col-4 mb-3 sedikit-bank">
                                                                <button class="btn text-center">                                                                                                                                        
                                                                    <div class="small text-muted">Tutup</div>
                                                                </button>
                                                            </div>                                                                                                                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <!--  <div class="row text-end mt-3">
                                                <div class="fw-bold">Pay Within</div>
                                                <div id="time-part" class="text-purple mt-3"></div>
                                            </div> -->
                                            <div class="row mt-3">
                                                <!-- <p style="font-size: 10px;">Order ID #0deaa41e-b467-49f6-8b2b-1f7fd7c2a72e</p>
                                                <p style="font-size: 10px;">Complete payment from BRI to the virtual account number below.</p>
                                                <br> -->
                                               <!--  <h6>Virtual account number</h6>
                                                <div class="col-8">
                                                    <div class="fw-bold" id="virtual_kode">-</div>
                                                </div> -->
                                            <!--     <div class="col-4">
                                                    <h6 class="text-end" style="color: #6F32BE; cursor:pointer" onclick="copyToClipboard('#virtual_kode')">COPY</h6>
                                                </div> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <hr>                                
                            </div>
                        </div>
                        <div class="mt-2 mb-4 w-100 card-selanjutnya">
                            <?php if(session()->get('swevel_email')) : ?>
                                <button type="button" class="btn btn-purple-100 d-block p-2 w-100 show-detail-pembayaran selanjutnya">Selanjutnya</button>
                            <?php else : ?>
                                <div class="btn btn-purple-100 d-block p-2 w-100 show-detail-pembayaran">Lanjut pembayaran</div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>


<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast bg-purple text-white" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Copy Success</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

        // $('.show-detail-pembayaran').click(function(){
        //     let checkNorek = $('#virtual_kode').html();            
        //     if(checkNorek == '-'){
        //         $(".show-detail-pembayaran.selanjutnya").removeClass('btn-purple').addClass('btn-danger').html('Pilih Metode Pembayaran');
        //         setTimeout(() => {
        //             $(".show-detail-pembayaran.selanjutnya").addClass('btn-purple').removeClass('btn-danger').html('Selanjutnya');                
        //         }, 3000);
        //     }else{
        //         $(".show-detail-pembayaran.selanjutnya").html(`<div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div>`);                
        //         let norek = $('#virtual_kode').html();
        //         let harga = $('#harga-bayar').val();
        //         $.ajax({
        //             url : '/save-purchase',
        //             type : 'post',
        //             dataType : 'json',
        //             data : {
        //                 course : '<?= $id; ?>',
        //                 bank : norek,
        //                 harga : harga,
        //             },
        //             success: function(result){
        //                 if(result.code == '200'){
        //                     $(".show-detail-pembayaran.selanjutnya").addClass('btn-purple').removeClass('btn-danger').html('Done');                
        //                 }
        //                 if(result.code == '500' && result.message == 'sudah-beli'){
        //                     $(".show-detail-pembayaran.selanjutnya").addClass('btn-purple').removeClass('btn-danger').html('anda sudah membeli course ini.\n anda bisa melanjutkan ke halaman materi');                
        //                     $('.card-selanjutnya').append(`
        //                         <a href="/`+result.redirect+`" class="btn btn-primary mt-3 w-100 text-decoration-none">kembali ke materi</a>
        //                     `);
                            
        //                 }                        
        //             }
        //         })
        //     }
        // })
        
        $('.bank').click(function() {
            let norek = $(this).data('norek');
            let nama = $(this).data('nama');
            $('#virtual_kode').html(norek)
            $('#time-part').html(nama);
        })

        $('.more-bank').click(function(){
            $('.logo-bank.satu').addClass('hide');
            $('.logo-bank.dua').removeClass('hide');            
        })
        $(".sedikit-bank").click(function(){
            $('.logo-bank.satu').removeClass('hide');
            $('.logo-bank.dua').addClass('hide');            
        })

        let id_course = $('#id_course').val();
        $.ajax({
            url: 'https://lms.lazy2.codes/api/course/detail/' + id_course,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                $('.skeleton').addClass('hide').removeClass('d-flex');
                $('.judul-course').html(result.title);
                $('.deskripsi-course').html(result.description);
                $('.old_price').html('Rp ' + formatRupiah(result.old_price));
                $('.new_price').html('Rp ' + formatRupiah(result.new_price));
                $('.diskon_price').html('-Rp ' + formatRupiah(result.old_price - result.new_price));
                $('#harga-bayar').val(result.new_price);
            }
        })
    })

    $('.accordion-payment .row h5').click(function() {
        $(this).nextUntil('.row h5').toggle();
    });

    function copyToClipboard(element) {
        let norek = $('#virtual_kode').html();
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();        
        $('.toast-body').html(norek);
        $('.toast').toast('show');
    }
</script>


<?= $this->endSection(); ?>