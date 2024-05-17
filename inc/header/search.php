<?php
$solida_option = get_option( 'solida_option' );
$tentaz_top_search = get_post_meta(get_queried_object_id(), 'select-search', true);
//search page here
if(!empty($solida_option['tentaz_search'])):
    $sticky_search = $solida_option['tentaz_search'];
else:
    $sticky_search ='';
endif;
if(($sticky_search == '1') || ($tentaz_top_search == 'show') ):
 ?>
	<div class="sticky_form_here">
		<div class="sticky_form_full">
		  <?php get_search_form(); ?> 
		</div><i class="ri-close-line close-search sticky_search sticky_form_search"></i>
		
	</div>
<?php endif; ?>

