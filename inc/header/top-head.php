<?php
/* Top Header part for grassy template
*/
$solida_option = get_option( 'solida_option' );
?>
<?php if(!empty($solida_option['show-top'])){ 
  if(is_page()){
     $tentaz_top_bar = get_post_meta($post->ID, 'top_bar', true);
     if($tentaz_top_bar == 'Show' || $tentaz_top_bar == ''){
     ?> 
    <div class="toolbar-area-here">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-7 col-xs-12">
            <div class="toolbar-contact">
              <ul>
                <?php if(!empty($solida_option['welcome-text'])) { ?>
                <li> <i class="fa fa-handshake-o"></i> <?php echo esc_html($solida_option['welcome-text']); ?> </li>
                <?php } ?>
                <?php if(!empty($solida_option['top-email'])) { ?>
                <li> <i class="fa fa-envelope-o"></i><a href="mailto:<?php echo esc_attr($solida_option['top-email'])?>"><?php echo esc_html($solida_option['top-email'])?></a> </li>
                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-5 col-xs-12">
            <div class="toolbar-sl-share">
              <ul>
                <?php
                if(!empty($solida_option['show-social'])){
                  $top_social = $solida_option['show-social']; 
              
                    if($top_social == '1'){              
                      if(!empty($solida_option['facebook'])) { ?>
                      <li> <a href="<?php echo esc_url($solida_option['facebook']);?>" target="_blank"><i class="fa fa-facebook"></i></a> </li>
                      <?php } ?>
                      <?php if(!empty($solida_option['twitter'])) { ?>
                      <li> <a href="<?php echo esc_url($solida_option['twitter']);?> " target="_blank"><i class="fa fa-twitter"></i></a> </li>
                      <?php } ?>
                      <?php if(!empty($solida_option['rss'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['rss']);?> " target="_blank"><i class="fa fa-rss"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($solida_option['pinterest'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['pinterest']);?> " target="_blank"><i class="fa fa-pinterest-p"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($solida_option['linkedin'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['linkedin']);?> " target="_blank"><i class="fa fa-linkedin"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($solida_option['instagram'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['instagram']);?> " target="_blank"><i class="fa fa-instagram"></i></a> </li>
                      <?php } ?>
                      <?php if(!empty($solida_option['vimeo'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['vimeo']);?> " target="_blank"><i class="fa fa-vimeo"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($solida_option['tumblr'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['tumblr']);?> " target="_blank"><i class="fa fa-tumblr"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($solida_option['youtube'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['youtube']);?> " target="_blank"><i class="fa fa-youtube"></i></a> </li>
                      <?php } 
                      }
                  }
                 ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
  }
 }
 else{
  ?>
  <div class="toolbar-area-here">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-7 col-xs-12">
            <div class="toolbar-contact">
              <ul>
                <?php if(!empty($solida_option['welcome-text'])) { ?>
                <li> <i class="fa fa-handshake-o"></i> <?php echo esc_html($solida_option['welcome-text']); ?> </li>
                <?php } ?>                
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-5 col-xs-12">
            <div class="toolbar-sl-share">
              <ul>
                <?php
                if(!empty($solida_option['show-social'])){
                  $top_social = $solida_option['show-social']; 
              
                    if($top_social == '1'){              
                      if(!empty($solida_option['facebook'])) { ?>
                      <li> <a href="<?php echo esc_url($solida_option['facebook']);?>" target="_blank"><i class="fa fa-facebook"></i></a> </li>
                      <?php } ?>
                      <?php if(!empty($solida_option['twitter'])) { ?>
                      <li> <a href="<?php echo esc_url($solida_option['twitter']);?> " target="_blank"><i class="fa fa-twitter"></i></a> </li>
                      <?php } ?>
                      <?php if(!empty($solida_option['rss'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['rss']);?> " target="_blank"><i class="fa fa-rss"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($solida_option['pinterest'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['pinterest']);?> " target="_blank"><i class="fa fa-pinterest-p"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($solida_option['linkedin'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['linkedin']);?> " target="_blank"><i class="fa fa-linkedin"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($solida_option['instagram'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['instagram']);?> " target="_blank"><i class="fa fa-instagram"></i></a> </li>
                      <?php } ?>
                      <?php if(!empty($solida_option['vimeo'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['vimeo']);?> " target="_blank"><i class="fa fa-vimeo"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($solida_option['tumblr'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['tumblr']);?> " target="_blank"><i class="fa fa-tumblr"></i></a> </li>
                      <?php } ?>
                      <?php if (!empty($solida_option['youtube'])) { ?>
                      <li> <a href="<?php  echo esc_url($solida_option['youtube']);?> " target="_blank"><i class="fa fa-youtube"></i></a> </li>
                      <?php } 
                      }
                  }
                 ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
 }
} ?>
