
<?php 
// check if the repeater field has rows of data
if( have_rows('slider_repeater') ): ?>
<section class="slider">

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
<?php // loop through the rows of data
    $count = 0;
    while ( have_rows('slider_repeater') ) : the_row(); ?>

    <div class="carousel-item <?php if ( $count == 0 ) { echo "active"; } ?>">
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
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<?php 
endif;

?>
