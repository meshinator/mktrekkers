<header class="site-header">
	<div class="header-top">
		<div class="container">
			<div class="contant-num">
			<?php 
                $contact_num = get_field('contact_number', 'option');
                $gov_id = get_field('government_id', 'option');
                $top_logo = get_field('top_logo', 'option');
            ?>
			<?php if ($contact_num) : ?>
				<?php echo $contact_num; ?>
			<?php endif; ?>
			<?php if ($gov_id) : ?>
				<?php echo $gov_id; ?>
			<?php endif; ?>
			<?php if ($top_logo) : ?>
				<?php echo $top_logo; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
						<img src="<?php echo get_stylesheet_directory_uri().'/assets/img/logo.png'; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
					</a>
					<nav class="main-nav desktop">
					<?php
                        wp_nav_menu([
                            'theme_location' => 'primary',
                            'depth' => 1,
                            'container' => 'ul',
                            'menu_class' => 'nav',
                        ]);
                    ?>
					</nav>
					<a class="mobile-header-controller mobile" href="javascript:;">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>

<!--start mobile-header-->
<div class="mobile-wrapper">
	<div class="mobile-header">
		<a href="javascript:;" class="close-nav">
			<span class="bar"></span>
			<span class="bar"></span>
		</a>
		<div class="header-container">
			<!--start nav -->
			<nav class="mobile-nav">
			<?php
				wp_nav_menu(array(
					'menu' => 'primary',
					'container' => 'ul',
					'menu_class' => 'navbar-nav',
					));
				?>
			</nav>
			<!--end nav -->
		</div>
	</div>
</div>
<!--end mobile-header-->