<?php
/**
 * The template for displaying all single posts and attachments.
 *
 * @package Authentic
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php do_action( 'csco_main_before' ); ?>

		<main id="main" class="site-main" role="main">

			<?php do_action( 'csco_main_start' ); ?>

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<?php do_action( 'csco_post_before' ); ?>

				<article data-scroll id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php do_action( 'csco_post_start' ); ?>

					<div class="post-wrap">

						<?php do_action( 'csco_post_main_before' ); ?>

						<div class="post-main">

							<?php do_action( 'csco_post_content_before' ); ?>

							<section class="entry-content">

								<?php the_content(); ?>

							</section>

							<?php do_action( 'csco_post_content_after' ); ?>

						</div><!-- .post-main -->

						<?php do_action( 'csco_post_main_after' ); ?>

					</div><!-- .entry-wrap -->

					<?php do_action( 'csco_post_end' ); ?>

				</article>

				<?php do_action( 'csco_post_after' ); ?>

				<?php endwhile; ?>

			<?php do_action( 'csco_main_end' ); ?>

		</main>

		<?php do_action( 'csco_main_after' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
