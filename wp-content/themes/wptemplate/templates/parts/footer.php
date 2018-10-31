<footer class="footer">
<?php 
// check if the repeater field has rows of data
$footer_repeater = get_field('footer_repeater', 'option');
$footer_content = get_field('footer_text', 'option');
$contact_details_repeater= get_field('contact_details_repeater','option')
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

<!-- Footer -->
<footer class="page-footer font-small teal pt-4">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Contact Details</h5>
          <p>
M. K. Himalayan Adventure Pvt. Ltd.
Phone: +977 - 9818368534, 9841449917
Email: info@mktrekkers.com</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
       
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
   
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

<div class="copy-right center-text">
	<p>Copyright ©. M.K.Himalayan Adventure Pvt. Ltd. All rights reserved.</p>
	</div>
</div>
</footer>

