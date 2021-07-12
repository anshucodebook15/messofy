<?php get_header('header');
the_post(); 
?>

<main class="main w-100">

<div class="spacer"></div>

<div class="container">

    <div class="row jcsa">
        <!-- Main Content -->
        <div class="col-md-7 bod">

            <div class="blog_titlehead">

                <div class="spacer"></div>

                <?php $testcat = get_the_category(); ?>
                <!-- BreadCrumb -->
                <p class="mtag diml"> <a href="<?php echo site_url(); ?>">Home</a><i class="fas fa-angle-double-right px1"></i> Recipes <i
                        class="fas fa-angle-double-right px1"></i> <?php echo $testcat[0]->name ?> </p>
                <!-- ./Breadcrumb -->
                               

                <!-- H1 Title -->
                <h1 class="bold8"><?php echo the_title(); ?></h1>
                <!-- ./H1 Title -->


                <!-- <?php //echo get_the_author(); ?> -->

                <!-- Auther And Date -->
                <div class="blog_auther">
                    <p class="mtag diml">By <i><?php the_author_posts_link(); ?></i><span> &nbsp; &nbsp;
                            Created on : <i><?php echo get_the_date(); ?></i></span></p>
                </div>


                <!-- ./Auther and Date -->

                <!-- Share Links -->

                <div class="blog_share mb5">
                    <a href="" class="nodeco"> <i class="fab fa-facebook xlicon px1"></i></a>
                    <a href="" class="nodeco"> <i class="fab fa-whatsapp xlicon px1"></i></a>
                    <a href="" class="nodeco"><i class="fab fa-twitter-square xlicon px1"></i></a>
                    <a href="" class="nodeco"><i class="fab fa-pinterest xlicon px1"></i></a>
                    <a href="" class="nodeco"> <i class="fab fa-instagram-square xlicon px1"></i></a>
                </div>

                <!-- ./ end Share Links -->

                <!-- Feature Image -->
                <div class="blog_fimg">
                <?php $imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
                    <img src="<?php echo $imgpath[0]; ?>" alt="" class="w-100">
                </div>
                <!-- ./ End Feature Image -->

            </div>

            <div class="blog_content">
                <!-- Blog Content -->
               <?php echo the_content(); ?>
                <!-- End Blog Content -->

                <!-- Tags -->
                <div class="flex flex_wrp">

                <?php        
                $tags = get_the_tags(); 

                // echo "<pre>";
                // print_r($tags);
                // echo "</pre>";

                if(isset($tags)){
                    foreach($tags as $tag){
                ?>

                <div class="mes_tag">
                    <p class="p-0 m-0"><?php echo $tag->name;  ?></p>            
                </div>
                        

                <?php  } } else { ?>

                    <div></div>
                <?php } ?>

                </div>

                <!-- Tags End -->


            </div>



            <div class="blog_recentpost section">

                <!-- Recent Recipes -->
                <div class="blog_recentpost-heading">
                    <div class="card_head">
                        <h3>Related Recipes</h3>
                        <hr class="card_head_ul">
                    </div>
                </div>

               

                <div class="row">
                    <?php 
                    
                    $related_query = new WP_Query(array(
                        'post_type' => 'post',
                        'category__in' => wp_get_post_categories(get_the_ID()),
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                    ));

                    while($related_query->have_posts()){
                        $related_query->the_post();

                        $rel_imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                
                    ?>

                        <div class="col-md-4 col-6 pxy1">
                            <div class="lsdh2 txtc">
                               
                                    <div class="rcard_img rl">
                                            <a href="<?php echo get_permalink(); ?>" class=" nodeco">
                                                <img src="<?php echo $rel_imgpath[0]; ?>" alt="" class="w-100 mb-3">
                                            </a>
                                            <div class="rcard_tag">
                                               <?php echo the_category(); ?>
                                            </div>
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

            <!-- Search Tag -->
            <h4 class="">Search Recipes</h4>
            <input type="text" class="instyle" placeholder="Best Of Panner">
            <!-- End ./search Tag -->

            <div class="spacer"></div>
            <!-- Ad Place -->

            <!-- ./ End Ad Place -->

            <!-- New Recipes -->
            <h4 class="">Popular Recipes</h4>

            <a href="" class="nodeco">
                <div class="row">
                    <div class="col-4">
                        <img src="../images/uploads/demo3img2.jpg" alt="" class="w-100 sideimg">
                    </div>
                    <div class="col-8">
                        <p class="sidelink"> Ratri Atta with Rosume | Hydrabadi Style </p>
                    </div>
                </div>
            </a>
            <a href="" class="nodeco">
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
            </a>


            <!-- ./newrecipes -->

            <div class="spacer"></div>

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
            </ul>


        </div>
        <!-- End Sidebar -->
    </div>


</div>



</main>




<?php  get_footer('footer'); 

// echo "<pre>";
// print_r($imgpath);
// echo "</pre>";