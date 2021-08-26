  <!-- Footer Section -->
  
  <?php $img = get_header_image(); ?>
    <?php $img ?>
  
  <div class="spacer"></div>

  <footer class="footer_1 p3">
      <div class="container">

          <!-- Footer View -->
          <div class="row jcc">
              <div class="col-md-10">
                  <div class="row jcsb">
                      <div class="col-md-6 pxy2 bod">
                      <a href="<?php echo site_url() ?>" class="nodeco"><img src="<?php echo $img ?>" alt="" class="w-100 logo m-0 p2">
                    </a>
                          <p class="p1 mtag">Eat Healthy with our best food recipes, drinks, desert bevrages and all,
                              Messofy is here to server you.
                          </p>
                          <div class="flex">
                              <a href=""> <img src="/images/icons/fb_icon.svg" alt="" class="icon_s"></a>
                              <a href=""> <img src="/images/icons/insta_icon.svg" alt="" class="icon_s"></a>
                              <a href=""> <img src="/images/icons/li_icon.svg" alt="" class="icon_s"></a>
                              <a href=""> <img src="/images/icons/yt_icon.svg" alt="" class="icon_s"></a>
                          </div>
                      </div>
                      <div class="col-md-3 col-6 pxy2 bod">
                          <h4 class="p1 ltag">Quick Links</h4>
                          <ul class="lstn p-0 m-0">
                              <li class=""> <a href="/" class="nodeco footer_1--links mtag">Home</a>
                              <li class=""> <a href="https://www.messofy.com/recipes/" class="nodeco footer_1--links mtag">Recipes</a>
                              <li class=""> <a href="https://www.messofy.com/about-us/" class="nodeco footer_1--links mtag">About</a>
                              <li class=""> <a href="https://www.messofy.com/contact-us/" class="nodeco footer_1--links mtag">Contact</a>

                          </ul>
                      </div>
                      <div class="col-md-3 col-6 pxy2 bod">
                          <h4 class="p1 ltag">Legal</h4>
                          <ul class="lstn p-0 m-0">
                              <li class=""> <a href="https://www.messofy.com/privacy-policy/" class="nodeco footer_1--links mtag">Privacy Policy</a>
                              <li class=""> <a href="https://www.messofy.com/terms-and-conditions/" class="nodeco footer_1--links mtag">Terms and Condition</a>
                              <!-- <li class=""> <a href="" class="nodeco footer_1--links mtag">Disclaimer</a> -->
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Footer View -->



      </div>
  </footer>
  <!-- Footer Section -->




  <!-- Boot Strap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <!-- End Bootstarp CDN -->

  <!-- Jquey CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- End Jquery CDN -->

  <!-- Slick-Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- End Slick Crousal -->


  <!-- Main Script Tag -->
  <script>

        $(".nav_hb").click(function () {
            $(".mob_menu").toggle('fast', 'linear');
        });




      $('.logo_slider').slick({

          slidesToShow: 4,
          slidesToScroll: 1,
          dots: true,
          arrows: true,
          autoplay: true,
          autoplaySpeed: 2000,
          responsive: [{
              breakpoint: 768,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
              }
          }]
      });





  </script>
  <!-- Main Script Tag -->


  </body>

  </html>