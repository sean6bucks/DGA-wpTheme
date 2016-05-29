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
			<header id="<?php echo get_the_title ()  ?>-header" class="header clear" role="banner">

			<?php if (get_the_title () == 'index'): ?>
				<!-- jumbotron img-->
				<div class="load-shade">
					<div class="spin-wrapper">
						<i class="fa fa-circle-o-notch fa-spin"></i>
					</div>
				</div>
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<div class="header-jumbotron" style="background-image: url('<?php echo $url ?>')">
				</div>
				<!-- /jumbotron img -->
			<?php endif; ?>
				<!-- nav -->
				<nav id="main-nav" class="nav" role="navigation">
					<div class="nav-title">
						<a href="<?php echo home_url() ?>"><img class="logo-full" src="<?php echo get_template_directory_uri(); ?>/img/dg_logo_full_sm_white.png" /></a>
					</div>

					<ul class="nav-list">
						<li class="nav-item">
							<a href="/about-us">ABOUT US</a>
							<div id="about-us-dropdown" class="dropdown-content">
								<a href="/about-us#our-team">OUR TEAM</a>
								<a href="/about-us#careers">CAREERS</a>
							</div>
						</li>
						<li class="nav-item">
							<a href="/case-studies">CASE STUDIES</a>
							<div id="case-studies-dropdown" class="dropdown-content">
								<a href="/case-studies#clients">CLIENTS</a>
							</div>
						</li>
						<li class="nav-item"><a href="/blog">BLOG</a></li>
						<li class="nav-item"><a href="http://www.dragonadventureschina.com">DRAGON ADVENTURES</a></li>
					</ul>
				</nav>
				<!-- /nav -->
				
				<!-- collapsed nav -->
				<nav class="nav fixed-nav" role="navigation">
					<div class="nav-title">
						<a href="<?php echo home_url() ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/dg_logo_full_sm_white.png" /></a>
					</div>

					<ul class="nav-list">
						<li class="nav-item">
							<a href="/about-us">ABOUT US</a>
							<div id="about-us-dropdown" class="dropdown-content">
								<a href="/about-us#our-team">OUR TEAM</a>
								<a href="/about-us#careers">CAREERS</a>
							</div>
						</li>
						<li class="nav-item">
							<a href="/case-studies">CASE STUDIES</a>
							<div id="case-studies-dropdown" class="dropdown-content">
								<a href="/case-studies#clients">CLIENTS</a>
							</div>
						</li>
						<li class="nav-item"><a href="/blog">BLOG</a></li>
						<li class="nav-item"><a href="http://www.dragonadventureschina.com">DRAGON ADVENTURES</a></li>
					</ul>
				</nav>
				<!-- /collapsed nav -->
			</header>
			<!-- /header -->
