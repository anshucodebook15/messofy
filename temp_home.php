<?php 
//Template Name: messhome
get_header('header') ?>
<?php the_post() ?>

<!-- Index Page ************* -->

<main class="main w-100">

    <div class="spacer"></div>
    <div class="container">

        <div class="row jcsa">
            <!-- Main Content -->
            <div class="col-md-8 bod">

                <div class="blog_recentpost section">

                    <!--Latest Recipes -->
                    <div class="blog_recentpost-heading">
                        <div class="card_head">
                            <div class="row">
                                <h3>Latest Recipes</h3>
                               
                            </div>
                            <hr class="card_head_ul">
                        </div>
                    </div>
                   
                    <div class="row">

                      <!-- Latest Posts -->
                        <?php 
                            $postquery = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'orderby'   => array(
                                    'date' =>'DESC',
                                   )
                               
                            );
                            
                            $datapq = new wp_query($postquery);

                            while($datapq->have_posts()){
                                $datapq->the_post();

                                $imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                
                        ?>

                            <div class="col-md-4 col-6 pxy1">
                                <div class="lsdh2 txtc">
                                
                                        <div class="rcard_img rl">
                                                <a href="<?php echo get_permalink(); ?>" class=" nodeco">
                                                    <img src="<?php echo $imgpath[0]; ?>" alt="" class="w-100 mb-1">
                                                </a>
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



                    <!-- Best Indian Deserts Recipes -->
                    <div class="blog_recentpost-heading">
                        <div class="card_head">
                            <h3>Best Breakfast Recipes</h3>
                            <hr class="card_head_ul">
                        </div>
                    </div>

                    <div class="row">

                     <?php 
                    
                        $postquery = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'tax_query' => array([
                                'taxonomy' => 'category',
                                'field' => 'term_id',
                                'terms' => 2
                            ])
                            );
                        
                        $datapq = new wp_query($postquery);

                        while($datapq->have_posts()){
                            $datapq->the_post();
                        
                            $imgpath2 = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

                     ?>

                        <!-- <div class="col-md-4 col-6 pxy1">
                            <div class="lsdh2 txtc">
                                
                                <a href="<?php echo get_permalink(); ?>" class=" nodeco">
                                    <div class="rcard_img rl">
                                        <img src="<?php echo $imgpath2[0] ?>" alt="" class="w-100 mb-3">
                                        <div class="rcard_tag">
                                            <span class="mtag">Deserts</span>
                                        </div>
                                    </div>
                                    <p class="rcard_expert"> <strong> <?php echo the_title(); ?></strong>
                                    </p>
                                </a>
                            </div>
                        </div> -->




                        <div class="col-md-4 col-6 pxy1">
                                <div class="lsdh2 txtc">
                                
                                        <div class="rcard_img rl">
                                                <a href="<?php echo get_permalink(); ?>" class=" nodeco">
                                                    <img src="<?php echo $imgpath2[0]; ?>" alt="" class="w-100 mb-1">
                                                </a>
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
                    <!-- End Best Indian Deserts -->



                    <!-- Best Indian Deserts Recipes -->
                    <div class="blog_recentpost-heading">
                        <div class="card_head">
                            <h3>Biryanies</h3>
                            <hr class="card_head_ul">
                        </div>
                    </div>

                    <div class="row">

                        <!-- Taxomony Related to categories Logic -->

                        <?php $cat_all = get_terms(['taxonomy' => 'category']);
                        
                        echo '<pre>';
                        print_r($cat_all);
                        echo '</pre>';

                        // Bring Biryani Category Posts
                        $biryani_posts = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'tax_query' => array([
                                'taxonomy' => 'category',
                                'field' => 'term_id',
                                'terms' => 8
                            ])
                            );


                        $all_cat_data = new wp_query($biryani_posts);

                        // echo '<pre>';
                        // print_r($all_cat_data);
                        // echo '</pre>'

                
                        while($all_cat_data->have_posts()){

                            $all_cat_data->the_post();

                            $imgpath3 = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

                        ?>

                        <div class="col-md-4 col-6 pxy1">
                                <div class="lsdh2 txtc">
                                
                                        <div class="rcard_img rl">
                                                <a href="<?php echo get_permalink(); ?>" class=" nodeco">
                                                    <img src="<?php echo $imgpath3[0]; ?>" alt="" class="w-100 mb-1">
                                                </a>
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
  


               
               
                        
                        <div class="col-md-4 col-6 pxy1">
                            <div class="lsdh2 txtc">
                                <a href="" class=" nodeco">
                                    <div class="rcard_img rl">
                                        <img src="../images/uploads/demoimg1.jpg" alt="" class="w-100 mb-3">
                                        <div class="rcard_tag">
                                            <span class="mtag">Category</span>
                                        </div>
                                    </div>
                                    <p class="rcard_expert"> <strong> Panner Do pyaja</strong>
                                    </p>
                                </a>
                            </div>
                        </div>
                        
                        
                    </div>
                    <!-- End Best Indian Deserts -->

            
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





<!-- end Index Page **************** -->


<?php get_footer('footer'); ?>