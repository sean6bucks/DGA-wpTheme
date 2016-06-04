<?php get_header(); ?>

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
					<p><h4 class="post-category"><?php exclude_post_categories( '2,1' ); ?></h4> </p>
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
