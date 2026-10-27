<?php
get_header();
?>

<main id="main-content" class="site-main content-page">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article <?php post_class( 'entry' ); ?>>
					<h1><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<p><?php esc_html_e( 'Er is nog geen inhoud gepubliceerd.', 'portofolio' ); ?></p>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
