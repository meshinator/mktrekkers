
<?php 
// check if the repeater field has rows of data
$gallery_text = get_sub_field('gallery_text', 'option');
if( have_rows('gallery_repeater') ): ?>
<section class="gallery-wrapper">
<div class="container">
<div class="row align-items-center">
  <div class="col-12">
    <div class="gallery-text">
    <?php echo $gallery_text; ?>
  </div>
  </div>
<?php // loop through the rows of data
    $count = 0;
    while ( have_rows('gallery_repeater') ) : the_row(); ?>
		<div class="col-12 col-md-2">
		<div class="image-wrap">
		<?php
      $image = get_sub_field('gallery_image');
	  $size = 'image-400'; // (thumbnail, medium, large, full or custom size)
      
        if( $image ) {  
          echo wp_get_attachment_image( $image['ID'], $size );
        }
      ?>
	  </div>
    </div>
    <?php 
    endwhile;?>
  </div>
</div>
</section>
<?php 
endif;

?>
