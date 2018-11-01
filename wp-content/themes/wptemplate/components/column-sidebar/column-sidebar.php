<?php
$component_class = [
	'section section-content-sidebar',
];
$main_content          = get_sub_field( 'main_content' );
$side_content          = get_sub_field( 'sidebar_content' );
?>

	<section class="<?php echo implode( ' ', $component_class ); ?>">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8">
					<?php
						if ( $main_content ) {
							echo $main_content;
						}
					?>
				</div>
				<div class="col-12 col-md-4">
					<?php
						if ( $side_content ) {
							echo $side_content;
						}
					?>
				</div>
			</div>
		</div>
	<?php //echo esc_html( pll_e( 'view more' ) ); ?>
</section>