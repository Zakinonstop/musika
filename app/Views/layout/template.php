<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title . ' - PT Multi Visi Karya'; ?></title>
    <link rel="shortcut icon" href="/img/logo/favi-logo2.png" type="image/x-icon">

    <script src="/asset/custom_vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/asset/custom_vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/custom_vendor/fontawesome612/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- custom -->
    <link rel="stylesheet" href="/css/swevel_style.css">
    <link rel="stylesheet" href="/asset/css/custom.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/course.css">
    
    <style>
        .navbar .nav-link:hover { font-weight: 400; }
    
        .btn-green:hover {
            background: #88c946 !important;
            border-color: #88c946 !important;
            opacity: 1;
        }
        
        .btn-orange {
            background-color: #ff7f02 !important;
            border-color: #ff7f02 !important;
            opacity: 1;
        }
        
        .btn-orange:hover {
            background-color: #ff9c3b !important;
            border-color: #ff9c3b !important;
        }
        
        .btn-red {
            background-color: #eb0909 !important;
            border-color: #eb0909 !important;
            opacity: 1;
        }
        
        .btn-red:hover {
            background-color: #ff3939 !important;
            border-color: #ff3939 !important;
        }
        
        /*.btn-chart-course { color: #ff7f02; }
        .btn-chart-course:hover { color: #ff9c3b; }*/
        
        #course-top { height: 400px; }
        
        #course-top .wrapper {
            background: linear-gradient(340deg, rgba(186, 237, 134, 1) -20%, rgba(255, 255, 255, 1) 62%);
            letter-spacing: 0;
            color: var(--bs-body-color) !important;
        }
        
        .card-course .card-thumbnail-course { height: 235px; }
        .card-course .card-title { height: 65px; }
        
        #footer-training { background: #ff7f02; }
        #footer-training .text-purple-100 { color: #fff; }
    </style>
</head>

<body>
    <?= $this->renderSection('content'); ?>

    <a href="tel:02746497816" target="_self" class="btn btn-green hubungi-kami px-4 pb-2">
        <span class="d-flex">
            <div class="my-auto me-3"><i class="fa-solid fa-phone" style="height: 21px;"></i></div>
            <div class="my-auto mt-1" style="letter-spacing: 0;font-size: 16px;">Hubungi Kami</div>
        </span>
    </a>

    <div id="modal-login" class="hide"></div>

    <script src="/asset/custom_vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/custom_vendor/fontawesome612/js/all.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        $(document).ready(function() {
            // scroll link
            let lastId,
                topMenu = $('#navbar-nav'),
                topMneuHeight = topMenu.outerHeight() + 1,
                menuItems = topMenu.find('a'),
                scrollItems = menuItems.map(function() {
                    let item = $($(this).attr('href'));
                    if (item.length) {
                        return item;
                    }
                });

            menuItems.click(function(e) {
                let href = $(this).attr('href'),
                    offsetTopo = hreff === "#" ? 0 :
                    $(href).offset().top - topMneuHeight + 1;

                $('html,body').stop().animate({
                    scrollTop: offsetTop
                }, 850);
                e.preventDefault();
            })
        });
        
        var formatRupiah = function(num) {
            var str = num.toString().replace("", ""),
                parts = false,
                output = [],
                i = 1,
                formatted = null;
            if (str.indexOf(".") > 0) {
                parts = str.split(".");
                str = parts[0];
            }
            str = str.split("").reverse();
            for (var j = 0, len = str.length; j < len; j++) {
                if (str[j] != ",") {
                    output.push(str[j]);
                    if (i % 3 == 0 && j < (len - 1)) {
                        output.push(".");
                    }
                    i++;
                }
            }
            formatted = output.reverse().join("");
            return ("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
        };
    </script>

    <!--<script src="/js/swevel.js"></script>-->
</body>
</html>