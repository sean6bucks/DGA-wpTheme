<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
				<?php if (is_home()): ?>
					<div class="logo">
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/headline-home.jpg" alt="Dragon Group Asia Header image" class="header-img"> -->
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
						<?php endif; ?>
					</div>
				<?php else: ?>
					<div class="header-jumbotron">
						<?php the_post_thumbnail('full'); ?>
					</div>
				<?php endif; ?>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav content-wrapper" role="navigation">
						
						<div class="nav-title">
							<a href="<?php echo home_url() ?>">DRAGON GROUP ASIA</a>
						</div>

						<ul class="nav-list">
							<li class="nav-item"><a href="">ABOUT US</a></li>
							<li class="nav-item"><a href="">CASE STUDIES</a></li>
							<li class="nav-item"><a href="">BLOG</a></li>
							<li class="nav-item"><a href="">DRAGON ADVENTURES</a></li>
						</ul>

					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
