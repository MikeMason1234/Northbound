<?php

$HeroImage = (get_field('hero_image') != '' ? "background:url('".get_field('hero_image')."');" : '');
$CTAcontent = get_field('cta_content');
$bgColor = (get_field('bg_color') != '' ? '"background-color:'.get_field('bg_color').';' : '');
$bgRepeat = (get_field('bg_repeat') == 1 ? 'repeat;' : 'no-repeat;');
$bgPositionX = get_field('bg_position_x');
$bgPositionY = get_field('bg_position_y');

        if(is_page(20280) && ($HeroImage == '')){
?>
          <video class="home-video" playsinline autoplay muted loop>
            <source src="http://localhost:3000/wp-content/uploads/2017/01/Home-Page-Hero-Video-ver1.mp4" type="video/mp4">
          </video>
                <section id="cta-content">
                    <div class="container">
                        <div class="row">
                          <div class="col-xs-12">
                          <?php echo $CTAcontent; ?>
                          </div>
                        </div>
                    </div><!--end container-->
                    </section><!--end cta-content-->
<?php
        }else{
?>
                  <section id="cta-header" 
                  <?php
                  // If hero image is not empty, echo $HeroImage, $bgRepeat, $bgColor
                  // Else echo background color
                    if(!empty($HeroImage)){
                      echo 'style="'.$HeroImage.$bgRepeat.'background-position:'.$bgPositionX. ' ' .$bgPositionY.';background-attachment:fixed;background-size:cover;">';
                    
                    }else{
                      echo $bgColor.'">';
                    }
              ?>
                  <section id="cta-content">
                    <div class="container">
                        <div class="row">
                          <div class="col-xs-12">
                          <?php echo $CTAcontent; ?>
                          </div>
                        </div>
                    </div><!--end container-->
                    </section><!--end cta-content-->
                  </section><!--end cta-header-->
                  </section>
<?php
          }
 // dynamic_sidebar('sidebar-primary');
?>
</div>
<!--</div>-->

