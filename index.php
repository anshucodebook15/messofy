<?php
get_header('header'); 
the_post() ?>



<main class="main w-100">

<div class="spacer"></div>

<div class="container">

    <div class="row jcsa">
        <!-- Main Content -->
        <div class="col-md-7 bod">



            <div class="blog_recentpost section">

                <!-- Latest Recipes -->
                <div class="blog_recentpost-heading">
                    <div class="card_head">
                        <h3>All Recepies</h3>
                        <hr class="card_head_ul">
                    </div>
                </div>

                <!-- All Recepies Block -->

                <?php 
                            $postquery = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'order' => 'ASC'
                            );
                            
                            $datapq = new wp_query($postquery);

                            while($datapq->have_posts()){
                                $datapq->the_post();

                                $imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                
                        ?>

                <div class="row mb4">

                    <div class="col-lg-5 col-md-5 col-sm-4 col-5 pxy2">
                        <a href="">
                            <img src="<?php echo $imgpath[0]; ?>" alt="" class="w-100 mb-3">
                        </a>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-8 col-7 pxy1">
                        <a href=" <?php echo get_permalink(); ?>">
                            <h3 class="mb2"><?php echo the_title(); ?></h3>
                        </a>

                        <div class="mes_tag cw m-0">
                            <?php echo the_category(); ?>
                        </div>

                        <p class="stag m3 mhide">By <a href="" class="nodeco"> Shambhavi Singh</a>
                        </p>

                        <a href="<?php echo get_permalink(); ?>" class="nodeco"> <button> Read more..</button></a>
                    </div>
                </div>

                <?php } ?>
                <!-- End All Recepies Block -->
                <!-- End Latest Recipes -->



            </div>


        </div>
        <!-- End Main Content -->


         <!-- Sidebar -->
         <div class="col-md-3 bod">
            <div class="spacer"></div>
            <div class="spacer"></div>

            <?php dynamic_sidebar('sidebar'); ?>

  
            <!-- Ad Place -->

            <!-- ./ End Ad Place -->

            <!-- New Recipes -->
            <div class="spacer"></div>
            <h4 class="bold5">Popular Recipes</h4>
            <div class="spacer"></div>

            <?php 
                            $postquery = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 5,
                                'order' => 'ASC'
                            );
                            
                            $datapr = new wp_query($postquery);

                            while($datapr->have_posts()){
                                $datapr->the_post();

                                $imgpathpr = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                
                        ?>

            <a href="<?php echo get_permalink(); ?>" class="nodeco">
                <div class="row">
                    <div class="col-4">
                        <img src="<?php echo $imgpathpr[0]; ?>" alt="" class="w-100 sideimg lshd">
                    </div>
                    <div class="col-8">
                        <p class="sidelink"> <?php echo the_title(); ?> </p>
                    </div>
                </div>
            </a>
            <!-- <a href="" class="nodeco">
                <div class="row">
                    <div class="col-4">
                        <img src="../images/uploads/demo3img2.jpg" alt="" class="w-100 sideimg">
                    </div>
                    <div class="col-8">
                        <p class="sidelink"> South Indian Uthpam Rasam | Hydrabadi Style </p>
                    </div>
                </div>
            </a>
            <a href="" class="nodeco">
                <div class="row">
                    <div class="col-4">
                        <img src="../images/uploads/demoimg1.jpg" alt="" class="w-100 sideimg">
                    </div>
                    <div class="col-8">
                        <p class="sidelink"> Allo Bukhara Egg recipes | Hydrabadi Style </p>
                    </div>
                </div>
            </a> -->

            <?php  } ?>


            <!-- ./newrecipes -->

            <!-- <div class="spacer"></div>

            <h4 class="">Recipes Categories</h4>
            <ul class="lstn">
                <a href="">
                    <li>Breakfast</li>
                </a>
                <a href="">
                    <li>Dinner</li>
                </a>
                <li>Lunch</li>
                <li>Sweets</li>
                <li>Deserts</li>
                <li>Dals</li>
                <li>Chickens</li>
                <li>Chickens</li>
            </ul> -->


        </div>
        <!-- End Sidebar -->
    </div>


</div>



</main>


<?php  get_footer('footer'); ?>