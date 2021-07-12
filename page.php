<?php get_header('header'); ?>

<main class="main w-100">

<div class="spacer"></div>

<div class="container">

    <div class="row jcsa">
        <!-- Main Content -->
        <div class="col-md-8 jcc bod">

            <div class="blog_titlehead">

                <div class="spacer"></div>

                <!-- BreadCrumb -->
                <p class="mtag diml"><a href="<?php echo site_url(); ?>">Home </a> <i class="fas fa-angle-double-right px1"></i> <?php echo the_title() ?>  </p>
                    <!-- ./Breadcrumb -->

              

                 <div class="spacer"></div>
                    <!-- H1 Title -->
                <h1 class="bold8"><?php echo the_title() ?></h1>
                <p><span class="mtag"> <?php echo get_the_date() ?></span></p>
                <!-- ./H1 Title -->

            </div>

            

            <div class="blog_content">

            <!-- All Page Content -->
            <?php echo the_content(); ?>
            <!-- End All Page Content -->

            </div>

            <div class="blog_recentpost section">

                <!-- Recent Recipes -->
                <div class="blog_recentpost-heading">
                    <div class="card_head">
                        <h3>Our Best Recipes</h3>
                        <hr class="card_head_ul">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-6 pxy2">
                        <div class="lsdh2 txtc">
                            <a href="" class=" nodeco">
                                <div class="rcard_img rl">
                                    <img src="../images/uploads/demoimg1.jpg" alt="" class="w-100 mb-3">
                                    <div class="rcard_tag">
                                        <span class="mtag">Breakfast</span>
                                    </div>
                                </div>
                                <p class="rcard_expert"> <strong> Allo baingan</strong>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 pxy2">
                        <div class="lsdh2 txtc">
                            <a href="" class=" nodeco">
                                <div class="rcard_img rl">
                                    <img src="../images/uploads/demoimg1.jpg" alt="" class="w-100 mb-3">
                                    <div class="rcard_tag">
                                        <span class="mtag">Breakfast</span>
                                    </div>
                                </div>
                                <p class="rcard_expert"> <strong> Allo baingan</strong>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 pxy2">
                        <div class="lsdh2 txtc">
                            <a href="" class=" nodeco">
                                <div class="rcard_img rl">
                                    <img src="../images/uploads/demoimg1.jpg" alt="" class="w-100 mb-3">
                                    <div class="rcard_tag">
                                        <span class="mtag">Breakfast</span>
                                    </div>
                                </div>
                                <p class="rcard_expert"> <strong> Uttpam Vadda</strong>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 pxy2">
                        <div class="lsdh2 txtc">
                            <a href="" class=" nodeco">
                                <div class="rcard_img rl">
                                    <img src="../images/uploads/demoimg1.jpg" alt="" class="w-100 mb-3">
                                    <div class="rcard_tag">
                                        <span class="mtag">Breakfast</span>
                                    </div>
                                </div>
                                <p class="rcard_expert"> <strong> Uttpam Vadda</strong>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 pxy2">
                        <div class="lsdh2 txtc">
                            <a href="" class=" nodeco">
                                <div class="rcard_img rl">
                                    <img src="../images/uploads/demoimg1.jpg" alt="" class="w-100 mb-3">
                                    <div class="rcard_tag">
                                        <span class="mtag">Breakfast</span>
                                    </div>
                                </div>
                                <p class="rcard_expert"> <strong> Uttpam Vadda</strong>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 pxy2">
                        <div class="lsdh2 txtc">
                            <a href="" class=" nodeco">
                                <div class="rcard_img rl">
                                    <img src="../images/uploads/demoimg1.jpg" alt="" class="w-100 mb-3">
                                    <div class="rcard_tag">
                                        <span class="mtag">Breakfast</span>
                                    </div>
                                </div>
                                <p class="rcard_expert"> <strong> Uttpam Vadda</strong>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="spacer"></div>
                </div>
                <!-- End Latest Recipes -->

            </div>


        </div>
        <!-- End Main Content -->



    </div>


</div>



</main>

<?php get_footer('footer'); ?>