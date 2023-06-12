<?php 
// Template Name: Careers Template
get_header();
?>
  <main>
     <section class="careers_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center about_features">
                      <div class="features_text" >
                        <h2>Careers</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene.</p>
                        <a href="#jobs" class="btn-2">Browse Open Positions</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="careers-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/careers/2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="careers-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/careers/1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
     </section>


     
    <!-- platform area strat -->
     <section class="careers-icon section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center  ">
                        <div class="features_text trusted_box" >
                          <p class="section_btn">Values</p>
                          <h2> Values that define us</h2>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6  ">
                    <div class="social_icon">
                        <div class="social_img  ">
                            <div class="social social-bg1">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/careers/1.svg" alt="">
                            </div>
                            <div class="social_text">
                                <h3>Patients come first</h3>
                                
                            </div>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. has roots in a piece.</p>
                         
                    </div>
                </div>
                <div class="col-lg-4 col-md-6   ">
                    <div class="social_icon">
                        <div class="social_img  ">
                            <div class="social social-bg2">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/careers/2.svg" alt="">
                            </div>
                            <div class="social_text">
                                <h3>Competitive salary </h3>
                                
                            </div>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. has roots in a piece.</p>
                         
                    </div>
                </div>
                <div class="col-lg-4 col-md-6    ">
                    <div class="social_icon">
                        <div class="social_img  ">
                            <div class="social social-bg3">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/careers/3.svg" alt="">
                            </div>
                            <div class="social_text">
                                <h3>Career growth </h3>
                                 
                            </div>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. has roots in a piece.</p>
                         
                    </div>
                </div>
                <div class="col-lg-4 col-md-6   ">
                    <div class="social_icon">
                        <div class="social_img ">
                            <div class="social social-bg4">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/careers/4.svg" alt="">
                            </div>
                            <div class="social_text">
                                <h3>Holidays & Parental </h3>
                                
                            </div>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. has roots in a piece.</p>
                         
                    </div>
                </div>
                <div class="col-lg-4 col-md-6    ">
                    <div class="social_icon">
                        <div class="social_img ">
                            <div class="social social-bg5">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/careers/5.svg" alt="">
                            </div>
                            <div class="social_text">
                                <h3>Flexible hours </h3>
                                 
                            </div>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. has roots in a piece.</p>
                         
                    </div>
                </div>
                <div class="col-lg-4 col-md-6    ">
                    <div class="social_icon">
                        <div class="social_img  ">
                            <div class="social social-bg6">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/careers/6.svg" alt="">
                            </div>
                            <div class="social_text">
                                <h3>Medical insurance </h3>
                              
                            </div>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. has roots in a piece.</p>
                         
                    </div>
                </div>
               
            </div>
        </div>
     </section>
    
     <section class="current-job join_area section_padding" id="jobs">
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="features-heading d-flex justify-content-center text-center  ">
                    <div class="features_text trusted_box" >  
                      <h2>Current job open positions</h2>
                    </div>
                  </div>
              </div>    
            </div>
            <div class="row">
              <?php 
                $jobs = new WP_Query(array(
                    'post_type' => 'careers',
                    'posts_per_page' => 3
                ));
                while($jobs->have_posts()) : $jobs->the_post();
                ?>
              <div class="col-md-6">
                <div class="web-desgn">
                <h3><?php the_field('job_title');  ?></h3>
                  <ul class="d-flex align-items-center">
                    <li><a href="#"><?php the_field('job_location');  ?> |</a></li>
                    <li><a href="#" class="web-link"><?php the_field('job_type');  ?></a></li>
                  </ul>
                  <p><?php the_field('short_description');  ?></p>
                  <a href="<?php the_permalink();  ?>" class="btn-2">Apply Now</a>
                </div>
              </div>
              <?php endwhile; wp_reset_postdata();  ?>
            </div>
        </div>

     </section>
     
     

  </main>
<?php get_footer();  ?>