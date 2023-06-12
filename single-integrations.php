<?php get_header();  ?>
  <main>
    <section class="facebook_area section_padding">
      <?php while(have_posts()) : the_post();  ?>
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center">
                      <div class="features_text">
                        <div class="social_img d-flex align-items-center justify-content-center">
                            <div class="social social-bg1" style="background:<?php the_field('icon_bg');?> ">
                                <a href="#"><i class="<?php the_field('icon');  ?>"></i></a>
                            </div>
                            <div class="social_text">
                                <h2><?php the_field('title');  ?></h2>
                            </div>
                        </div>
                         
                        <p><?php the_field('short_description');  ?></p>
                      </div>
                    </div>
                </div> 
            </div>

            <div class="row facebook_padding">
                <div class="col-12 d-flex justify-content-center">
                    <div class="facebook_about">
                        <div class="facebook_heading">
                            <h2><?php the_field('content_title');  ?></h2>
                            <?php the_field('content');  ?>
                        </div>
                       
                        <div class="facebook_button"> 
                            <a href="<?php the_field('connect_button_url');  ?>"><?php the_field('connect_button');  ?></a>
                        </div>
                    </div>
                </div>
            </div>
             
               
            </div>
        </div>
        <?php endwhile;  ?>
    </section>
  </main>
<?php get_footer();  ?>