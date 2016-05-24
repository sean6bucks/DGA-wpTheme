<?php get_header(); ?>

	<main role="main">
		<?php get_template_part( get_the_title () ); ?>
	</main>

<?php get_footer(); ?>

<!-- 

<section>

	<h1><?php the_title(); ?></h1>
	<?php $company_tagline = get_post_meta( get_the_ID(), 'company_tagline', false ); ?>
	<h2><?php if ( ! empty( $company_tagline ) ) { echo $company_tagline[0] ; }?> </h2>
	
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php the_content(); ?>

		<?php comments_template( '', true ); // Remove if you don't want comments ?>

		<br class="clear">

		<?php edit_post_link(); ?>

	</article>

<?php endwhile; ?>

<?php else: ?>

	<article>

		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

	</article>

<?php endif; ?>

</section>

-->
