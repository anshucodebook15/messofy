<?php get_header('header') ?>

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
                        <?php// echo the_title(); ?>
                        <?php $vale = get_the_category();

                        // echo '<pre>';
                        // print_r($vale);
                        // echo '</pre>';
                        
                        ?>
                        <h3><?php echo $vale[0]->name; ?></h3>
                        <hr class="card_head_ul">
                    </div>
                </div>

                <div class="row">

                    <?php 
                            // $postquery = array(
                            //     'post_type' => 'post',
                            //     'post_status' => 'publish',
                            //     'order' => 'ASC'
                            // );
                            
                            // $datapq = new wp_query($postquery);

                            while(have_posts()){
                                the_post();
                                $imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                
                        ?>

                            <div class="col-md-4 col-6 pxy1">
                                <div class="lsdh2 txtc">
                                
                                        <div class="rcard_img rl">
                                                <a href="<?php echo get_permalink(); ?>" class=" nodeco">
                                                    <img src="<?php echo $imgpath[0]; ?>" alt="" class="w-100 mb-1">
                                                </a>
                                                <!-- <div class="rcard_tag">
                                                <?php echo the_category(); ?>
                                                </div> -->
                                        </div>

                                        <div class="rcard_cat">
                                            <?php echo the_category(); ?>
                                        </div>
                                        <div class="expert">
                                            <a href="<?php echo get_permalink(); ?>" class=" nodeco">
                                                <p class="rcard_expert"> <strong> <?php echo the_title() ?></strong></p>
                                            </a>
                                        </div>
                                    
                                </div>
                            </div>

                        <?php } ?>
                   
                    
                    <div class="spacer"></div>
                </div>
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

            <?php  } ?>


        </div>
        <!-- End Sidebar -->
    </div>


</div>

</main>



<?php  get_footer('footer'); ?>