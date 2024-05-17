<div class="solida-product-item">
	<div class="images-product">
		<?php
			global $product;
			$solida_option = get_option( 'solida_option' );
			woocommerce_show_product_loop_sale_flash();
			woocommerce_template_loop_product_thumbnail();
		?>				
		<div class="solida-product-info">
			<ul>
				<li><?php solida_wc_add_to_cart_icon();?></li>
			</ul>
		</div>
	</div>
</div>
