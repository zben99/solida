<?php
$solida_option = get_option( 'solida_option' );
$sticky = !empty($solida_option['off_sticky']) ? $solida_option['off_sticky'] : ''; 
$sticky_menu = ($sticky == 1) ? ' tentaz-menu-sticky-here stuck' : '';

// Header Options here
require get_parent_theme_file_path('inc/header/header-all.php');
//off convas here
get_template_part('inc/header/canvas-menu');
?> 

<header id="tentaz-header" class="tentaz-header-two <?php echo esc_attr($main_menu_icon);?>">
    <?php 
      //include sticky search here
      get_template_part('inc/header/search');
    ?>
    <div class="header-inner-wrap <?php echo esc_attr($sticky_menu);?>">
        <!-- Toolbar Start -->
        <?php       
           get_template_part('inc/header/top-head/top-head','two');
        ?>
        <!-- Toolbar End -->
        
        <?php
            $menu_bg_color = !empty($menu_bg) ? 'style=background:'.$menu_bg.'' : '';
        ?>
        <div class="menu-area menu_type_<?php echo esc_attr($main_menu_type);?>" <?php echo wp_kses($menu_bg_color, 'solida');?>>
            <div class="<?php echo esc_attr($header_width);?>">
                <div class="tentaz-cols-wrap-wrap">
                    <div class="tentaz-cols-wrap header-logo">
                        <?php get_template_part('inc/header/logo');  ?>
                    </div>                  
                    <ul class="tentaz-contact-info">                       
                        <?php if(!empty($solida_option['top-email'])) { ?>
                        <li class="tentaz-contact-email">
                            <i class="ri-mail-send-line"></i>
                            <?php if(!empty($solida_option['top-email-pre'])) { ?> 
                                <strong> <?php echo esc_html($solida_option['top-email-pre'])?></strong>
                            <?php } ?>                 
                            <a href="mailto:<?php echo esc_attr($solida_option['top-email'])?>"><?php echo esc_html($solida_option['top-email'])?></a>                
                        </li>
                        <?php } ?>

                 
                        <?php
                      if(!empty($solida_option['tentaz_address'])){
                        $tentaz_address = $solida_option['tentaz_address']; ?>
                        <li class="tentaz-address">                            
                            <i class="ri-home-3-line"></i>
                        <?php if(!empty($solida_option['top-address-pre'])) { ?> 
                            <strong> <?php echo esc_html($solida_option['top-address-pre'])?></strong>
                        <?php } ?>
                            <?php echo wp_kses_post($tentaz_address); ?> 
                        </li>   
                        <?php } ?> 

                        <?php
                            if(!empty($solida_option['tentaz_phone'])){ ?>
                                <li class="tentaz-phone">
                                <?php if(!empty($solida_option['top-phone-pre'])) { ?> 
                                    <strong> <?php echo esc_html($solida_option['top-phone-pre'])?></strong>
                                <?php } ?>
                                <a href="tel:<?php echo esc_attr(str_replace(" ","",($solida_option['tentaz_phone'])))?>"> <?php echo esc_html($solida_option['tentaz_phone']); ?></a> 
                            </li>
                        <?php } ?>                    
                  </ul>

                    <div class="tentaz-cols-wrap tentaz-header-quote">    
                        

                        <?php 
                     
                        if($tentaz_top_search != 'hide'){
                            if(!empty($solida_option['tentaz_search'])): ?>
                                <div class="sidebarmenu-search-here">
                                    <div class="sidebarmenu-search-here">
                                        <div class="sticky_search"> 
                                            <i class="ri-search-line"></i> 
                                        </div>
                                    </div>
                                </div>                        
                            <?php endif; 
                        }
                        
                        if($tentaz_offcanvas != 'hide'):
                        if(!empty($solida_option['off_canvas_op']) || ($tentaz_offcanvas == 'show') ): ?>
                            <div class="tentaz-sidebarmenu-area">
                                <?php if(!empty($solida_option['off_canvas_op']) || ($tentaz_offcanvas == 'show') ){
                                        $off = $solida_option['off_canvas_op'];
                                        if( ($off == 1) || ($tentaz_offcanvas == 'show') ){
                                   ?>
                                    <ul class="tentaz_offcanvas_icon">
                                        <li class="tentaz-nav-link">
                                            <span class="nav-menu-link menu-button">
                                                <i class="ri-menu-add-fill"></i>               
                                            </span>
                                        </li>
                                    </ul>
                                    <?php } 
                                } ?> 
                            </div>
                        <?php endif; endif; ?>
                    
                        <div class="tentaz-sidebarmenu-area tentaz-mobile-hamburger">                                    
                            <ul class="tentaz_offcanvas_icon">
                                <li class="tentaz-nav-link">
                                    <span class="nav-menu-link menu-button">
                                        <i class="ri-menu-add-fill"></i>               
                                    </span>
                                </li>
                            </ul>                                       
                        </div>        
                    </div>
                </div>                
            </div> 

            <div class="tentaz-cols-wrap tentaz-responsive-menu"> 
                <div class="<?php echo esc_attr($header_width);?> container-inner-add"> 
                <?php             
                    require get_parent_theme_file_path('inc/header/menu.php'); 
                ?>
                <div class="tentaz-cols-wrap tentaz-header-quote">    

                    <?php 
                 
                    if($tentaz_top_search != 'hide'){
                        if(!empty($solida_option['tentaz_search'])): ?>
                            <div class="sidebarmenu-search-here">
                                <div class="sidebarmenu-search-here">
                                    <div class="sticky_search"> 
                                        <i class="ri-search-line"></i> 
                                    </div>
                                </div>
                            </div>                        
                        <?php endif; 
                    }
                    
                    if($tentaz_offcanvas != 'hide'):
                    if(!empty($solida_option['off_canvas_op']) || ($tentaz_offcanvas == 'show') ): ?>
                        <div class="tentaz-sidebarmenu-area">
                            <?php if(!empty($solida_option['off_canvas_op']) || ($tentaz_offcanvas == 'show') ){
                                    $off = $solida_option['off_canvas_op'];
                                    if( ($off == 1) || ($tentaz_offcanvas == 'show') ){
                               ?>
                                <ul class="tentaz_offcanvas_icon">
                                    <li class="tentaz-nav-link">
                                        <span class="nav-menu-link menu-button">
                                            <i class="ri-menu-add-fill"></i>               
                                        </span>
                                    </li>
                                </ul>
                                <?php } 
                            } ?> 
                        </div>
                    <?php endif; endif; ?>

            
                            
                </div>
            </div>
            </div>
        </div>
    </div>
   <?php 
    get_template_part( 'inc/breadcrumbs' );
  ?>
</header>