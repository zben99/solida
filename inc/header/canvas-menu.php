<?php 
$solida_option = get_option( 'solida_option' );
$tentaz_offcanvas = get_post_meta(get_the_ID(), 'show-off-canvas', true);
$logo_height = !empty($solida_option['logo-height']) ? 'style = "max-height: '.$solida_option['logo-height'].'"' : '';
    //off convas here
?>
    
<nav class="menu-wrap-offcanvas nav-container-here nav menu-offcanvas">       
<div class="inner-offcanva-wrap">
    <div class="tentaz-nav-link"> 
        <?php if(!empty($solida_option['Offcanvas_layout']) && $solida_option['Offcanvas_layout'] == 'style2'){ ?> 
            <a href='#' class="nav-menu-link close-button styles2" id="close-button">                                         
                <i class="ri-close-fill"></i>
            </a> 
        <?php } else { ?>  
        <a href='#' class="nav-menu-link close-button" id="close-button2">          
            <i class="ri-close-fill"></i>
        </a> 
        <?php } ?>
    </div> 
    <div class="tentaz_sidenav_wrap tentaz_offcanvas_icon">
            <div id="mobile_menu">
                <?php
                $menu_select = get_post_meta(get_queried_object_id(), 'menu_select', true);
                if($menu_select == 'single_menu'){
                    if ( has_nav_menu( 'menu-2' ) ) {
                        // User has assigned menu to this location;
                        // output it
                        ?>
                        <div class="widget widget_nav_menu mobile-menus">  
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-2',
                                    'menu_id'        => 'primary-menu-single',
                                    'walker'        => ''
                                ) );
                            ?>
                        </div>                        
                        <?php
                    }
                } else {
                
                    if ( has_nav_menu( 'menu-1' ) ) {
                        // User has assigned menu to this location;
                        // output it
                        ?>                                
                            <div class="widget widget_nav_menu mobile-menus">      
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu-single-one',
                                    ) );
                                ?>
                            </div>                                
                        <?php
                    }
                }
                ?>                    
            </div>
            <?php if(!empty( $solida_option['off_canvas_op'] ) || ($tentaz_offcanvas == 'show') ){ ?>   
            <div class="tentaz-offcanvas-contents"> 
                <?php dynamic_sidebar('sidebarcanvas-1');?>
            </div>     
            <?php } ?>    
    </div>
    </div>
</nav>