<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
	
		<script>
		// REDIRECT TO CN IF BROWSER SET TO 
			if(navigator.language.indexOf('zh')>=0 && window.location.pathname.indexOf('cn')<0) {
				window.location.href = '/cn';
			}
		</script>
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
		
		<!-- scripts for share buttons -->
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<script>
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
		</script>
	</head>
	<body <?php body_class(); ?>>
		
		<?php 
			$indexPage = get_page_by_title( 'index' );
		?>
		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<header id="<?php echo get_the_title ()  ?>-header" class="header clear" role="banner">

			<?php if ( get_the_title() == 'index' || get_the_title() == 'index_cn' ) : ?>
				<!-- jumbotron img-->
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<div class="header-jumbotron" style="background-image: url('<?php echo $url ?>')"></div>
				<!-- <div class="mobile-jumbotron">
					<img src="<?php echo $url ?>"/>
				</div> -->
				<!-- /jumbotron img -->
			<?php endif; ?>
				<!-- nav -->
					
				<?php if (CFS()->get( 'chinese_page' )) : ?>
				
				<!-- CHINESE NAV -->
				
				<nav id="main-nav" class="nav chinese_nav" role="navigation">
					<div class="nav-title">
						<a href="/cn"><img class="logo-full" src="<?php echo get_template_directory_uri(); ?>/img/dg_logo_full_sm_white.png" /></a>
					</div>
					
					<ul class="nav-list">
						<li class="nav-item">
							<? $title = $post->post_title; ?>
							<a href="/cn/about-us">
								<?php echo CFS()->get( 'about_us_cn', $indexPage->ID ); ?>
							</a>
							<div id="about-us-dropdown" class="dropdown-content">
								<a href="<? if($title=='about-us_cn'){ echo '#our-team'; } else { echo '/cn/about-us#our-team'; } ?>">
									<?php echo CFS()->get( 'our_team_cn', $indexPage->ID ); ?>
								</a>
								<a href="<? if($title=='about-us_cn'){ echo '#careers'; } else { echo '/cn/about-us#careers'; } ?>"><?php echo CFS()->get( 'careers_cn', $indexPage->ID ); ?></a>
							</div>
						</li>
						<?php 
							$studiesPage = get_page_by_title( 'case-studies' );
							$studies = CFS()->get( 'case_studies', $studiesPage->ID );
							if (count($studies)) : 
						?>
						<li class="nav-item">
							<a href="/cn/case-studies"><?php echo CFS()->get( 'case_studies_cn', $indexPage->ID ); ?></a>
							<div id="case-studies-dropdown" class="dropdown-content">
								<a href="<? if($title=='case-studies_cn'){ echo '#clients'; } else { echo '/cn/case-studies#clients'; } ?>"><?php echo CFS()->get( 'clients_cn', $indexPage->ID ); ?></a>
							</div>
						</li>
						<?php else : ?>
						<li class="nav-item">
							<a href="/cn/case-studies#clients"><?php echo CFS()->get( 'clients_cn', $indexPage->ID ); ?></a>
						</li>
						<?php endif; ?>
						<li class="nav-item">
							<a href="/cn/blog"><?php echo CFS()->get( 'blog_cn', $indexPage->ID ); ?></a>
						</li>
						<!-- <li class="nav-item">
							<a href="http://www.dragonadventureschina.com"><?php echo CFS()->get( 'dragon_adventures_cn', $indexPage->ID ); ?></a>
						</li> -->
						<li class="nav-item">
							<a onclick="switchLanguage();">EN</a>
						</li>
					</ul>
				</nav>

				<!-- collapsed nav -->
				<nav class="nav fixed-nav" role="navigation">
					<div class="nav-title">
						<a href="/cn"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/dg_logo_full_sm_white.png" /></a>
					</div>

					<ul class="nav-list">
						<li class="nav-item">
							<a href="/cn/about-us"><?php echo CFS()->get( 'about_us_cn', $indexPage->ID ); ?></a>
							<div id="about-us-dropdown" class="dropdown-content">
								<a href="<? if($title=='about-us_cn'){ echo '#our-team'; } else { echo '/cn/about-us#our-team'; } ?>"><?php echo CFS()->get( 'our_team_cn', $indexPage->ID ); ?></a>
								<a href="<? if($title=='about-us_cn'){ echo '#careers'; } else { echo '/cn/about-us#careers'; } ?>"><?php echo CFS()->get( 'careers_cn', $indexPage->ID ); ?></a>
							</div>
						</li>
						<li class="nav-item">
							<a href="/cn/case-studies"><?php echo CFS()->get( 'case_studies_cn', $indexPage->ID ); ?></a>
							<div id="case-studies-dropdown" class="dropdown-content">
								<a href="<? if($title=='case-studies_cn'){ echo '#clients'; } else { echo '/cn/case-studies#clients' ; } ?>"><?php echo CFS()->get( 'clients_cn', $indexPage->ID ); ?></a>
							</div>
						</li>
						<li class="nav-item">
							<a href="/cn/blog"><?php echo CFS()->get( 'blog_cn', $indexPage->ID ); ?></a>
						</li>
						<!-- <li class="nav-item">
							<a href="http://www.dragonadventureschina.com"><?php echo CFS()->get( 'dragon_adventures_cn', $indexPage->ID ); ?></a>
						</li> -->
						<li class="nav-item">
							<a onclick="switchLanguage();">EN</a>
						</li>
					</ul>
				</nav>

				<div class="mobile-menu">
					<div class="menu-close"><i class="fa fa-times"></i></div>
					<nav class="nav" role="navigation">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/dg_logo_full_sm_white.png" />
						<ul class="nav-list">
							<li class="nav-item">
								<a href="/cn/about-us"><?php echo CFS()->get( 'about_us_cn', $indexPage->ID ); ?></a>
								<ul class="nav-submenu">
									<li><a href="<? if($title=='about-us_cn'){ echo '#our-team'; } else { echo '/cn/about-us#our-team'; } ?>"><?php echo CFS()->get( 'our_team_cn', $indexPage->ID ); ?></a></li>
									<li><a href="<? if($title=='about-us_cn'){ echo '#careers'; } else { echo '/cn/about-us#careers'; } ?>"><?php echo CFS()->get( 'careers_cn', $indexPage->ID ); ?></a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="/cn/case-studies"><?php echo CFS()->get( 'case_studies_cn', $indexPage->ID ); ?></a>
								<ul class="nav-submenu">
									<li><a href="<? if($title=='case-studies_cn'){ echo '#clients'; } else { echo '/cn/case-studies#clients'; }?>"><?php echo CFS()->get( 'clients_cn', $indexPage->ID ); ?></a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="/cn/blog"><?php echo CFS()->get( 'blog_cn', $indexPage->ID ); ?></a>
							</li>
							<!-- <li class="nav-item">
								<a href="http://www.dragonadventureschina.com"><?php echo CFS()->get( 'dragon_adventures_cn', $indexPage->ID ); ?></a>
							</li> -->
							<li class="nav-item">
								<a onclick="switchLanguage();">EN</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- /collapsed nav -->

				<?php else : ?>
				<nav id="main-nav" class="nav" role="navigation">
					<div class="nav-title">
						<a href="<?php echo home_url() ?>">
							<img class="logo-full" src="<?php echo get_template_directory_uri(); ?>/img/dg_logo_full_sm_white.png" />
						</a>
					</div>
					<!-- ENGLISH NAV -->
					<ul class="nav-list">
						<li class="nav-item">
							<a href="/about-us"><?php echo CFS()->get( 'about_us', $indexPage->ID ); ?></a>
							<div id="about-us-dropdown" class="dropdown-content">
								<? $title = $post->post_title; ?>
								<a href="<? if($title=='about-us'){ echo '#our-team'; } else { echo '/about-us#our-team'; } ?>"><?php echo CFS()->get( 'our_team', $indexPage->ID ); ?></a>
								<a href="<? if($title=='about-us'){ echo '#careers'; } else { echo '/about-us#careers'; } ?>"><?php echo CFS()->get( 'careers', $indexPage->ID ); ?></a>
							</div>
						</li>
						<?php 
							$studiesPage = get_page_by_title( 'case-studies' );
							$studies = CFS()->get( 'case_studies', $studiesPage->ID );
							if (count($studies)) : 
						?>
						<li class="nav-item">
							<a href="/case-studies"><?php echo CFS()->get( 'case_studies', $indexPage->ID ); ?></a>
							<div id="case-studies-dropdown" class="dropdown-content">
								<a href="<? if($title=='case-studies'){ echo '#clients'; } else { echo '/case-studies#clients'; } ?>"><?php echo CFS()->get( 'clients', $indexPage->ID ); ?></a>
							</div>
						</li>
						<?php else : ?>
						<li class="nav-item">
							<a href="/case-studies#clients"><?php echo CFS()->get( 'clients', $indexPage->ID ); ?></a>
						</li>
						<?php endif; ?>
						<li class="nav-item"><a href="/blog"><?php echo CFS()->get( 'blog', $indexPage->ID ); ?></a></li>
						<!-- <li class="nav-item"><a href="http://www.dragonadventureschina.com"><?php echo CFS()->get( 'dragon_adventures', $indexPage->ID ); ?></a></li> -->
						<li class="nav-item">
							<a onclick="switchLanguage('cn');">中文</a>
						</li>
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
							<a href="/about-us"><?php echo CFS()->get( 'about_us', $indexPage->ID ); ?></a>
							<div id="about-us-dropdown" class="dropdown-content">
								<a href="<? if($title=='about-us'){ echo '#our-team'; } else { echo '/about-us#our-team'; } ?>"><?php echo CFS()->get( 'our_team', $indexPage->ID ); ?></a>
								<a href="<? if($title=='about-us'){ echo '#careers'; } else { echo '/about-us#careers'; } ?>"><?php echo CFS()->get( 'careers', $indexPage->ID ); ?></a>
							</div>
						</li>
						<li class="nav-item">
							<a href="/case-studies"><?php echo CFS()->get( 'case_studies', $indexPage->ID ); ?></a>
							<div id="case-studies-dropdown" class="dropdown-content">
								<a href="<? if($title=='case-studies'){ echo '#clients'; } else { echo '/case-studies#clients'; } ?>"><?php echo CFS()->get( 'clients', $indexPage->ID ); ?></a>
							</div>
						</li>
						<li class="nav-item">
							<a href="/blog"><?php echo CFS()->get( 'blog', $indexPage->ID ); ?></a>
						</li>
						<!-- <li class="nav-item">
							<a href="http://www.dragonadventureschina.com"><?php echo CFS()->get( 'dragon_adventures', $indexPage->ID ); ?></a>
						</li> -->
						<li class="nav-item">
							<a onclick="switchLanguage('cn');">中文</a>
						</li>
					</ul>
				</nav>

				<div class="mobile-menu">
					<div class="menu-close"><i class="fa fa-times"></i></div>
					<nav class="nav" role="navigation">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/dg_logo_full_sm_white.png" />
						<ul class="nav-list">
							<li class="nav-item">
								<a href="/about-us"><?php echo CFS()->get( 'about_us', $indexPage->ID ); ?></a>
								<ul class="nav-submenu">
									<li><a href="<? if($title=='about-us'){ echo '#our-team'; } else { echo '/about-us#our-team'; } ?>"><?php echo CFS()->get( 'our_team', $indexPage->ID ); ?></a></li>
									<li><a href="<? if($title=='about-us'){ echo '#careers'; } else { echo '/about-us#careers'; } ?>"><?php echo CFS()->get( 'careers', $indexPage->ID ); ?></a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="/case-studies"><?php echo CFS()->get( 'case_studies', $indexPage->ID ); ?></a>
								<ul class="nav-submenu">
									<li><a href="<? if($title=='case-studies'){ echo '#clients'; } else { echo '/case-studies#clients'; } ?>"><?php echo CFS()->get( 'clients', $indexPage->ID ); ?></a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="/blog"><?php echo CFS()->get( 'blog', $indexPage->ID ); ?></a>
							</li>
							<!-- <li class="nav-item">
								<a href="http://www.dragonadventureschina.com"><?php echo CFS()->get( 'dragon_adventures', $indexPage->ID ); ?></a>
							</li> -->
							<li class="nav-item">
								<a onclick="switchLanguage('cn');">中文</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- /collapsed nav -->
				<?php endif; ?>

				<div class="menu-open"><i class="fa fa-bars"></i></div>

			</header>
			<!-- /header -->
