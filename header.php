<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <meta name="google-site-verification" content="iGr3Z5ZOocMnIBJIpzP9-HKK7cd6p5VN8V8WT3sinlo" /> -->

    <!-- meta Tags  -->

    <?php if(is_front_page()){ ?>

    <title><?php echo bloginfo('description'); ?> - <?php echo bloginfo('name'); ?></title>
        
     <?php  } else { ?>

    <title><?php echo wp_title(); ?></title>

    <?php } ?>

    <!-- New Adsense Code meswp -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3783278638415084"
     crossorigin="anonymous"></script>
    

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173429152-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-173429152-1');
    </script> -->

    <?php  wp_head(); ?>
	
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- End Bootstrap -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- End Font Awesome -->

    <!-- Google Font Link -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;600&family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap" rel="stylesheet"> -->
    <!-- End Google Font Link -->

    <!-- Css Link -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <!-- End Css Link -->

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
                    <i class="fas fa-bars licon nav_hb"></i>
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


            <!-- mobile_menu -->

            <div class="mob_menu dn">
                <nav class="bod flex jcc p1">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary_menu',
                        'menu_class' => 'testli'
                    )) ?>
                </nav>
            </div>

            <!-- End Mobile Menu -->





        </div>
    </header>