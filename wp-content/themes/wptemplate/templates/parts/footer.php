<footer class="footer">
<?php 
// check if the repeater field has rows of data
$footer_repeater = get_field('footer_repeater', 'option');
$footer_content = get_field('footer_text', 'option');
//pr($footer_repeater);

?>
<div class="container">
	<?php
if( $footer_repeater ): ?>
<div class="row align-items-center">
	<div class="col-12 col-md-3">
		<div class="contact-details">
		<?php if( $footer_content ): ?>
			<?php echo $footer_content; ?>
		<?php endif;?>
		</div>
	</div>
	<div class="col-12 col-md-6 center-text">
	<div class="row">
	<div class="col-12">
			<h2>Associated With</h2>
		</div>
<?php // loop through the rows of data
	foreach($footer_repeater as $value) : ?>
		
		<div class="col-12 col-md-4">
		<div class="image-wrap">
		<?php
      $image = $value['footer_image']['url'];
      
	  $link = $value['image_link']['url'];
	  //pr($link);
      
        if( $image ) {  ?>
          <a href="<?php echo esc_url( $link )?>">
          <img src="<?php echo esc_url( $image )?>" />
          </a>
          <?php
        }
      ?>
	  </div>
    </div>
<?php endforeach; ?>
  </div>
  </div>
  <div class="col-12 col-md-3">
  	<div class="flex-row">
  		<div class="flex-col">
  	<img src="<?php echo get_stylesheet_directory_uri().'/assets/img/visit-nepal.png'; ?>" alt="Visit Nepal">
  </div>
  		<div class="flex-col">
  	<img src="<?php echo get_stylesheet_directory_uri().'/assets/img/visa.png'; ?>" alt="Visa">
  </div>
  
  </div>
  </div>
	</div>

<?php endif;?>
<div class="copy-right center-text">
	<p>Copyright ©. M.K.Himalayan Adventure Pvt. Ltd. All rights reserved.</p>
	</div>
</div>
</footer>

