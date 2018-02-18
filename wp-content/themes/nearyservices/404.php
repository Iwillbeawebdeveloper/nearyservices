<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package iwillbeawebdeveloper
 */

get_header(); ?>
           <section class="section section-reading_list">
        <span class="anchor" id="latest_blog_posts"></span>
        <div class="section-centre-text-block" >
    <h2 class="entry-title section-medium-heading-my-websites blog-index-header">404</h2>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title section-medium-heading-my-websites"><?php esc_html_e( 'You have entered some kind of boundless zone of nothingness - I recommend leaving pretty sharpish...', 'iwillbeawebdeveloper' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					
					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
						if ( iwillbeawebdeveloper_categorized_blog() ) :
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'iwillbeawebdeveloper' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						endif;

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'iwillbeawebdeveloper' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );


					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
               </div>
</section>
<?php
get_footer();
