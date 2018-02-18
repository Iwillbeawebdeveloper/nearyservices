<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iwillbeawebdeveloper
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	
	
        
            
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title section-medium-heading-my-websites white-text">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php iwillbeawebdeveloper_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
		
		<?php
		if (has_post_thumbnail() ) { ?>
            <figure class="featured-image">
                <?php the_post_thumbnail(); ?>
            </figure>
        <?php } ?>
	</header><!-- .entry-header -->

	<div class="section-centre-text-block-blog"> <!-- entry-content class removed -->
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'iwillbeawebdeveloper' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'iwillbeawebdeveloper' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php iwillbeawebdeveloper_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
