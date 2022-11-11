<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/logo-swevel-top2.png" type="image/x-icon">
    <script src="/asset/custom_vendor/jquery/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/asset/custom_vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/custom_vendor/fontawesome612/css/all.css">

    <link rel="stylesheet" href="/css/swevel_style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">

    <title><?= $title; ?></title>

    <style>
        .btn-sidebar-materi {
            display: none;
        }

        @media only screen and (max-width: 768px) {
            .btn-sidebar-materi {
                display: block;
            }

            #user-sidebar-materi {
                background: white;
                position: absolute;
                left: -330px;
            }

            .content-materi {
                width: 100%;
            }

        }
    </style>
</head>

<body>
    <?= $this->include('swevel/course/navbar-course'); ?>
    <div id="modal-login" class="hide"></div>

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