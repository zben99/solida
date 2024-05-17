<?php
/**
 * @author  Tentaz
 * @since   1.0
 * @version 1.0 
 */
?>
     
</div><!-- .tentaz-main-contain-hereer -->
<?php
$solida_option = get_option( 'solida_option' );
$hide_footer ='';
$hide_footer =  get_post_meta(get_queried_object_id(), 'hide_footer', true);

if($hide_footer != 'yes'):
// Footer Options here
require get_parent_theme_file_path('inc/footer/footer-all.php');

if ( class_exists( 'WooCommerce' ) && is_shop() || class_exists( 'WooCommerce' ) && is_product_tag()  || class_exists( 'WooCommerce' ) && is_product_category()  ) {
   $solida_shop_id    = get_option( 'woocommerce_shop_page_id' ); 
   $header_width_meta = get_post_meta($solida_shop_id, 'footer_width_custom', true);
} elseif (is_home() && !is_front_page() || is_home() && is_front_page()){
    $header_width_meta = get_post_meta(get_queried_object_id(), 'footer_width_custom', true);
}else{
    $header_width_meta = get_post_meta(get_queried_object_id(), 'footer_width_custom', true);
}  

if ($header_width_meta != ''){
    $header_width = ( $header_width_meta == 'full' ) ? 'container-fluid': 'container';
}else{
    $header_width = !empty($solida_option['header-grid2']) ? $solida_option['header-grid2'] : '' ;
    $header_width = ( $header_width == 'full' ) ? 'container-fluid': 'container';
}

if(!empty( $footer_bg_img)):?>
    <footer id="tentaz-footer-here" class="<?php echo esc_attr($footer_select);?> tentaz-footer-here" style="background-image: url('<?php echo esc_url($footer_bg_img); ?>'); background-position: <?php echo esc_attr($footer_bg_pos); ?>; <?php if (!empty($footer_bg)): ?> background-color: <?php echo esc_attr($footer_bg) ?> <?php endif; ?>">

<?php elseif(!empty( $footer_bg)):?>
    <footer id="tentaz-footer-here" class="<?php echo esc_attr($footer_select);?> tentaz-footer-here" style="background: <?php echo esc_attr($footer_bg);?>; background-position: <?php echo esc_attr($footer_bg_pos); ?>">

<?php elseif( !empty( $solida_option['footer_bg_image']['url'])):?>
    <footer id="tentaz-footer-here" class="<?php echo esc_attr($footer_select);?> tentaz-footer-here" style="background-image: url('<?php echo esc_url($solida_option['footer_bg_image']['url']);?>'); background-position: <?php echo esc_attr($footer_bg_pos); ?>">
    <?php else:?>
        <footer id="tentaz-footer-here" class="<?php echo esc_attr($footer_select);?> tentaz-footer-here">
<?php 
endif; 
    
if(!empty(is_active_sidebar('footer_cta'))):
    dynamic_sidebar('footer_cta');
endif;

get_template_part( 'inc/footer/footer','top' ); 
?>
<div class="footer-bottom" <?php if(!empty( $copyright_bg)): ?> style="background: <?php echo esc_attr($copyright_bg); ?> !important;" <?php elseif(!empty( $copy_trans)): ?> style="background: <?php echo esc_attr($copy_trans); ?> !important;" <?php endif; ?>>
    <div class="<?php echo esc_attr($header_width);?>">
        <div class="row">  
            <?php if(is_active_sidebar( 'copy_right'  )): ?>                      
                <div class="col-lg-4 col-sm-12 tentaz-copy-menu">
                    <div class="copyright" <?php if(!empty( $copy_space)): ?> style="padding: <?php echo esc_attr($copy_space); ?>" <?php endif; ?> >
                        <?php if(!empty($solida_option['copyright'])){?>
                        <p><?php echo wp_kses($solida_option['copyright'], 'solida'); ?></p>
                        <?php }
                         else{
                            ?>
                        <p><?php echo esc_html('&copy;')?> <?php echo date("Y");?>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> 
                        </p>
                        <?php
                         }   
                        ?>
                    </div>
                </div>  

                <div class="col-lg-4 col-sm-12">
                    <div class="copyright-widget copyright-widget-social" <?php if(!empty( $copy_space)): ?> style="padding: <?php echo esc_attr($copy_space); ?>" <?php endif; ?> >
                        <?php dynamic_sidebar( 'copy_social'); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <div class="copyright-widget" <?php if(!empty( $copy_space)): ?> style="padding: <?php echo esc_attr($copy_space); ?>" <?php endif; ?> >
                        <?php dynamic_sidebar( 'copy_right_menu'); ?>
                    </div>
                </div>
            <?php else:?>
                <div class="col-lg-12 col-sm-12">
                    <div class="copyright text-center" <?php if(!empty( $copy_space)): ?> style="padding: <?php echo esc_attr($copy_space); ?>" <?php endif; ?> >
                        <?php if(!empty($solida_option['copyright'])){?>
                        <p><?php echo wp_kses($solida_option['copyright'], 'solida'); ?></p>
                        <?php }
                         else{
                            ?>
                        <p><?php echo esc_html('&copy;')?> <?php echo date("Y");?>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> 
                        </p>
                        <?php
                         }   
                        ?>
                    </div>
                </div> 
            <?php endif ?>
        </div>
    </div>
</div>
</footer>
<?php endif; ?>
</div><!-- #page -->
<?php 
if(!empty($solida_option['show_top_bottom'])){

    $show_top_bottom_postition = !empty($solida_option['show_top_bottom_postition']) ? $solida_option['show_top_bottom_postition'] : 'right'
?>
 <!-- start scrollUp  -->
<div id="scrollUp" class="<?php echo esc_attr($show_top_bottom_postition);?>">
    <i class="ri-arrow-up-line"></i>
</div>   
<?php } 
 wp_footer(); ?>
  </body>
</html>