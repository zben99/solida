<?php 
$solida_option = get_option( 'solida_option' );
$preloader_img = "";

if(!empty($solida_option['show_preloader']))
  {
    $loading = $solida_option['show_preloader'];
    if(!empty($solida_option['preloader_img'])){
      $preloader_img = $solida_option['preloader_img'];
    }
    if($loading == 1){
      if(empty($preloader_img['url'])):
    ?> 
        <div id="tentaz__preloader_here">
            <div id="tentaz__circle_loader"></div>
        </div>   
        
        <?php else: ?>
        <div id="tentaz__preloader_here">
            <div id="tentaz__circle_loader"></div>
            <div class="tentaz__loader_logo"><img src="<?php echo esc_url($preloader_img['url']);?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></div>
        </div>
      <?php endif; ?>

  <?php }
}?>