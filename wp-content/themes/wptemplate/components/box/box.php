
<?php 
// check if the repeater field has rows of data
if( have_rows('box_repeater') ): ?>
<section class="box-wrapper">
<div class="container">
<div class="row">
<?php // loop through the rows of data
    $count = 0;
    while ( have_rows('box_repeater') ) : the_row(); ?>
		<div class="col-12 col-md-4">
		<div class="image-wrap">
		<?php
      $image = get_sub_field('box_image');
	  $size = 'image-400'; // (thumbnail, medium, large, full or custom size)
	  $text = get_sub_field('box_text');
      
        if( $image ) {  
          echo wp_get_attachment_image( $image['ID'], $size );
        }
      ?>
	  </div>
	  <div class="text-wrap">
		<?php echo $text; ?> 
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
