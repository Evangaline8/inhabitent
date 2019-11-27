<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->
?>
<?php
if(is_front_page( )):
    if ( has_post_thumbnail() ) :
    ?>
         <div class='hero-banner' style='background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover;'>
            <!-- output the white circle logo for the front-page -->
            <img class="hero-banner-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg"/>
        </div>
    <?php
    endif;
endif;