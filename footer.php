<?php  
$options = get_option('coderit');
?>
<footer>
    <!-- place footer here -->
    <section class="footer_area">
      <div class="container">
        <div class="row footer-padding" >
          <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1 "> 
             <div class="footer_text-1"> 
              <img src="<?php echo $options['footer-logo']['url'];?>" alt="footer-logo">
              <p><?php echo $options['footer-description'];?></p>
              <?php 
              $footer_email_phones = $options['footer-email-phone']; 
              foreach($footer_email_phones as $footer_item) :
              ?>
              <div class="footer_email01 d-flex">
                <a href="#"><i class="<?php echo $footer_item['footer-item-icon'];?>"></i></a>
                <ul class="footer_email">
                  <?php foreach($footer_item['footer-item-value-repeater'] as $footer_item_rep) :  ?>
                  <li><a href="<?php 
                    if(is_numeric($footer_item_rep['item-value'])){
                      echo "tel:". $footer_item_rep['item-value'];
                    }
                    else{
                      echo "mailto:". $footer_item_rep['item-value'];
                    }
                    ?>"   ><?php echo $footer_item_rep['item-value'];  ?></a></li> 
                  <?php endforeach;  ?> 
                </ul>
              </div>
              <?php  endforeach; ?>
              
             </div>
          </div>
          
          <div class="col-xl-2 col-lg-6 order-lg-3 order-xl-2 ">
            <div class="pages">
              <?php  dynamic_sidebar('footer-sidebar-1'); ?>
            </div>
          </div>

          <div class="col-xl-2 col-lg-6 order-lg-4 order-xl-3 ">
            <div class="pages">
            <?php  dynamic_sidebar('footer-sidebar-2'); ?>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 order-lg-2 order-xl-4 ">
            <div class="downlod_area">
              <?php  dynamic_sidebar('footer-sidebar-3'); ?>
            </div>
          </div>
          
        </div>
        <div class="row" >
          <div class="col-12">
            <div class="copyright d-flex justify-content-between">
              <p><?php echo $options['footer-copyright'];  ?></p>
              <div class="footer-icon">
                <ul class="d-flex">
                  <?php 
                  $footer_socials = $options['footer-socials']; 
                  foreach( $footer_socials as $social) :
                  ?>
                  <li><a href="<?php echo $social['social_url'];?>"><i class="<?php echo $social['social_icon'];?>"></i></a></li>
                  <?php endforeach;  ?>
                </ul>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>

  <?php wp_footer();  ?>
</body>
</html>