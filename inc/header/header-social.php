<?php
$solida_option = get_option( 'solida_option' );
$top_social = $solida_option['show-social']; ?>
<div class="header-share">
	<ul class="clearfix">

	<?php 
		if($top_social == '1'){              
		if(!empty($solida_option['facebook'])) { ?>
			<li> <a href="<?php echo esc_url($solida_option['facebook']);?>" target="_blank"><i class="fa fa-facebook"></i></a> </li>
			<?php 
		}

		if(!empty($solida_option['twitter'])) { ?>
			<li> <a href="<?php echo esc_url($solida_option['twitter']);?> " target="_blank"><i class="fa fa-twitter"></i></a> </li>
			<?php
		}

		if(!empty($solida_option['rss'])) { ?>
			<li> <a href="<?php  echo esc_url($solida_option['rss']);?> " target="_blank"><i class="fa fa-rss"></i></a> </li>
		<?php
		}

		if (!empty($solida_option['pinterest'])) { ?>
			<li> <a href="<?php  echo esc_url($solida_option['pinterest']);?> " target="_blank"><i class="fa fa-pinterest-p"></i></a> </li>
		<?php }

		if (!empty($solida_option['linkedin'])) { ?>
			<li> <a href="<?php  echo esc_url($solida_option['linkedin']);?> " target="_blank"><i class="fa fa-linkedin"></i></a> </li>
		<?php }

		if (!empty($solida_option['instagram'])) { ?>
			<li> <a href="<?php  echo esc_url($solida_option['instagram']);?> " target="_blank"><i class="fa fa-instagram"></i></a> </li>
		<?php }

		if(!empty($solida_option['vimeo'])) { ?>
			<li> <a href="<?php  echo esc_url($solida_option['vimeo']);?> " target="_blank"><i class="fa fa-vimeo"></i></a> </li>
		<?php }

		if (!empty($solida_option['tumblr'])) { ?>
			<li> <a href="<?php  echo esc_url($solida_option['tumblr']);?> " target="_blank"><i class="fa fa-tumblr"></i></a> </li>
		<?php }

		if (!empty($solida_option['youtube'])) { ?>
		<li> <a href="<?php  echo esc_url($solida_option['youtube']);?> " target="_blank"><i class="fa fa-youtube"></i></a> </li>
		<?php } 
	} ?>
	</ul>
</div>