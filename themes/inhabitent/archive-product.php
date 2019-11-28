<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
		
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					
				?>
				<nav>
				<div class=product-type-links>
				<h2><a href="http://localhost:8888/inhabitent/product_type/do/">Do</a></h2>
				<h2><a href="http://localhost:8888/inhabitent/product_type/eat">Eat</a></h2>
				<h2><a href="http://localhost:8888/inhabitent/product_type/sleep">Sleep</a></h2>
				<h2><a href="http://localhost:8888/inhabitent/product_type/wear">Wear</a></h2>
				</div><!--end product-type-links-->
				</nav>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<div class="archive-container">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<header class="entry-header">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail(); ?>
							<?php endif; ?>

							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
							....Price: $<?php the_field('price'); ?></h2>
							<?php if ( 'post' === get_post_type() ) : ?>
							
							<div class="entry-meta">
								<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
							</div><!-- .entry-meta -->
							<?php endif; ?>
								
						</header><!-- .entry-header -->
					</article><!-- #post-## -->
				<?php endwhile; ?>
			</div> <!-- .ends-container --> 

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
