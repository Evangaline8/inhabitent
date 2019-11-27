<?php
/**
 * The the homepage
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


				<!-- <?php //get_template_part( 'template-parts/content' ); ?> -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		<!-- #main -->
		<section class="product-info container">
            <h2>Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>
					 </div>
                  <?php endforeach?>
               </div>
            <?php endif; ?>
		 </section>
	
		 <section class="journal-container">
        <h2>INHABITENT JOURNAL</h2>
        <div class="journal-wrapper">
          <?php 
            $args = array(
                'post_type'         => 'post', 
                'order'             => 'DSC', 
                'offset'            => '0',
                'posts_per_page'     => 3);
            $product_posts = get_posts($args);
            ?>

        <?php foreach ( $product_posts as $post) : setup_postdata( $post);?>
           <div class="journal-blog">
           <div class="journal-thumb">
                <?php the_post_thumbnail();?>
                  </div>

            <div class="journal-date">
                <span><?php the_date()?> / <?php echo get_comments_number()?> comments</span>
            
                 <div class="journal-link">
                <p><a class="color-title" href="<?php the_permalink();?>"><?php the_title()?></a></p>
                </div>
                <p><a class="blog_btn" href="<?php the_permalink();?>">Read Entry</a></p>
                </div>            
                </div>  
            <?php endforeach; wp_reset_postdata();?>    
	
</section>
	
		<section class="adventure-container">
        <h2>Adventure</h2>
        <div class="adventure-wrapper">
          <?php 
            $args = array(
                'post_type'         => 'adventure_type', 
                'order'             => 'DSC', 
                'offset'            => '0',
                'posts_per_page'     => 4);
            $adventure_type_query = get_posts($args);
            ?>

        <?php foreach ( $adventure_type_query as $post) : setup_postdata( $post);?>
           <div class="adventure-blog">
           <div class="adventure-thumb">
                <?php the_post_thumbnail();?>
				  </div>
				  <div class="adventure-link">
                <p><a class="color-title" href="<?php the_permalink();?>"><?php the_title()?></a></p>
                <p><a class="adventure_btn" href="<?php the_permalink();?>">Read More</a></p>
                </div>            
                </div>  
            <?php endforeach; wp_reset_postdata();?>    
	
</section>
		 </main>
	</div><!-- #primary -->


<?php get_footer(); ?>
