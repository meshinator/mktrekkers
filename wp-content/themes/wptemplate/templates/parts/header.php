<header class="site-header">
	<div class="header-top">
		<div class="container">
			<div class="row">
			<div class="col-12 col-md-8">
			<?php 
                $contact_num = get_field('contact_number', 'option');
                $email_id = get_field('email', 'option');
                $gov_id = get_field('government_id', 'option');
				$company_name = get_field('company_name', 'option');
            ?>
			<?php if ($contact_num) : ?>
				<i class="icon-phone"></i>
				<?php echo $contact_num; ?>
			<?php endif; ?>
			<?php if ($email_id) : ?>
				<i class="icon-gmail"></i>
				<?php echo $email_id; ?>
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
						<div class="social-wrap">
			<?php 
                $facebook = get_field('facebook', 'option');
                $twitter = get_field('twitter', 'option');
                $instagram = get_field('instagram', 'option');
            ?>
			<?php if ($facebook) : ?>
				<a href="<?php echo esc_url($facebook); ?>" target="_blank">
					<i class="icon-facebook"></i>
				</a>
			<?php endif; ?>
			<?php if ($twitter) : ?>
				<a href="<?php echo esc_url($twitter); ?>" target="_blank">
					<i class="icon-twitter"></i>

				</a>
			<?php endif; ?>
			<?php if ($instagram) : ?>
				<a href="<?php echo esc_url($instagram); ?>" target="_blank">
					<i class="icon-instagram"></i>

				</a>
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
					<!-- <h1><?php echo $company_name; ?></h1> -->
					<!-- <h1><?php echo $company_name; ?></h1> -->
				<?php endif; ?>
				<nav class="main-nav desktop">
			<div class="container">
				<?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'depth' => 5,
                        'container' => 'ul',
                        'menu_class' => 'nav',
                    ]);
                ?>
            </div>
		</nav>
				</div>
			</div>
			<a class="mobile-header-controller mobile" href="javascript:;">
				<span></span>
				<span></span>
				<span></span>
			</a>
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