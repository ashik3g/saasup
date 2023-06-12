<?php 
// Template Name: Pricing Template
get_header();
?>
  <main>
     <section class="pricing_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center pricing_features">
                      <div class="features_text" >
                        <h2><?php the_field('page_title');  ?></h2>
                        <p><?php the_field('page_description');  ?></p> 
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                $packages = new WP_Query(array(
                  'post_type' => 'pricing',
                  'order' => 'ASC'
                ));
                while($packages->have_posts()) : $packages->the_post();
                ?>
                <div class="col-md-4">
                  <div class="basic"  >
                    <div class="basic_heading d-flex justify-content-between align-items-center">
                    <h2><?php the_field('package_name');  ?></h2>
                    <p class="section_btn"><?php the_field('package_badge');  ?></p>
                    </div>
                    <div class="basic_month text-center">
                    <h2><?php the_field('package_price');  ?><span>/<?php the_field('package_price_time');  ?></span></h2>
                    <a href="<?php the_field('yearly_billed_url');  ?>" class="section_btn">
                    <?php the_field('yearly_billed');  ?></a>
                    </div>
                    <div class="basic_text text-center">
                      <ul>
                        <?php 
                        if(have_rows('package_items')) : 
                          while(have_rows('package_items')) : the_row();
                        ?>
                          <li><?php  the_sub_field('item_name'); ?></li>
                        <?php  endwhile;endif; ?>
                      </ul>
                       
                      <a href="<?php the_permalink();  ?>" class="btn-1"><?php the_field('button_text');  ?></a>
                    </div>
                     
                  </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
     </section>


     <section class="pricing-table section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-text text-center">
                        <h2><?php the_field('compare_title');  ?></h2>
                    </div>
                </div>
            </div>
            <div class="row  ">
                <div class="col-12">
                  <div class="table33">
                    <table>
                      <tbody>
                        <tr class="tby">
                          <?php 
                          if(have_rows('compare_table_head')) : 
                            while(have_rows('compare_table_head')) : the_row();
                          ?> 
                          <th class="text-center">
                              <h3><?php the_sub_field('head_title');  ?></h3> 
                              <h4><?php the_sub_field('head_sub_title');  ?></h4>
                          </th> 
                          <?php endwhile;endif;  ?>
                      </tr>
                      </tbody>
                      <?php if(have_rows('compare_table_content')) : 
                      while(have_rows('compare_table_content'))  : the_row();  
                      ?>
                      <tr>
                        <td class="clr bulu"><?php the_sub_field('feature_name');  ?></td>
                        <td class="clr"> </td>
                        <td class="clr"> </td>
                        <td class="clr"> </td>
                      </tr>
                        <?php while(have_rows('feature_item')) : the_row();  ?>
                        <tr>
                          <td><?php the_sub_field('feature_item_name');  ?></td>
                          <?php while(have_rows('feature_item_status')) : the_row();  ?>
                            <?php 
                              $status = get_sub_field('status'); 
                              if($status == 'Active') :
                            ?>
                              <td class="text-center chack">
                                <i class="fa-regular fa-circle-check"></i>
                              </td>
                            <?php elseif($status == 'Button') :  ?>
                              <td class="clr text-center"><a href="<?php the_sub_field('button_url');?>" class="btn-22"><?php the_sub_field('button_text');?></a> </td>
                            <?php else:  ?>
                              <td class="text-center clr">
                                <i class="fa-regular fa-circle-xmark"></i>
                              </td>
                            <?php endif;  ?>
                           
                          <?php endwhile;  ?>
                        </tr>
                        <?php endwhile;  ?>
                        <?php endwhile; endif;  ?> 
                    </table>  
                  </div>
                   <!-- On tables -->
                    
                </div>
            </div>
        </div>
     </section>

 

      

     
    <!-- platform area strat -->

    
    
   
     
     

  </main>
<?php get_footer();  ?>