<?php
$solida_option = get_option( 'solida_option' );
$sticky = !empty($solida_option['off_sticky']) ? $solida_option['off_sticky'] : ''; 
$sticky_menu = ($sticky == 1) ? ' tentaz-menu-sticky-here stuck' : '';
// Header Options here
require get_parent_theme_file_path('inc/header/header-all.php');
//off convas here
get_template_part('inc/header/canvas-menu');
?> 


<header id="tentaz-header" class="tentaz-header-one <?php echo esc_attr($main_menu_icon);?>">
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
                    <div class="tentaz-cols-wrap tentaz-responsive-menu">  
                        <?php             
                            require get_parent_theme_file_path('inc/header/menu.php'); 
                        ?>
                    </div>
                    <div class="tentaz-cols-wrap tentaz-header-quote">  
                        <?php
                            if(!empty($solida_option['tentaz_phone'])){ ?>
                                <div class="tentaz-phone">

                                <a href="tel:<?php echo esc_attr(str_replace(" ","",($solida_option['tentaz_phone'])))?>"> 
                                    <i class="ri-phone-line"></i> <span><?php  echo esc_html($solida_option['tentaz_phone_pre']); ?></span> <?php echo esc_html($solida_option['tentaz_phone']); ?></a> 
                            </div>
                        <?php } ?>                           
                        <?php 
                        if($tentaz_show_quote != 'hide'){
                            if(!empty($solida_option['tentaz_contact_btn']) || ($tentaz_show_quote == 'show') ){ ?>
                            <?php $contact_link = !empty($solida_option['contact_link']) ? 'target="_blank"' : '';
                                 ?>
                                <div class="tentaz-quote"><a href="<?php echo esc_url($solida_option['contact_link']); ?>" <?php echo wp_kses_post($contact_link);?> class="contact-button"><?php  echo esc_html($solida_option['tentaz_contact_btn']); ?></a></div>
                        <?php } } ?>    
                    </div>
                <?php
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
                                        <i class="ri-menu-3-line"></i>              
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
                                <i class="ri-menu-3-line"></i>              
                            </span>
                        </li>
                    </ul>                                       
                </div>

                </div>

            </div> 
        </div>
    </div>
   <?php 
    get_template_part( 'inc/breadcrumbs' );
  ?>
</header>