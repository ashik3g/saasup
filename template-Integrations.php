<?php 
$options = get_option('coderit');
// Template Name: Integrations Template
get_header(); ?>
  <main>
    <section class="featur_heading_area section_padding">
        <div class="container">
            <div class="row Integrations_bottom">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center">
                      <div class="features_text" >
                        <h2><?php  the_field('page_title'); ?></h2>
                        <p><?php  the_field('description'); ?></p>
                      </div>
                    </div>
                </div> 
            </div>
            <div class="row">
              <?php  
              $integrations  = new WP_Query(array(
                'post_type' => 'integrations',
                'post_per_page' => -1
              ));
              while($integrations->have_posts()) : $integrations->the_post();
              ?>
                <div class="col-lg-4 col-md-6">
                    <div class="social_icon">
                        <div class="social_img d-flex align-items-center">
                            <div class="social social-bg1" style="background:<?php the_field('icon_bg');?>">
                                <a href="#"><i class="<?php the_field('icon');?>"></i></a>
                            </div>
                            <div class="social_text">
                                <h3><?php the_field('title');  ?></h3>
                                <a href=""><?php the_field('type');  ?></a>
                            </div>
                        </div>
                        <p><?php the_field('short_description');  ?></p>
                        <a href="<?php the_permalink();?>" class="social-a">View Integration</a>
                    </div>
                </div>
              <?php endwhile;wp_reset_postdata();  ?>
               
            </div>
        </div>
    </section>


     <!--  trial_area section strat  -->
     <section class="trial_area">
      <div class="container">
        <div class="row trial_bg align-items-center">
          <div class="col-lg-6">
            <div class="trial_text">
              <h2><?php echo $options['trial-heading'];  ?></h2>
              <p><?php echo $options['trial-description'];  ?></p>
              <div class="subsribe-form" >
                <?php 
                $trial_form_shortcode = $options['form-shortcode'];
                if($trial_form_shortcode == ''):
                ?>
                <form action="#">
                  <input type="email" placeholder="your mail here...">
                  <input type="submit" class="btn-1" value="Get strat">
                </form>
                <?php else :  ?>
                  <?php echo do_shortcode($trial_form_shortcode);?>
                <?php endif; ?>

              </div>
            </div>

          </div>
          <div class="col-lg-6" >
            <img src="<?php echo $options['trial-right-image']['url'];  ?>" loading="lazy" alt="trial-img">
          </div>
          
        </div>
      </div>
     </section>
     <!--  trial_area section end  --> 
  </main>
<?php get_footer(); ?>