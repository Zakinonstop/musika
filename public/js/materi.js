$(document).ready(function() {
    // show sidebar materi (first load)
    let course = $('#course').val()
    $.ajax({
        url: "https://lms.lazy2.codes/api/course/detail/" + course,
        type: "GET",
        dataType: "JSON",
        success: function(result) {
            $('.title-course').html(result.title);
            $.each(result.video, function(i, data) {
                $("#menu-materi").append(`
                    <div class="accordion-item mb-3 border-bottom" data-order="` + data.order + `" data-video="` + data.video_id + `">
                        <h2 class="accordion-header btn-list-materi order-`+data.order+`" id="flush-materi" data-video="` + data.video_id + `">
                            <button class="accordion-button accordion-button-primary bg-white text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse` + data.order + `" aria-expanded="false" aria-controls="flush-collapseOne">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="` + data.thumbnail + `" alt="" style="width: 50px;" class="materi-thumbnail">
                                    </div>
                                    <div class="col-9">
                                        <div class="fw-bold">` + data.title + `</div>                                     
                                        <div class="mt-2">
                                            <i class="fa-solid fa-chart-simple text-purple"></i>
                                            <span class="ms-3">Langkah ` + data.order + `</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapse` + data.order + `" class="accordion-collapse collapse" aria-labelledby="flush-materi" data-bs-parent="#menu-materi">
                            <div class="accordion-body">
                                <ul class="list-sub-menu-materi">                                                                        
                                    <li class="mb-3 hover-purple cursor-pointer btn-materi-kuis-resume">Materi</li>
                                    <li class="mb-3 hover-purple cursor-pointer btn-materi-kuis-resume">Kuis</li>
                                    <li class="mb-3 hover-purple cursor-pointer btn-materi-kuis-resume">Resume</li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                 `);
            });              

            // sorting ascending list menu sidebar materi
            var $parentMenu = $("#menu-materi"),
            $listMenu = $parentMenu.children("div.accordion-item");
            $listMenu.sort(function(a, b) {
                var an = a.getAttribute("data-order"),
                    bn = b.getAttribute("data-order");
                if (an > bn) {
                    return 1;
                }
                if (an < bn) {
                    return -1;
                }
                return 0;
            });
            $listMenu.detach().appendTo($parentMenu);     
            // end sorting
            
            // cek kuis apakah ada atau tidak dan show video and title materi            
            $(".btn-list-materi").click(function() {      
                $(".video1, .card-next-prev").removeClass("hide");                
                $(".loader").removeClass("d-flex").addClass("hide");          
                $('.skeleton-video').attr('src','/img/skeleton4.gif');
                $('.thumbnail-video').html('');

                let video = $(this).data("video");                     
                let getParent = $(this).parent();
                let btnKuis = getParent.find('.btn-kuis')

                $.ajax({
                    url: "https://lms.lazy2.codes/public/api/course/video/" + video,
                    type: "GET",
                    dataType: "JSON",
                    success: function(result) {                                             
                        $(".title").html(result.title);
                        $("title").html("Materi " + result.title);
                        $('.skeleton-video').addClass('hide');
                        
                        let linkVideo = result.video;
                        linkVideo = linkVideo.split("&v=").pop();
                        linkVideo = linkVideo.split("&feature")[0];
                        let linkYt = "https://www.youtube.com/embed/";
                        linkVideo = linkYt.concat(linkVideo);
                        $(".link-video").html(linkVideo);
                        $(".video1").attr("src", linkVideo);

                        let iframe           = $('iframe:first');
                        let iframe_src       = iframe.attr('src');
                        let youtube_video_id = iframe_src.match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();
                        iframe.addClass('hide');                        

                        if (youtube_video_id.length == 11) {
                            let video_thumbnail = $(`
                                <div class="d-flex justify-content-center img-thumbnail-video"><img src="//img.youtube.com/vi/`+youtube_video_id+`/0.jpg" class="cursor-pointer"></div>
                                <div class="d-none justify-content-center"><i class="fa-solid fa-play text-purple cursor-pointer" style="font-size:48px;position:absolute;"></i></div>
                                `);
                            $('.thumbnail-video').append(video_thumbnail);
                            setTimeout(function(){
                                let heightThumbnail = $('.img-thumbnail-video img')[0].scrollHeight;                                
                                let count = (heightThumbnail/2)+30;;
                                $('.fa-play').css('margin-top',-count);
                                $('.fa-play').parent().removeClass("d-none").addClass('d-flex');
                            },500)

                        }                                   
                    },
                    error: function(result, ajaxOptions, thrownError) {
                        $('.penjelasan-materi').html('')
                        $(".video1, .card-next-prev, .loader, .skeleton-video").addClass("hide");                                                 
                        $('.skeleton-video').attr('src','')
                        $('.penjelasan-materi').append(`
                            <div class="alert alert-danger w-100 text-center" role="alert">
                            Maaf, untuk saat ini course belum bisa di akses.
                            </div>
                        `)
                    }
                });
            });

            $('.mulai-belajar').click(function(){                  
                $('.btn-list-materi.order-1').click();
            })
           
            // cek kondisi apakah ada di halaman matari atau halaman kuis untuk membuat tombol menjadi anchor
            let category = $("#category").val();
            if (category == "kuis") {
                let video = $('#video').val();
                $.ajax({
                    url: "https://lms.lazy2.codes/public/api/course/video/" + video,
                    type: "GET",
                    dataType: "JSON",
                    success: function(result) {
                        $('.judul-kuis').html('Kuis ' + result.title);
                        $('.btn-preview-strat-quiz').attr('href', '/course/materi/' + course);
                    }
                })
                $(".btn-materi").attr("href", '/course/materi/' + course);                
            }            

            $(".hover-purple").hover(function() {
                $(this).addClass("active");
            });
            $(".hover-purple").mouseleave(function() {
                $(this).removeClass("active");
            });
            $("img").bind("error", function() {
                $(this).attr("src", "/img/skeleton2.gif");
            });
            $(".accordion-button-primary").click(function() {
                $(".accordion-button-primary").removeClass(
                    "bg-purple text-white active"
                );
                $(this).removeClass("bg-white text-dark").addClass("active");
            });
        },
    });
});