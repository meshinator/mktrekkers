<?php
$component_class = [
	'section section-content',
];
$content          = get_sub_field( 'content' );
$background_color  = get_sub_field( 'background_color' );
$inner_page = get_field('inner_page');
    if ($inner_page) {
        $component_class[] = 'inner-page';
    }
if ( $background_color ) :
	$component_class[] = 'grey';
endif;
?>
	<section class="<?php if ( empty( $content ) ) { echo 'no-content '; };?><?php echo implode( ' ', $component_class ); ?>">
		<div class="container">
			<div class="row">
			<?php
			if ( $content ) : ?>
			
				<div class="col-12 <?php echo esc_html( $column_size_class ); ?>">
					<div class="section-content <?php echo esc_html( $white_bg ); ?> ">
						<?php echo $content; ?>
					</div>
				</div>
			<?php endif;?>

		</div>
	</div>
	<?php //echo esc_html( pll_e( 'view more' ) ); ?>
</section>