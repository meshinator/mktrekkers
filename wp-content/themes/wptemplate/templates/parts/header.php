<header class="site-header">
	<div class="header-top">
		<div class="container">
			<div class="row">
			<div class="col-12 col-md-8">
			<?php 
                $contact_num = get_field('contact_number', 'option');
                $gov_id = get_field('government_id', 'option');
				$header_text = get_field('header_text', 'option');
				$company_name = get_field('company_name', 'option');
            ?>
			<?php if ($contact_num) : ?>
				<?php echo $contact_num; ?>
			<?php endif; ?>
			<?php if ($gov_id) : ?>
				<?php echo $gov_id; ?>
			<?php endif; ?>
				</div>
					<div class="col-12 col-md-4">
						<div class="header-text">
			<?php if ($header_text) : ?>
				<?php echo $header_text; ?>
			<?php endif; ?>
		</div>
				</div>
			
			</div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-md-3">
					<a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
						<img src="<?php echo get_stylesheet_directory_uri().'/assets/img/logo.png'; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
					</a>
				</div>
			
			<div class="col-12 col-md-9">
				<?php if ($company_name) : ?>
					<h1><?php echo $company_name; ?></h1>
				<?php endif; ?>
				</div>
			</div>
			<a class="mobile-header-controller mobile" href="javascript:;">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
		<nav class="main-nav desktop">
			<div class="container">
				<?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'depth' => 3,
                        'container' => 'ul',
                        'menu_class' => 'nav',
                    ]);
                ?>
            </div>
		</nav>
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