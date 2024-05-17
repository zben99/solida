<?php
/* Top Header part for solida Theme
*/
$solida_option = get_option( 'solida_option' );

// Header Options here
require get_parent_theme_file_path('inc/header/header-all.php');

if($tentaz_top_bar != 'hide'){
    if(!empty($solida_option['show-top']) || ($tentaz_top_bar == 'show')){

       $show_topbar_mobile =" ";
       if ( empty($solida_option ['mobile-show-top']) ){
          $show_topbar_mobile= 'mobile_topbar_hide';
       }
       if( !empty($solida_option['top-email']) || !empty($solida_option['message-txt']) || !empty($solida_option['phone']) || !empty($solida_option['show-social'])){?> 

          <div class="toolbar-area-here <?php echo esc_attr($show_topbar_mobile); ?>">
            <div class="<?php echo esc_attr($header_width);?>">
              <div class="row">
                <div class="col-lg-6">
                    <div class="tentaz-contact">
                          <ul class="tentaz-contact-info">  
                            <?php
                            if(!empty($solida_option['tentaz_address'])){
                              $tentaz_address = $solida_option['tentaz_address']; ?>
                              <li class="tentaz-address">                            
                                  <i class="ri-home-3-line"></i>                              
                                  <?php echo wp_kses_post($tentaz_address); ?> 
                              </li>   
                              <?php } ?>

                              <?php if(!empty($solida_option['top-email'])) { ?>
                                <li class="tentaz-contact-email">                                                
                                <a href="mailto:<?php echo esc_attr($solida_option['top-email'])?>"> 
                                    <i class="ri-mail-send-line"></i> 
                                    <?php echo esc_html($solida_option['top-email'])?>
                                </a>                
                              </li>
                              <?php } ?>                                                 
                        </ul>
                    </div>                    
                </div>
                <div class="col-lg-6">
                    <div class="tentaz-contact tentaz-contacts">
                        <ul class="tentaz-contact-info"> 
                            <?php if(!empty($solida_option['message-txt'])) { ?>
                            <li class="tentaz-contact-message">
                                <i class="ri-history-fill"></i> 
                                <?php $temessage = $solida_option['message-txt']; ?>
                                <?php echo wp_kses_post($temessage); ?>                
                            </li>
                            <?php }  

                            if(!empty($solida_option['facebook'])) { ?>
                            <li> <a href="<?php echo esc_url($solida_option['facebook']);?>" target="_blank"> <i class="ri-facebook-fill"></i> </a></li>
                            <?php } ?>
                            <?php if(!empty($solida_option['twitter'])) { ?>
                            <li> <a href="<?php echo esc_url($solida_option['twitter']);?> " target="_blank"> <i class="ri-twitter-fill"></i> </a> </li>
                            <?php } ?>
                            <?php if(!empty($solida_option['rss'])) { ?>
                            <li> <a href="<?php  echo esc_url($solida_option['rss']);?> " target="_blank"> <i class="ri-rss-fill"></i> </a> </li>
                            <?php } ?>
                            <?php if (!empty($solida_option['pinterest'])) { ?>
                            <li> <a href="<?php  echo esc_url($solida_option['pinterest']);?> " target="_blank"> <i class="ri-pinterest-line"></i> </a> </li>
                            <?php } ?>
                            <?php if (!empty($solida_option['linkedin'])) { ?>
                            <li> <a href="<?php  echo esc_url($solida_option['linkedin']);?> " target="_blank"><i class="ri-linkedin-fill"></i> </a> </li>
                            <?php } ?>
                            <?php if (!empty($solida_option['instagram'])) { ?>
                            <li> <a href="<?php  echo esc_url($solida_option['instagram']);?> " target="_blank"> <i class="ri-instagram-line"></i></a> </li>
                            <?php } ?>
                            <?php if(!empty($solida_option['vimeo'])) { ?>
                            <li> <a href="<?php  echo esc_url($solida_option['vimeo']);?> " target="_blank"> <i class="ri-vimeo-fill"></i></a> </li>
                            <?php } ?>
                            <?php if (!empty($solida_option['tumblr'])) { ?>
                            <li> <a href="<?php  echo esc_url($solida_option['tumblr']);?> " target="_blank"><i class="ri-tumblr-fill"></i></a> </li>
                            <?php } ?>
                            <?php if (!empty($solida_option['youtube'])) { ?>
                            <li> <a href="<?php  echo esc_url($solida_option['youtube']);?> " target="_blank"> <i class="ri-youtube-fill"></i> </a> </li>
                            <?php } ?> 

                            <?php if (!empty($solida_option['whatsapp'])) { ?>
                            <li> <a href="<?php  echo esc_url($solida_option['whatsapp']);?>" target="_blank"> <i class="ri-whatsapp-line"></i> </a> </li>
                            <?php } ?> 

                            <?php if (!empty($solida_option['telegram'])) { ?>
                            <li> <a href="<?php  echo esc_url($solida_option['telegram']);?>" target="_blank"> <i class="ri-telegram-fill"></i> </a> </li>
                            <?php } ?> 

                            <?php if (!empty($solida_option['soundcloud'])) { ?>
                            <li> <a href="<?php  echo esc_url($solida_option['soundcloud']);?>" target="_blank"> <i class="ri-sun-cloudy-line"></i> </a> </li>
                            <?php } ?>                                            
                        </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
      <?php 
    }
  }
}