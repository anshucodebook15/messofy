<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>


    <base href="">

    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- End Bootstrap -->

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/36a236c794.js" crossorigin="anonymous"></script>
    <!-- End Font Awesome -->

    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;600&family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <!-- End Google Font Link -->


    <!-- Slick Crousal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Slick Crousal -->

    <!-- Css Link -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <!-- End Css Link -->

    <style>
        .testli {
            list-style-type: none;
            display: flex;
            margin: 0 !important;
            width: max-content;
            padding: 0;
        }

        .testli li {
            padding: .3rem 2rem .5rem 2rem !important;
        }

        .testli a {
            text-decoration: none;
        }

        .current-menu-item>a {
            color: #000 !important;
        }


        /* Categories Styles */

        .rcard_tag ul {
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        .rcard_tag a{
            text-decoration: none;
            font-size: 1.6rem;
        }

        



    </style>

</head>

<body>

    <?php $img = get_header_image(); ?>
    <?php $img ?>

    <div class="topbar w-100">
        <div class="container txtc p-0">
            <p class="m-0 stag dimd p1"> Messofy Recipes That you Made With <span class="heart">&#x2764;</span>
            </p>
        </div>
    </div>

    <header class="header site_header w-100">
        <div class="container">
            <div class="row jcc aic p2">
                <div class="col-6 p-0 txtc mobtxtl">
                    <a href="<?php echo site_url() ?>" class="nodeco"><img src="<?php echo $img ?>" alt="" class="w-100 logo m-0 p2">
                    </a>
                </div>
                <div class="col-6 dhide mblock txtr">
                    <i class="fas fa-bars licon"></i>
                </div>
            </div>
            <!-- Menu -->
            <!-- <nav class="bod flex jcc p1 mhide">
                <ul class="lstn flex m-0 cw bod p-0">
                    <li class="px4"> <a href="" class="nodeco">Home </a></li>
                    <li class="px4"><a href="" class="nodeco">Recipes </a></li>
                    <li class="px4"> <a href="" class="nodeco">About</a></li>
                </ul>
            </nav> -->

            <nav class="bod flex jcc p1 mhide">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                    'menu_class' => 'testli'
                )) ?>
            </nav>
            <!-- Menu -->


        </div>
    </header>