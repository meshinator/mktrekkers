
<?php 
// check if the repeater field has rows of data
if( have_rows('slider_repeater') ): ?>
<section class="slider">

<div class="swiper-container">
    <div class="swiper-wrapper">
<?php // loop through the rows of data
    $count = 0;
    while ( have_rows('slider_repeater') ) : the_row(); ?>

     <div class="swiper-slide">
      <?php 
      $image = get_sub_field('slider_image');
      $size = 'image-1400'; // (thumbnail, medium, large, full or custom size)
      
        if( $image ) {  
          echo wp_get_attachment_image( $image['ID'], $size );
        }
      ?>
    </div>
    <?php 
        $count++;
    endwhile;?>
  </div>
  <!-- Add Arrows -->
  <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
</section>
<?php 
endif;

?>
