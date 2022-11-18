<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title . ' - PT Multi Visi Karya' ?></title>
    <link rel="shortcut icon" href="/img/logo/favi-logo2.png" type="image/x-icon">
    
    <script src="/asset/custom_vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/asset/custom_vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/custom_vendor/fontawesome612/css/all.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/swevel_style.css">
    <link rel="stylesheet" href="/asset/css/custom.css">

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
        
        .btn-sidebar-materi { display: none; }

        @media only screen and (max-width: 768px) {
            .btn-sidebar-materi { display: block; }

            #user-sidebar-materi {
                background: white;
                position: absolute;
                left: -330px;
            }

            .content-materi { width: 100%; }
        }
    </style>
</head>

<body>
    <?= $this->include('swevel/course/navbar-course'); ?>
    
    <div class="d-flex">
        <div id="user-sidebar-materi">
            <div class="title-course d-flex justify-content-center text-center align-content-center p-2 pb-3 h5 text-purple fw-bold"></div>
            <div class="accordion accordion-flush" id="menu-materi"></div>
        </div>
        <div class="content-materi">
            <?= $this->renderSection('content'); ?>
        </div>
    </div>

    <script src="/asset/custom_vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/js/swevel.js"></script>

    <script>
        $(document).ready(function() {
            $(".btn-show-sidebar-materi").css("display", 'none');
            $(".btn-sidebar-materi").click(function() {
                $('.btn-sidebar-materi').css('display', 'none');
                $(".btn-show-sidebar-materi").css("display", 'block');
                $("#user-sidebar-materi").css({
                    'left': '0',
                    'transition': 'all .5s'
                });
            })
            $(".btn-show-sidebar-materi").click(function() {
                $("#user-sidebar-materi").css({
                    'left': '-330px',
                    'transition': 'all .5s'
                });
                $(this).css('display', 'none');
                $(".btn-sidebar-materi").css("display", 'block');
            })
        })
    </script>
</body>
</html>