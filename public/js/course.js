$(document).ajaxComplete(function(){
    setTimeout(function(){
        $('.card-price').removeClass('hide');
    },1000);        

    $('.btn-category-course').click(function(){
        let getCateg = $(this).data('categ');
        $('.btn-category-course').removeClass('btn-purple').addClass('btn-light');
        $(this).removeClass('btn-light').addClass('btn-purple');
        $('.skeleton').removeClass('hide');
        $('#card-list-course').html('');
        
        $('#input-categ').val(getCateg);
        getCourse('https://lms.lazy2.codes/api/course');                    
     })
});

function refreshCourse() {
     $('.skeleton').removeClass('hide')
     $('#card-list-course').html('');

     let inputSearch = $('#search-course-training').val();
     if (inputSearch == '') {
         getCourse('https://lms.lazy2.codes/api/course');
     } else {
         getCourse('https://lms.lazy2.codes/api/course/find/' + inputSearch);
     }
 }

 function getCourse(url) {
     let getUrl = url;
     $.ajax({
         url: getUrl,
         type: 'GET',
         dataType: 'json',
         success: function(result) {
             let countData = result.length;
             if (countData >= 1) {
                 $('.skeleton').addClass('hide')
                 $('#card-list-course').html('');
                 $.each(result, function(i, data) {                    
                     $('#card-list-course').append(`
                        <div class="col-md-6 col-lg-4 col-sm-12 col-course mb-5">
                            <div class="card card-course border-0 cursor-pointer shadow br-15" data-id="` + data.course_id + `">                
                                <div class="image-content card-thumbnail-course" data-id="` + data.course_id + `">
                                    <div class="card-image.">
                                        <div class="course-img-polygon">
                                            <img src="" alt="" class="card-img">
                                        </div>
                                        <div class="text-center p-2 btn-light-50-hover-0 w-50 position-absolute small br-end-10 category-course-other category-course-`+data.course_id+`" style="z-index:5; margin-top: -35px;"></div>                                                                                
                                    </div>
                                </div>                
                                <div class="card-content card-content-course ps-4 py-4"  data-id="` + data.course_id + `">
                                    <h5 class="card-title fw-bold lh-base ">` + data.title + `</h5>                                                                            
                                    <div class="row">
                                        <div class="col-sm-8 col-md-6 col-lg-12">
                                            <p class="card-text h6 text-decoration-line-through text-secondary">Rp ` + formatRupiah(data.old_price) + `</p>
                                            <p class="card-text h5 fw-bold text-orange">Rp ` + formatRupiah(data.new_price) + `</p>
                                        </div>                        
                                    </div>
                                </div>
                                <div class="row m-0 mb-3">
                                    <div class="col-10">
                                        <div class="btn btn-purple btn-sm w-100 btn-buy-course">Beli Kursus</div>
                                    </div>
                                    <div class="col-2 p-0 align-self-center">                        
                                        <div class="btn-chart-course"><i class="fa-solid fa-cart-shopping"></i></div>                                                
                                    </div>
                                </div>                
                            </div>
                         </div>
                        `);
                 });                 

                 $('.btn-more-course').removeClass("hide");                 

                 let limit = $('#limit-course').val();
                 if (limit > 0) {
                     $('.col-course').slice(limit, countData).remove();
                 }

                //  get category course                
                 $.each(result, function(i, data) {    
                    if(data.category){
                        if (data.category.length <= 0) {
                            $('.category-course-other').html('-');                            
                        } else {
                            $.each(data.category, function(i, categ) {
                                $('.list-category-course').append(`
                                    <button class="btn btn-light btn-sm mx-2 btn-category-course" data-categ="`+categ.name+`">` + categ.name + `</button>
                                `);                            

                                $('.category-course-' + categ.course_id).html(categ.name);                                                              
                                $('.category-course-' + categ.course_id).removeClass('category-course-other');                                                              
                                let categHtml = $('.category-course-' + categ.course_id).html();                                
                                let categId = $('.category-course-' + categ.course_id);
                                let getCategVal = $('#input-categ').val();  
                                                            
                                if(getCategVal == 'semua')  {
                                    $(categId).parent().parent().parent().show();
                                    $('.category-course-other').parent().parent().parent().parent().show();
                                }else{                                                                
                                    if (getCategVal == categHtml) {          
                                        $('.category-course-other').parent().parent().parent().parent().hide();                          
                                        $(categId).parent().parent().parent().parent().show();                                    
                                    } else {
                                        $(categId).parent().parent().parent().parent().hide();                                    
                                    }   
                                }                                
                                // remove duplicate btn category course
                                var seen = {};
                                $('.btn-category-course').each(function() {
                                    var txt = $(this).text();
                                    if (seen[txt])
                                        $(this).remove();
                                    else
                                        seen[txt] = true;
                                });
                                // end remove
                            })
                        }

                        $.each(data.tag, function(i, dataa) {
                            $('.menu-tag').append(`                                                    
                            <button type="button" class="btn btn-light mx-3 tag-name">` + dataa.name + `</button>
                        `);

                            // remove duplicate
                            var seen = {};
                            $('.tag-name').each(function() {
                                var txt = $(this).text();
                                if (seen[txt])
                                    $(this).remove();
                                else
                                    seen[txt] = true;
                            });
                            // end remove
                        });
                    }else{
                        $('.category-course-other').html('-');                        
                    }

                 });       
                          
             } else {
                 $('.skeleton').addClass('hide')
                 $('#card-list-course').append(`
                    <div class="d-flex justify-content-center">   
                        <div class="alert alert-warning w-75 text-center br-20" role="alert">
                            Maaf, keyword yang anda cari tidak ditemukan.
                        </div>
                    </div> 
                `)
             }

             $('.card-thumbnail-course, .card-content-course').click(function() {
                 let id = $(this).data('id');
                 window.location.href = '/course/detail/' + id;
             })
         },
         error: function(result, ajaxOptions, thrownError) {
             $('.skeleton').addClass('hide')
             $('#card-list-course').append(`
                <div class="d-flex justify-content-center">   
                    <div class="alert alert-warning w-75 text-center br-20" role="alert">
                        Maaf, course tidak tersedia.
                    </div>
                </div> 
            `);
         }
     })
 }
 

function selectKategori() {
    let kategori = $("#card-kategori .list a");
    kategori.click(function () {
      kategori.removeClass("active");
      $(this).addClass("active");
      var kategoriTxt = $(this).html();
      let inputSearch = $("#inputSearchCourse");

      if (kategoriTxt == "All") {
        showCourse();
        inputSearch.val("");
      } else {
        let cardCourseLevel = $(".card-course .card-body #level");

        if (inputSearch.val() != "") {
          showCourse();
          inputSearch.val("");
        } else {
          cardCourseLevel.each(function () {
            if ($(this).html() == kategoriTxt) {
              $(this).parent().parent().parent().show();
            } else {
              $(this).parent().parent().parent().hide();
            }
          });
        }
        
      }
    });
};


 function getBundling() {
     $.ajax({
         url: 'https://lms.lazy2.codes/public/api/bundling',
         type: 'get',
         dataType: 'json',
         success: function(result) {
             $('.skeleton-bundling').addClass('hide').attr('src', '');
             $.each(result, function(index, bundling) {
                 $('.bundling-course').append(`
                                 <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                         <div class="card border-0 shadow card-bundling cursor-pointer" style="border-radius: 10px;">
                                         <div class="card-body">
                                                 <div class="d-flex justify-content-between">
                                                    <div class="title-bundling fw-bold text-purple">` + bundling.title + `</div>
                                                    <div class="title-bundling fw-bold text-purple">` + bundling.category_name + `</div>
                                                 </div>
                                                 <div class="my-2 description-bundling">` + bundling.description + `</div>
                                                 <div class="list-course-bundling-` + bundling.bundling_id + ` small text-white">` + getDetailBundling(bundling.bundling_id) + `</div>  
                                                 <div class="col-sm-8 col-md-6 col-lg-12">
                                                         <p class="card-text h6 text-decoration-line-through text-secondary">Rp ` + formatRupiah(bundling.old_price) + `</p>
                                                         <p class="card-text h5 fw-bold text-orange">Rp ` + formatRupiah(bundling.new_price) + `</p>
                                                 </div>            
                                                 <div class="col-sm-4 col-md-6 col-lg-12 text-sm-end mt-4 text-lg-start">
                                                         <button class="btn btn-sm btn-purple-100 mt-2 w-100">Join Now</button>
                                                 </div>                                          
                                         </div>
                                         </div>
                                 </div>
                                 `);

                 function getDetailBundling(id) {
                     $.ajax({
                         url: 'https://lms.lazy2.codes/public/api/bundling/detail/' + id,
                         type: 'get',
                         dataType: 'json',
                         success: function(result) {
                             if (result.course.length > 0) {
                                 $.each(result.course, function(index, data) {
                                     $('.list-course-bundling-' + id).append(`                                                                        
                                                                                <div class="row">
                                                                                    <div class="col-2">
                                                                                        <div class="mb-3 text-dark"><i class="fa-solid fa-check text-purple small"></i></div>
                                                                                    </div>
                                                                                    <div class="col-9">
                                                                                        <div class="mb-3 text-dark">` + data.title + `</div>
                                                                                    </div>
                                                                                </div>
                                                                        `);
                                 })
                             }
                             if (result.course.length == 0) {
                                 $('.list-course-bundling-' + id).append(`<div class="mb-3 text-dark">course belum tersedia</div>`);
                             }
                         }
                     })
                 }
             })
         }
     })
 }