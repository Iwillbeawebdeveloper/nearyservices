<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package iwillbeawebdeveloper
 */

get_header(); ?>
       <section class="section section-contact">
        <span class="anchor" id="latest_blog_posts"></span>
        <div class="section-centre-text-block" >
    <h2 class="section-medium-heading-my-websites white-text blog-page-heading"><?php get_the_title(); ?></h2>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'iwillbeawebdeveloper' ) . '</span><br> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'iwillbeawebdeveloper' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'iwillbeawebdeveloper' ) . '</span><br> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'iwillbeawebdeveloper' ) . '</span> ' .
					'<span class="post-title">%title</span>',
) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
           </div>
</section>
<section class="section section-footer">
<?php

get_sidebar();
get_footer();
?>
</section>
