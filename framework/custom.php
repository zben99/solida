<?php
/*
dynamic css file. please don't edit it. it's update automatically when settins changed
*/
add_action('wp_head', 'solida_custom_colors', 160);
function solida_custom_colors() { 
$solida_option = get_option( 'solida_option' );	
/***styling options
------------------*/
	if(!empty($solida_option['body_bg_color']))
	{
	$body_bg         = $solida_option['body_bg_color'];
	$body_color       = $solida_option['body_text_color'];	
	$site_color       = $solida_option['primary_color'];
	$secondary_color  = $solida_option['secondary_color'];	
	$footer_bgcolor   = $solida_option['footer_bg_color'];
	
	if(!empty($solida_option['menu_text_hover_bg'])){		
		$menu_text_hover_bg      = $solida_option['menu_text_hover_bg'];
	}
	if(!empty($solida_option['menu_text_active_bg'])){		
		$menu_text_active_bg     = $solida_option['menu_text_active_bg'];
	}
	
	if(!empty($solida_option['drop_text_color'])){		
		$dropdown_text_color     = $solida_option['drop_text_color'];
	}
	
	if(!empty($solida_option['drop_text_hover_color'])){		
		$drop_text_hover_color   = $solida_option['drop_text_hover_color'];
	}			
	
	if(!empty($solida_option['drop_text_hoverbg_color'])){		
		$drop_text_hoverbg_color = $solida_option['drop_text_hoverbg_color'];
	}
	
	if(!empty($solida_option['drop_down_bg_color'])){		
		$drop_down_bg_color = $solida_option['drop_down_bg_color'];
	}	
	
	$tentaz_top_style = get_post_meta(get_the_ID(), 'topbar-color', true);
    if($tentaz_top_style =='toplight' || $tentaz_top_style==''){
		$toolbar_bg    = $solida_option['toolbar_bg_color'];
		$toolbar_text  = $solida_option['toolbar_text_color'];
		$toolbar_link  = $solida_option['toolbar_link_color'];
		$toolbar_hover = $solida_option['toolbar_link_hover_color'];
	} else{
		$toolbar_bg    = $solida_option['toolbar_bg_color2'];
		$toolbar_text  = $solida_option['toolbar_text_color2'];
		$toolbar_link  = $solida_option['toolbar_link_color2'];
		$toolbar_hover = $solida_option['toolbar_link_hover_color2'];
    }

	//typography extract for body
	
	if(!empty($solida_option['opt-typography-body']['color']))
	{
		$body_typography_color = $solida_option['opt-typography-body']['color'];
	}
	if(!empty($solida_option['opt-typography-body']['line-height']))
	{
		$body_typography_lineheight = $solida_option['opt-typography-body']['line-height'];
	}
		
	$body_typography_font      = $solida_option['opt-typography-body']['font-family'];
	$body_typography_font_size = $solida_option['opt-typography-body']['font-size'];

	//typography extract for menu
	$menu_typography_color       = $solida_option['opt-typography-menu']['color'];	
	$menu_typography_weight      = $solida_option['opt-typography-menu']['font-weight'];	
	$menu_typography_font_family = $solida_option['opt-typography-menu']['font-family'];
	$menu_typography_font_fsize  = $solida_option['opt-typography-menu']['font-size'];
		
	if(!empty($solida_option['opt-typography-menu']['line-height']))
	{
		$menu_typography_line_height=$solida_option['opt-typography-menu']['line-height'];
	}
	
	//typography extract for heading
	
	$h1_typography_color=$solida_option['opt-typography-h1']['color'];		
	if(!empty($solida_option['opt-typography-h1']['font-weight']))
	{
		$h1_typography_weight=$solida_option['opt-typography-h1']['font-weight'];
	}
		
	$h1_typography_font_family=$solida_option['opt-typography-h1']['font-family'];
	$h1_typography_font_fsize=$solida_option['opt-typography-h1']['font-size'];	
	if(!empty($solida_option['opt-typography-h1']['line-height']))
	{
		$h1_typography_line_height=$solida_option['opt-typography-h1']['line-height'];
	}
	
	$h2_typography_color=$solida_option['opt-typography-h2']['color'];	

	$h2_typography_font_fsize=$solida_option['opt-typography-h2']['font-size'];	
	if(!empty($solida_option['opt-typography-h2']['font-weight']))
	{
		$h2_typography_font_weight=$solida_option['opt-typography-h2']['font-weight'];
	}	
	$h2_typography_font_family=$solida_option['opt-typography-h2']['font-family'];
	$h2_typography_font_fsize=$solida_option['opt-typography-h2']['font-size'];	
	if(!empty($solida_option['opt-typography-h2']['line-height']))
	{
		$h2_typography_line_height=$solida_option['opt-typography-h2']['line-height'];
	}
	
	$h3_typography_color=$solida_option['opt-typography-h3']['color'];	
	if(!empty($solida_option['opt-typography-h3']['font-weight']))
	{
		$h3_typography_font_weightt=$solida_option['opt-typography-h3']['font-weight'];
	}	
	$h3_typography_font_family = $solida_option['opt-typography-h3']['font-family'];
	$h3_typography_font_fsize  = $solida_option['opt-typography-h3']['font-size'];	
	if(!empty($solida_option['opt-typography-h3']['line-height']))
	{
		$h3_typography_line_height = $solida_option['opt-typography-h3']['line-height'];
	}

	$h4_typography_color = $solida_option['opt-typography-h4']['color'];	
	if(!empty($solida_option['opt-typography-h4']['font-weight']))
	{
		$h4_typography_font_weight = $solida_option['opt-typography-h4']['font-weight'];
	}	
	$h4_typography_font_family = $solida_option['opt-typography-h4']['font-family'];
	$h4_typography_font_fsize  = $solida_option['opt-typography-h4']['font-size'];	
	if(!empty($solida_option['opt-typography-h4']['line-height']))
	{
		$h4_typography_line_height = $solida_option['opt-typography-h4']['line-height'];
	}
	
	$h5_typography_color = $solida_option['opt-typography-h5']['color'];	
	if(!empty($solida_option['opt-typography-h5']['font-weight']))
	{
		$h5_typography_font_weight = $solida_option['opt-typography-h5']['font-weight'];
	}	
	$h5_typography_font_family = $solida_option['opt-typography-h5']['font-family'];
	$h5_typography_font_fsize  = $solida_option['opt-typography-h5']['font-size'];	
	if(!empty($solida_option['opt-typography-h5']['line-height']))
	{
		$h5_typography_line_height = $solida_option['opt-typography-h5']['line-height'];
	}
	
	$h6_typography_color = $solida_option['opt-typography-6']['color'];	
	if(!empty($solida_option['opt-typography-6']['font-weight']))
	{
		$h6_typography_font_weight = $solida_option['opt-typography-6']['font-weight'];
	}
	$h6_typography_font_family = $solida_option['opt-typography-6']['font-family'];
	$h6_typography_font_fsize  = $solida_option['opt-typography-6']['font-size'];	
	if(!empty($solida_option['opt-typography-6']['line-height']))
	{
		$h6_typography_line_height = $solida_option['opt-typography-6']['line-height'];
	}
	
?>

<!-- Typography -->
<?php if(!empty($body_color)){
	$solida_option = get_option( 'solida_option' );
	$hex = $site_color;
	list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
	$site_color_rgb = "$r, $g, $b";


	$hex2 = $secondary_color;
	list($r, $g, $b) = sscanf($hex2, "#%02x%02x%02x");
	$second_color_rgb = "$r, $g, $b";

	?>

	<style>
		<?php if(!empty($solida_option['copyright_bg']))
			{
				$copyright_bg = $solida_option['copyright_bg'];
			?>
			.footer-bottom{
				background:<?php echo esc_attr($copyright_bg); ?> !important;
			}
		<?php } ?>
		
		body{
			background:<?php echo esc_attr($body_bg); ?>;
			color:<?php echo esc_attr($body_color); ?> !important;
			font-family: <?php echo esc_attr($body_typography_font);?> !important;    
		    font-size: <?php echo esc_attr($body_typography_font_size);?> !important;
		}

		h1{
			color:<?php echo esc_attr($h1_typography_color);?>;
			font-family:<?php echo esc_attr($h1_typography_font_family);?>;
			font-size:<?php echo esc_attr($h1_typography_font_fsize);?>;
			<?php if(!empty($h1_typography_weight)){
			?>
			font-weight:<?php echo esc_attr($h1_typography_weight);?>;
			<?php }?>
			
			<?php if(!empty($h1_typography_line_height)){
			?>
				line-height:<?php echo esc_attr($h1_typography_line_height);?>;
			<?php } ?>		
		}

		h2{
			color:<?php echo esc_attr($h2_typography_color);?>; 
			font-family:<?php echo esc_attr($h2_typography_font_family);?>;
			font-size:<?php echo esc_attr($h2_typography_font_fsize);?>;
			<?php if(!empty($h2_typography_font_weight)){
			?>
			font-weight:<?php echo esc_attr($h2_typography_font_weight);?>;
			<?php }?>
			
			<?php if(!empty($h2_typography_line_height)){
			?>
				line-height:<?php echo esc_attr($h2_typography_line_height);?>
			<?php }?>
		}

		h3{
			color:<?php echo esc_attr($h3_typography_color);?> ;
			font-family:<?php echo esc_attr($h3_typography_font_family);?>;
			font-size:<?php echo esc_attr($h3_typography_font_fsize);?>;
			<?php if(!empty($h3_typography_font_weight)){
			?>
			font-weight:<?php echo esc_attr($h3_typography_font_weight);?>;
			<?php }?>
			
			<?php if(!empty($h3_typography_line_height)){
			?>
				line-height:<?php echo esc_attr($h3_typography_line_height);?>;
			<?php }?>
		}

		h4{
			color:<?php echo esc_attr($h4_typography_color);?>;
			font-family:<?php echo esc_attr($h4_typography_font_family);?>;
			font-size:<?php echo esc_attr($h4_typography_font_fsize);?>;
			<?php if(!empty($h4_typography_font_weight)){
			?>
			font-weight:<?php echo esc_attr($h4_typography_font_weight);?>;
			<?php }?>
			
			<?php if(!empty($h4_typography_line_height)){
			?>
				line-height:<?php echo esc_attr($h4_typography_line_height);?>;
			<?php }?>
			
		}

		h5{
			color:<?php echo esc_attr($h5_typography_color);?>;
			font-family:<?php echo esc_attr($h5_typography_font_family);?>;
			font-size:<?php echo esc_attr($h5_typography_font_fsize);?>;
			<?php if(!empty($h5_typography_font_weight)){
			?>
			font-weight:<?php echo esc_attr($h5_typography_font_weight);?>;
			<?php }?>
			
			<?php if(!empty($h5_typography_line_height)){
			?>
				line-height:<?php echo esc_attr($h5_typography_line_height);?>;
			<?php }?>
		}

		h6{
			color:<?php echo esc_attr($h6_typography_color);?> ;
			font-family:<?php echo esc_attr($h6_typography_font_family);?>;
			font-size:<?php echo esc_attr($h6_typography_font_fsize);?>;
			<?php if(!empty($h6_typography_font_weight)){
			?>
			font-weight:<?php echo esc_attr($h6_typography_font_weight);?>;
			<?php }?>
			
			<?php if(!empty($h6_typography_line_height)){
			?>
				line-height:<?php echo esc_attr($h6_typography_line_height);?>;
			<?php }?>
		}

		.menu-area .navbar ul li > a,
		.tentaz_sidenav_wrap .widget_nav_menu ul li a{
			font-weight:<?php echo esc_attr($menu_typography_weight); ?>;
			font-family:<?php echo esc_attr($menu_typography_font_family); ?>;
			font-size:<?php echo esc_attr($menu_typography_font_fsize); ?>;
		}

		<?php if(!empty($solida_option['toolbar_bg_color'])) : ?>
			#tentaz-header .toolbar-area-here,
			#tentaz-header.tentaz-header-two .toolbar-area-here{
			background:<?php echo esc_attr($solida_option['toolbar_bg_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['toolbar_text_color'])) : ?>
			#tentaz-header .toolbar-area-here{
			color:<?php echo esc_attr($solida_option['toolbar_text_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['toolbar_link_color'])) : ?>
			#tentaz-header .toolbar-area-here .toolbar-contact ul li a,
			#tentaz-header .toolbar-area-here .toolbar-sl-share ul li.opening a{
			color:<?php echo esc_attr($solida_option['toolbar_link_color']); ?> 
		}
		<?php endif; ?>	

		<?php if(!empty($solida_option['toolbar_link_hover_color'])) : ?>
			#tentaz-header .toolbar-area-here .toolbar-contact ul li a:hover,
			#tentaz-header .toolbar-area-here .toolbar-sl-share ul li.opening a:hover{
			color:<?php echo esc_attr($solida_option['toolbar_link_hover_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['transparent_toolbar_text_color'])) : ?>
			#tentaz-header.tentaz-header-two .toolbar-area-here .toolbar-contact ul li a,
			#tentaz-header.tentaz-header-two .toolbar-area-here .opening{
			color:<?php echo esc_attr($solida_option['transparent_toolbar_text_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['transparent_toolbar_link_hover_color'])) : ?>
			#tentaz-header.tentaz-header-two .toolbar-area-here .toolbar-contact ul li a:hover,
			#tentaz-header.tentaz-header-two .toolbar-area-here .toolbar-sl-share ul li.opening a:hover{
			color:<?php echo esc_attr($solida_option['transparent_toolbar_link_hover_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['toolbar_icn_color'])) : ?>
			#tentaz-header .toolbar-area-here .toolbar-contact ul li i{
			color:<?php echo esc_attr($solida_option['toolbar_icn_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['toolbar_soci_icn_color'])) : ?>
			#tentaz-header .toolbar-area-here .toolbar-sl-share ul li a i{
			color:<?php echo esc_attr($solida_option['toolbar_soci_icn_color']); ?> 
		}
		<?php endif; ?>	

		<?php if(!empty($solida_option['toolbar_text_size'])) : ?>
			#tentaz-header .toolbar-area-here, 
			#tentaz-header.tentaz-header-two .toolbar-area-here .opening,
			#tentaz-header .toolbar-area-here .toolbar-contact ul li a, 
			#tentaz-header .toolbar-area-here .toolbar-sl-share ul li.opening a{
			font-size:<?php echo esc_attr($solida_option['toolbar_text_size']); ?> 
		}
		<?php endif; ?>


		<?php if(!empty($solida_option['primary_color'])) : ?>
			.comment-respond .form-submit #submit,
			#scrollUp i,
			.tentaz-header-one .header-inner-wrap .tentaz-cols-wrap-wrap .tentaz-header-quote .tentaz-quote .contact-button,
			#tentaz-header:not(.tentaz-header-one) .tentaz-cols-wrap-wrap::before,
			.menu-area .tentaz-cols-wrap-wrap .tentaz-contact-info li.tentaz-phone,
			.bs-sidebar .widget_categories ul li:hover:after,
			.tentaz-blog-details .bs-info.tags a:hover,
			.bs-sidebar .tagcloud a:hover{
			background:<?php echo esc_attr($solida_option['primary_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['primary_color'])) : ?>
			.bs-sidebar .tagcloud a:hover,
			.tentaz-blog-details .bs-info.tags a:hover{
			border-color:<?php echo esc_attr($solida_option['primary_color']); ?> 
		}
		<?php endif; ?>


		<?php if(!empty($solida_option['primary_color'])) : ?>
			#tentaz-header:not(.tentaz-header-one) .toolbar-area-here .toolbar-contact ul li a:hover,
			.menu-area .tentaz-cols-wrap-wrap .tentaz-contact-info li strong{
			color:<?php echo esc_attr($solida_option['primary_color']); ?> 
		}
		<?php endif; ?>



		<?php if(!empty($solida_option['secondary_color'])) : ?>
			.comment-respond .form-submit #submit:hover{
			background:<?php echo esc_attr($solida_option['secondary_color']); ?> 
		}
		<?php endif; ?>

		

		<?php if(!empty($solida_option['breadcrumb_text_color'])) : ?>
			.tentaz-breadcrumbs .breadcrumbs-title span a span,
			.tentaz-breadcrumbs .page-title,
			.tentaz-breadcrumbs .breadcrumbs-title .current-item{
			color:<?php echo esc_attr($solida_option['breadcrumb_text_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['breadcrumb_seperator_color'])) : ?>
			.tentaz-breadcrumbs .breadcrumbs-title span a:before{
			background:<?php echo esc_attr($solida_option['breadcrumb_seperator_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['breadcrumb_title'])) : ?>
			.tentaz-breadcrumbs .page-title{
			font-size:<?php echo esc_attr($solida_option['breadcrumb_title']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['breadcrumb-align'])) : ?>
			.tentaz-breadcrumbs .breadcrumbs-inner{
			text-align:<?php echo esc_attr($solida_option['breadcrumb-align']); ?> 
		}
		<?php endif; ?>	


		<?php if(!empty($solida_option['breadcrumb_top_gap'])) : ?>
			.tentaz-breadcrumbs .breadcrumbs-inner{
				padding-top:<?php echo esc_attr($solida_option['breadcrumb_top_gap']); ?> 
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['breadcrumb_bottom_gap'])) : ?>
			.tentaz-breadcrumbs .breadcrumbs-inner{
				padding-bottom:<?php echo esc_attr($solida_option['breadcrumb_bottom_gap']); ?> 
			}
		<?php endif; ?>


		<?php if(!empty($solida_option['offcan_bgs_color'])) : ?>
			.menu-wrap-offcanvas,
			.tentaz-offcanvas{
			background:<?php echo esc_attr($solida_option['offcan_bgs_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['offcan_txt_color'])) : ?>
			.menu-wrap-offcanvas .inner-offcanva-wrap{
			color:<?php echo esc_attr($solida_option['offcan_txt_color']); ?> 
		}
		<?php endif; ?>		

		<?php if(!empty($solida_option['offcan_link_color'])) : ?>
			.tentaz_sidenav_wrap .fa-ul.tentaz-info li a{
			color:<?php echo esc_attr($solida_option['offcan_link_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['offcan_link_hover_color'])) : ?>
			.tentaz_sidenav_wrap .fa-ul.tentaz-info li a:hover{
			color:<?php echo esc_attr($solida_option['offcan_link_hover_color']); ?> 
		}
		<?php endif; ?>	

		<?php if(!empty($solida_option['offcan_icon_color'])) : ?>
			.tentaz_sidenav_wrap .fa-ul.tentaz-info li i{
			color:<?php echo esc_attr($solida_option['offcan_icon_color']); ?> 
		}
		<?php endif; ?>	

		<?php if(!empty($solida_option['offcanvas_closede_color'])) : ?>
			.menu-wrap-offcanvas .inner-offcanva-wrap .tentaz-nav-link .close-button{
			background:<?php echo esc_attr($solida_option['offcanvas_closede_color']); ?> 
		}
		<?php endif; ?>	

		<?php if(!empty($solida_option['body_bg_color'])) : ?>
			body{
			background:<?php echo esc_attr($solida_option['body_bg_color']); ?> 
		}
		<?php endif; ?>	

		<?php if(!empty($solida_option['blog_meta_color'])) : ?>
			.single-post .single-posts-meta li,
			.tentaz-blog-details .type-post .tag-line a{
			color:<?php echo esc_attr($solida_option['blog_meta_color']); ?> 
		}
		<?php endif; ?>	

		<?php if(!empty($solida_option['blog_bg_sidebar_color'])) : ?>
			.bs-sidebar .widget{
			background:<?php echo esc_attr($solida_option['blog_bg_sidebar_color']); ?> 
		}
		<?php endif; ?>

		<?php if(!empty($solida_option['blog_bg_sidebar_color'])) : ?>
			.bs-sidebar .widget{
			border-color:<?php echo esc_attr($solida_option['blog_bg_sidebar_color']); ?> 
		}
		<?php endif; ?>


		<?php if(!empty($solida_option['blog_bg_color'])) : ?>
			body.single-post, body.blog, body.archive, 
			body.single-services, body.single-mp-event,
			.tentaz-blog-details .type-post{
			background:<?php echo esc_attr($solida_option['blog_bg_color']); ?> 
		}
		<?php endif; ?>	

		<?php if(!empty($solida_option['offcan_social_icon_bg_color'])) : ?>
			.tentaz_sidenav_wrap .footer_social li a i{
			background:<?php echo esc_attr($solida_option['offcan_social_icon_bg_color']); ?> 
		}
		<?php endif; ?>


		<?php if(!empty($solida_option['offcan_social_icon__color'])) : ?>
			.tentaz_sidenav_wrap .footer_social li a i{
			color:<?php echo esc_attr($solida_option['offcan_social_icon__color']); ?> 
		}
		<?php endif; ?>	
		
		<?php if(!empty($solida_option['offcan_title_color'])) : ?>
			.tentaz_sidenav_wrap .fa-ul li em{
			color:<?php echo esc_attr($solida_option['offcan_title_color']); ?> 
		}
		<?php endif; ?>	

		<?php if(!empty($solida_option['offcanvas_icon_color'])) : ?>
			.menu-wrap-offcanvas .inner-offcanva-wrap .tentaz-nav-link .close-button{
			color:<?php echo esc_attr($solida_option['offcanvas_icon_color']); ?> 
		}
		<?php endif; ?>


		<?php if(!empty($solida_option['menu_area_bg_color'])) : ?>
			#tentaz-header .tentaz-menu-sticky-here .menu-area{
			background:<?php echo esc_attr($solida_option['menu_area_bg_color']); ?> 
		}
		<?php endif; ?>


		<?php if(!empty($solida_option['transparent_menu_text_color'])) : ?>		
			.tentaz-header-two .menu-area .navbar ul > li > a,
			.tentaz-phone a,
			.tentaz_offcanvas_icon .tentaz-nav-link .nav-menu-link i,
			.tentaz-phone i,
			#tentaz-header.tentaz-header-two .sticky_search i:before{
				color:<?php echo esc_attr($solida_option['transparent_menu_text_color']); ?>;
			}		
		<?php endif; ?>

		<?php if(!empty($solida_option['transparent_menu_text_color'])) : ?>		
			.tentaz-header-two .tentaz_offcanvas_icon .tentaz-nav-link .nav-menu-link span{
				background:<?php echo esc_attr($solida_option['transparent_menu_text_color']); ?>;
			}		
		<?php endif; ?>


		<?php if(!empty($solida_option['transparent_menu_hover_color'])) : ?>		
			.tentaz-header-two .tentaz_offcanvas_icon .tentaz-nav-link .nav-menu-link:hover span{
				background:<?php echo esc_attr($solida_option['transparent_menu_hover_color']); ?>;
			}		
		<?php endif; ?>

		<?php if(!empty($solida_option['transparent_menu_hover_color'])) : ?>		
			.tentaz-header-two .menu-area .navbar ul > li:hover > a,
			.tentaz-phone a:hover,
			.menu-area .navbar ul > li:hover a,
			.tentaz-header-one .header-inner-wrap .tentaz-cols-wrap-wrap .tentaz-header-quote .tentaz-phone a:hover,
			.tentaz_offcanvas_icon .tentaz-nav-link .nav-menu-link i:hover,		
			#tentaz-header.tentaz-header-two .sticky_search:hover i:before{
				color:<?php echo esc_attr($solida_option['transparent_menu_hover_color']); ?>;
			}		
		<?php endif; ?>

		<?php if(!empty($solida_option['transparent_menu_active_color'])) : ?>
			.tentaz-header-two .menu-area .navbar ul > li.current-menu-ancestor > a,
			.menu-area .navbar ul li.current-menu-ancestor a, .menu-area .navbar ul li.current_page_item a,		
			.tentaz-header-two .menu-area .navbar ul > li.current_page_item > a,		
			.tentaz-header-two .menu-area .navbar ul li ul.sub-menu li.current-menu-ancestor > a, 
			.tentaz-header-two .menu-area .navbar ul li ul.sub-menu li.current_page_item > a{
				color:<?php echo esc_attr($solida_option['transparent_menu_active_color']); ?>;
			}		
		<?php endif; ?>

		<?php if(!empty($solida_option['menu_item_gap'])) : ?>
			.menu-area .navbar ul > li{
				padding-left:<?php echo esc_attr($solida_option['menu_item_gap']); ?>;
				padding-right:<?php echo esc_attr($solida_option['menu_item_gap']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['menu_item_gap2'])) : ?>
			.menu-area .navbar ul > li{
				padding-top:<?php echo esc_attr($solida_option['menu_item_gap2']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['menu_item_gap3'])) : ?>
			.menu-area .navbar ul > li{
				padding-bottom:<?php echo esc_attr($solida_option['menu_item_gap3']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['menu_text_trasform'])) : ?>
			.menu-area .navbar ul > li > a{
				text-transform:uppercase;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['drop_down_bg_color'])) : ?>		
			.menu-area .navbar ul li .sub-menu{
				background:<?php echo esc_attr($solida_option['drop_down_bg_color']); ?>;
			}		
		<?php endif; ?>

		<?php if(!empty($solida_option['drop_text_color'])) : ?>		
			.menu-area .navbar ul li ul.sub-menu li a{
				color:<?php echo esc_attr($solida_option['drop_text_color']); ?>;
			}		
		<?php endif; ?>

		<?php if(!empty($solida_option['drop_text_hover_color'])) : ?>		
			.menu-area .navbar ul li ul.sub-menu li:hover > a{
				color:<?php echo esc_attr($solida_option['drop_text_hover_color']); ?>;
			}		
		<?php endif; ?>

		<?php if(!empty($solida_option['menu_text_trasform2'])) : ?>
			.menu-area .navbar ul.sub-menu  li  a{
				text-transform:uppercase !important;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['container_size'])) : ?>
			@media only screen and (min-width: 1300px) {
				.container{
					max-width:<?php echo esc_attr($solida_option['container_size']); ?>;
				}
			}
		<?php endif; ?>


		<?php if(!empty($solida_option['stiky_menu_areas_bg_color'])) : ?>
			#tentaz-header .tentaz-menu-sticky-here.sticky .menu-area{
				background:<?php echo esc_attr($solida_option['stiky_menu_areas_bg_color']); ?> !important; 
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['stikcy_menu_text_color'])) : ?>		
			.tentaz-menu-sticky-here.sticky .menu-area .navbar ul > li > a,
			.tentaz-menu-sticky-here.sticky .tentaz-phone a,
			.tentaz-menu-sticky-here.sticky .tentaz_offcanvas_icon .tentaz-nav-link .nav-menu-link i,
			.tentaz-menu-sticky-here.sticky .tentaz-phone i,
			#tentaz-header .tentaz-menu-sticky-here.sticky .sticky_search i:before{
				color:<?php echo esc_attr($solida_option['stikcy_menu_text_color']); ?>;
			}		
		<?php endif; ?>

		<?php if(!empty($solida_option['stikcy_menu_text_color'])) : ?>		
			.tentaz-menu-sticky-here.sticky .tentaz_offcanvas_icon .tentaz-nav-link .nav-menu-link span{
				background:<?php echo esc_attr($solida_option['stikcy_menu_text_color']); ?>;
			}		
		<?php endif; ?>


		<?php if(!empty($solida_option['sticky_menu_text_hover_color'])) : ?>		
			.tentaz-menu-sticky-here.sticky .tentaz_offcanvas_icon .tentaz-nav-link .nav-menu-link:hover span{
				background:<?php echo esc_attr($solida_option['sticky_menu_text_hover_color']); ?>;
			}		
		<?php endif; ?>


		<?php if(!empty($solida_option['sticky_menu_text_hover_color'])) : ?>		
			.tentaz-menu-sticky-here.sticky .menu-area .navbar ul > li:hover > a,
			.tentaz-menu-sticky-here.sticky .tentaz-phone a:hover,
			.tentaz-menu-sticky-here.sticky .tentaz_offcanvas_icon .tentaz-nav-link .nav-menu-link i:hover,
			#tentaz-header .tentaz-menu-sticky-here.sticky .sticky_search:hover i:before{
				color:<?php echo esc_attr($solida_option['sticky_menu_text_hover_color']); ?>;
			}		
		<?php endif; ?>



		<?php if(!empty($solida_option['stikcy_menu_text_active_color'])) : ?>		
			.tentaz-menu-sticky-here.sticky .menu-area .navbar ul > li.current-menu-item > a,
			.tentaz-menu-sticky-here.sticky .menu-area .navbar ul li ul.sub-menu li.current-menu-ancestor > a, 
			.tentaz-menu-sticky-here.sticky .menu-area .navbar ul li ul.sub-menu li.current_page_item > a{
				color:<?php echo esc_attr($solida_option['stikcy_menu_text_active_color']); ?>;
			}		
		<?php endif; ?>


		<?php if(!empty($solida_option['sticky_drop_down_bg_color'])) : ?>		
			.tentaz-menu-sticky-here.sticky .menu-area .navbar ul li .sub-menu{
				background:<?php echo esc_attr($solida_option['sticky_drop_down_bg_color']); ?>;
			}		
		<?php endif; ?>

		<?php if(!empty($solida_option['stikcy_drop_text_color'])) : ?>		
			.tentaz-menu-sticky-here.sticky .menu-area .navbar ul li ul.sub-menu li a{
				color:<?php echo esc_attr($solida_option['stikcy_drop_text_color']); ?>;
			}		
		<?php endif; ?>

		<?php if(!empty($solida_option['sticky_drop_text_hover_color'])) : ?>		
			.tentaz-menu-sticky-here.sticky .menu-area .navbar ul li ul.sub-menu li:hover > a{
				color:<?php echo esc_attr($solida_option['sticky_drop_text_hover_color']); ?>;
			}		
		<?php endif; ?>


		<?php if(!empty($solida_option['footer_bg_color'])) : ?>
			.tentaz-footer-here{
				background:<?php echo esc_attr($solida_option['footer_bg_color']); ?> !important;
			}
		<?php endif; ?>	

		<?php if(!empty($solida_option['foot_social_color'])) : ?>
			.tentaz-footer-here ul.footer_social li a{
				color:<?php echo esc_attr($solida_option['foot_social_color']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['foot_social_border_color'])) : ?>
			.tentaz-footer-here ul.footer_social li a{
				border-color:<?php echo esc_attr($solida_option['foot_social_border_color']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['foot_social_hover'])) : ?>
			.tentaz-footer-here ul.footer_social li a:hover{
				background:<?php echo esc_attr($solida_option['foot_social_hover']); ?> !important;
				border-color:<?php echo esc_attr($solida_option['foot_social_hover']); ?> !important;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['footer_text_size'])) : ?>
			.tentaz-footer-here, .tentaz-footer-here h3, .tentaz-footer-here a, 
			.tentaz-footer-here .fa-ul li a, 
			.tentaz-footer-here .recent-post-widget .show-featured .post-desc span,
			.tentaz-footer-here .widget.widget_nav_menu ul li a{
				font-size:<?php echo esc_attr($solida_option['footer_text_size']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['footer_h3_size'])) : ?>
			.tentaz-footer-here h3, .tentaz-footer-here .tentaz-footer-top-here h3.footer-title{
				font-size:<?php echo esc_attr($solida_option['footer_h3_size']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['footer_link_size'])) : ?>
			.tentaz-footer-here a{
				font-size:<?php echo esc_attr($solida_option['footer_link_size']); ?>;
			}
		<?php endif; ?>	

		<?php if(!empty($solida_option['footer_text_color'])) : ?>
			.tentaz-footer-here, .tentaz-footer-here .tentaz-footer-top-here h3.footer-title, .tentaz-footer-here a, .tentaz-footer-here .fa-ul li a,
			.tentaz-footer-here .widget.widget_nav_menu ul li a,
			.tentaz-footer-here .recent-post-widget .show-featured .post-desc span,
			.tentaz-footer-here .tentaz-footer-top-here input[type="email"]::placeholder
			{
				color:<?php echo esc_attr($solida_option['footer_text_color']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['footer_title_color'])) : ?>
			.tentaz-footer-here .tentaz-footer-top-here h3.footer-title
			{
				color:<?php echo esc_attr($solida_option['footer_title_color']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['footer_link_color'])) : ?>
			.tentaz-footer-here a:hover, .tentaz-footer-here .widget.widget_nav_menu ul li a:hover,
			.tentaz-footer-here .fa-ul li a:hover,
			.tentaz-footer-here .widget.widget_pages ul li a:hover, .tentaz-footer-here .widget.widget_recent_comments ul li:hover, .tentaz-footer-here .widget.widget_archive ul li a:hover, .tentaz-footer-here .widget.widget_categories ul li a:hover,
			.tentaz-footer-here .widget a:hover{
				color:<?php echo esc_attr($solida_option['footer_link_color']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['footer_input_bg_color'])) : ?>
			.tentaz-footer-here .tentaz-footer-top-here .mc4wp-form-fields input[type="email"]{
				background:<?php echo esc_attr($solida_option['footer_input_bg_color']); ?>
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['footer_button_bg_color'])) : ?>
			.tentaz-footer-here .tentaz-footer-top-here .mc4wp-form-fields .tentaz-subs input[type="submit"],
			.tentaz-footer-here .tentaz-footer-top-here .mc4wp-form-fields input[type="submit"]{
				background:<?php echo esc_attr($solida_option['footer_button_bg_color']); ?>
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['footer_button_bg_hover_color'])) : ?>
			.tentaz-footer-here .tentaz-footer-top-here .mc4wp-form-fields input[type="submit"]:hover{
				background:<?php echo esc_attr($solida_option['footer_button_bg_hover_color']); ?>;
			}
		<?php endif; ?>
		

		<?php if(!empty($solida_option['footer_button_text_color'])) : ?>
			.tentaz-footer-here .tentaz-footer-top-here .mc4wp-form-fields input[type="submit"]{
				color:<?php echo esc_attr($solida_option['footer_button_text_color']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['copyright_text_color'])) : ?>
			.footer-bottom .copyright p, 
			.footer-bottom .copyright p a, 
			.footer-bottom .copyright a{
				color:<?php echo sanitize_hex_color($solida_option['copyright_text_color']); ?>;
			}
		<?php endif; ?>


		<?php if(!empty($solida_option['breadcrumb_top_gap_mobile'])) : ?>
			@media only screen and (max-width: 991px) {
				<?php if(!empty($solida_option['breadcrumb_top_gap_mobile'])) : ?>
					.tentaz-breadcrumbs .breadcrumbs-inner{
					padding-top:<?php echo esc_attr($solida_option['breadcrumb_top_gap_mobile']); ?> 
				}
				<?php endif; ?>

				<?php if(!empty($solida_option['breadcrumb_bottom_gap_mobile'])) : ?>
					.tentaz-breadcrumbs .breadcrumbs-inner{
					padding-bottom:<?php echo esc_attr($solida_option['breadcrumb_bottom_gap_mobile']); ?> 
				}
				<?php endif; ?>
			}
		<?php endif; ?>


		<?php if(!empty($solida_option['preloader_color'])) : ?>
			#tentaz__circle_loader{
				border-top-color:<?php echo esc_attr($solida_option['preloader_color']);?>;
				border-right-color:<?php echo esc_attr($solida_option['preloader_color']);?>;
			}			
		<?php endif; ?>

		<?php if(!empty($solida_option['preloader_color_left'])) : ?>
			#tentaz__circle_loader{
				border-bottom-color:<?php echo esc_attr($solida_option['preloader_color_left']);?>;
				border-left-color:<?php echo esc_attr($solida_option['preloader_color_left']);?>;
			}			
		<?php endif; ?>

		

		<?php if(!empty($solida_option['menu_item_gap'])) : ?>
			.menu-area .navbar ul li{
				padding-left:<?php echo esc_attr($solida_option['menu_item_gap']); ?>;
				padding-right:<?php echo esc_attr($solida_option['menu_item_gap']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['menu_item_gap2'])) : ?>
			.menu-area .navbar ul > li,
			.menu-cart-area,
			#tentaz-header .tentaz-responsive-menu .sidebarmenu-search-here .sticky_search{
				padding-top:<?php echo esc_attr($solida_option['menu_item_gap2']); ?>;
			}
		<?php endif; ?>

		<?php if(!empty($solida_option['menu_item_gap3'])) : ?>
			.menu-area .navbar ul > li,
			.menu-cart-area,
			#tentaz-header .tentaz-responsive-menu .sidebarmenu-search-here .sticky_search{
				padding-bottom:<?php echo esc_attr($solida_option['menu_item_gap3']); ?>;
			}
		<?php endif; ?>
	</style>
<?php } ?>
<?php
	
	if ( class_exists( 'WooCommerce' ) && is_shop() || class_exists( 'WooCommerce' ) && is_product_tag()  || class_exists( 'WooCommerce' ) && is_product_category()  ) {

			$solida_shop_id        = get_option( 'woocommerce_shop_page_id' );			
			$padding_top           = get_post_meta($solida_shop_id, 'content_top', true);
			$padding_bottom        = get_post_meta($solida_shop_id, 'content_bottom', true);			
			$padding_top_footer    = get_post_meta($solida_shop_id, 'content_top_footer', true);
			$padding_bottom_footer = get_post_meta($solida_shop_id, 'content_bottom_footer', true);

  		if($padding_top != '' || $padding_bottom != '' || $padding_top_footer != '' || $padding_bottom_footer != ''){
	  	?>
	  	  <style>
	  	  	.tentaz-main-contain-here #content{
	  	  		<?php if(!empty($padding_top)): ?>padding-top:<?php echo esc_attr($padding_top); endif;?> !important;
	  	  		<?php if(!empty($padding_bottom)): ?>padding-bottom:<?php echo esc_attr($padding_bottom); endif;?> !important;
	  	  	}

	  	  	<?php if(!empty($padding_top_footer)): ?>
	  	  	#tentaz-footer-here{
	  	  		padding-top:<?php echo esc_attr($padding_top_footer);?> !important;	  	  		
	  	  	}
	  	  	<?php endif; ?>	  

	  	  	<?php if(!empty($padding_bottom_footer)): ?>	  	
	  	  	#tentaz-footer-here .tentaz-footer-top-here{	  	  		
	  	  		padding-bottom:<?php echo esc_attr($padding_bottom_footer);?> !important;
	  	  	}
	  	  	<?php endif; ?>

	  	  </style>	
	  	  <?php
	 	}
	}
	elseif(is_home() && !is_front_page() || is_home() && is_front_page()){
		$padding_top    = get_post_meta(get_queried_object_id(), 'content_top', true);
		$padding_bottom = get_post_meta(get_queried_object_id(), 'content_bottom', true);
		$padding_top_footer    = get_post_meta(get_queried_object_id(), 'content_top_footer', true);
		$padding_bottom_footer = get_post_meta(get_queried_object_id(), 'content_bottom_footer', true);

  		if($padding_top != '' || $padding_bottom != '' || $padding_top_footer != '' || $padding_bottom_footer != ''){
	  	?>
	  	  	<style>
	  	  		.tentaz-main-contain-here #content{
	  	  			<?php if(!empty($padding_top)): ?>padding-top:<?php echo esc_attr($padding_top); endif;?> !important;
	  	  			<?php if(!empty($padding_bottom)): ?>padding-bottom:<?php echo esc_attr($padding_bottom); endif;?> !important;
	  	  		}

	  	  		<?php if(!empty($padding_top_footer)): ?>
	  	  		#tentaz-footer-here{
	  	  			padding-top:<?php echo esc_attr($padding_top_footer);?> !important;	  	  		
	  	  		}
	  	  		<?php endif; ?>	  

	  	  		<?php if(!empty($padding_bottom_footer)): ?>	  	
	  	  		#tentaz-footer-here .tentaz-footer-top-here{	  	  		
	  	  			padding-bottom:<?php echo esc_attr($padding_bottom_footer);?> !important;
	  	  		}
	  	  		<?php endif; ?>

	  	  	</style>	
	  	<?php
	  }
  }
  	else{
		$padding_top    = get_post_meta(get_the_ID(), 'content_top', true);
		$padding_bottom = get_post_meta(get_the_ID(), 'content_bottom', true);
		$padding_top_footer    = get_post_meta(get_the_ID(), 'content_top_footer', true);
		$padding_bottom_footer = get_post_meta(get_the_ID(), 'content_bottom_footer', true);

  		if($padding_top != '' || $padding_bottom != '' || $padding_top_footer != '' || $padding_bottom_footer != ''){
	  	?>
	  	  <style>
	  	  	.tentaz-main-contain-here #content{
	  	  		<?php if(!empty($padding_top)): ?>padding-top:<?php echo esc_attr($padding_top); endif;?> !important;
	  	  		<?php if(!empty($padding_bottom)): ?>padding-bottom:<?php echo esc_attr($padding_bottom); endif;?> !important;
	  	  	}

	  	  	<?php if(!empty($padding_top_footer)): ?>
	  	  	#tentaz-footer-here{
	  	  		padding-top:<?php echo esc_attr($padding_top_footer);?> !important;	  	  		
	  	  	}
	  	  	<?php endif; ?>	  

	  	  	<?php if(!empty($padding_bottom_footer)): ?>	  	
	  	  	#tentaz-footer-here .tentaz-footer-top-here{	  	  		
	  	  		padding-bottom:<?php echo esc_attr($padding_bottom_footer);?> !important;
	  	  	}
	  	  	<?php endif; ?>

	  	  </style>	
	  	<?php
	  }
  	}

  	$quote_button_color           		    = get_post_meta(get_the_ID(), 'quote_button_color', true);
  	$quote_button_hover_color           	= get_post_meta(get_the_ID(), 'quote_button_hover_color', true);
  	$quote_button_bg_color           		= get_post_meta(get_the_ID(), 'quote_button_bg_color', true);
  	$quote_button_bg_hover_color           	= get_post_meta(get_the_ID(), 'quote_button_bg_hover_color', true);
  	$content_top           					= get_post_meta(get_the_ID(), 'content_top', true);
	$footer_links_colors   					= get_post_meta(get_the_ID(), 'footer_link_colorss', true);
	$primary_colors        					= get_post_meta(get_the_ID(), 'primary-colors', true);
	$copyright_text        					= get_post_meta(get_the_ID(), 'copyright_text', true);
	$copyright_border        				= get_post_meta(get_the_ID(), 'copyright_border', true);
	$copyright_text_dots        			= get_post_meta(get_the_ID(), 'copyright_text_dots', true);
	$copyright_text_hover        			= get_post_meta(get_the_ID(), 'copyright_text_hover', true);
	$footer_primary_color        			= get_post_meta(get_the_ID(), 'footer_primary_color', true);
	$menu_text_color        			    = get_post_meta(get_the_ID(), 'menu-text-color', true);
	$menu_text_hover_color        			= get_post_meta(get_the_ID(), 'menu-text-hover-color', true);
	
	?>

	  	<style>

	  		<?php 
	  		if(!empty($footer_links_colors)): ?>
	  			body .tentaz-footer-here a, 
	  			body .tentaz-footer-here .fa-ul li a, 
	  			body .tentaz-footer-here .widget.widget_nav_menu ul li a{
	  				color:<?php echo esc_attr($footer_links_colors);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($menu_text_color)): ?>
	  			body:not(.search-results) .tentaz-header-two .menu-area .navbar ul > li > a,
				body:not(.search-results) .tentaz-phone a,
				body:not(.search-results) .tentaz_offcanvas_icon .tentaz-nav-link .nav-menu-link i,
				body:not(.search-results) .tentaz-phone i,
				body:not(.search-results) #tentaz-header.tentaz-header-two .sticky_search i:before{
	  				color:<?php echo esc_attr($menu_text_color);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($copyright_border)): ?>
	  			body .footer-bottom .container, body .footer-bottom .container-fluid{
	  				border-color:<?php echo esc_attr($copyright_border);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($menu_text_hover_color)): ?>
	  			body:not(.search-results) .tentaz-header-two .menu-area .navbar ul > li:hover > a, 
	  			body:not(.search-results) .tentaz-header-two .menu-area .navbar ul > li.current_page_ancestor > a, 
	  			body:not(.search-results) .tentaz-phone a:hover, 
	  			body:not(.search-results) .tentaz_offcanvas_icon .tentaz-nav-link .nav-menu-link i:hover, 
	  			body:not(.search-results) #tentaz-header.tentaz-header-two .sticky_search:hover i::before{
	  				color:<?php echo esc_attr($menu_text_hover_color);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($footer_primary_color)): ?>
	  			body .tentaz-footer-here .fa-ul li i,
	  			body .tentaz-footer-here .fa-ul li a:hover{
	  				color:<?php echo esc_attr($footer_primary_color);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($footer_primary_color)): ?>
	  			body .tentaz-footer-here .tentaz-footer-top-here h3.footer-title::after,
	  			body .tentaz-footer-here .tentaz-footer-top-here .mc4wp-form-fields .tentaz-subs input[type="submit"],
	  			body .tentaz-footer-here ul.footer_social li a:hover{
	  				background:<?php echo esc_attr($footer_primary_color);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($footer_primary_color)): ?>
	  			body .tentaz-footer-here ul.footer_social li a:hover{
	  				border-color:<?php echo esc_attr($footer_primary_color);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($copyright_text)): ?>
	  			body .footer-bottom .copyright p, 
	  			body .footer-bottom .copyright a,
	  			body .footer-bottom .copyright-widget .widget_nav_menu ul.menu li a,
	  			body .footer-bottom .copyright p a,
	  			body .footer-bottom .copyright{
	  				color:<?php echo esc_attr($copyright_text);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($quote_button_color)): ?>
	  			body #tentaz-header .tentaz-quote a{
	  				color:<?php echo esc_attr($quote_button_color);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($quote_button_hover_color)): ?>
	  			body #tentaz-header .tentaz-quote a:hover{
	  				color:<?php echo esc_attr($quote_button_hover_color);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($quote_button_bg_color)): ?>
	  			body #tentaz-header .tentaz-quote a{
	  				background-color:<?php echo esc_attr($quote_button_bg_color);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($quote_button_bg_hover_color)): ?>
	  			body #tentaz-header .tentaz-quote a:hover{
	  				background-color:<?php echo esc_attr($quote_button_bg_hover_color);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($copyright_text_dots)): ?>
	  			body .footer-bottom .copyright-widget .widget_nav_menu ul.menu li a::after{
	  				background-color:<?php echo esc_attr($copyright_text_dots);?>;
	  			}
	  		<?php endif; ?>

	  		<?php 
	  		if(!empty($copyright_text_hover)): ?>
	  			body .footer-bottom .copyright a:hover,
	  			body .tentaz-footer-here .footer-bottom .widget.widget_nav_menu ul li a:hover,
	  			body .footer-bottom .copyright p a:hover{
	  				color:<?php echo esc_attr($copyright_text_hover);?>;
	  			}
	  		<?php endif; ?> 	
		  	</style>
	<?php
}
}