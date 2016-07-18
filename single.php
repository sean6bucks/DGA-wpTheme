<?php get_header(); ?>
<div id="fb-root"></div>

<main role="main">
	<!-- section -->
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- post thumbnail -->
	<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<div class="post-jumbotron" style="background-image: url('<?php echo $url ?>')"></div>
	<?php endif; ?>
	<!-- /post thumbnail -->

	<section class="blog-post">
		<div class="content-wrapper">
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- post title -->
				<h2 class="section-headline"><?php the_title(); ?></h2>
				<h5 class="author"> <?php _e( 'by' ); ?> <?php the_author_posts_link(); ?><span class="post-date"> | <?php the_time('F j, Y'); ?></span></h5>
				<!-- /post title -->
				<!-- post details -->
				<div class="publish-information">
					<p><h4 class="post-category"><?php exclude_post_categories( '1' ); ?></h4> </p>
				</div>
				<!-- Social buttons -->
				<div class="share-buttons">
					<div class="share-btn fb-share-button" data-href="<?php echo get_permalink(); ?>" data-layout="button" data-mobile-iframe="false">
						<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"></a>
					</div>
					<div class="share-btn">
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-hashtags="DragonGroupAsia"></a>
					</div>
					<div class="share-btn">
					<script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-url="<?php echo get_permalink(); ?>"></script>
					</div>
				</div>
				<!-- /post details -->
				<div class="text-wrapper">
					<?php the_content(); // Dynamic Content ?>
					<h5 class="post-tags">
			        <?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			        </h5>
				</div>

			</article>
			<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->
			<?php endif; ?>
		</div>
	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
