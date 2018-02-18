<!DOCTYPE html>
<?php get_header(); ?>
<head>
    <link rel="stylesheet" href="wp-content/themes/iwillbeawebdeveloper/fonts/stylesheet.css" type="text/css" charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title>I Will Be A Web Developer</title>
</head>
<body>

    <section class="section section-hero4">
        <span class="anchor" id="hero">hero</span>  
        <div class="section-hero-text-block">
        <h1 class="section-large-heading">I will be a web developer</h1>
        <p class="section-name">Portfolio of</p><br>
        <p class="section-large-heading">James Winfield</p>
        </div>      
    </section>


    <section class="section section-about_me">
        <span class="anchor" id="about_me"></span>
        <div class="section-centre-text-block">
        <h2 class="section-medium-heading">About Me</h2>
        <p class="main-centre-text">
                 <?php
$id=2;
$post = get_post($id);
            remove_filter('the_content', 'wpautop');  /* Removes p tag */
$content = apply_filters('the_content', $post->post_content);
echo $content;
add_filter('the_content', 'wpautop');  /* Removes p tag */

?>
        </p>
        </div>
    </section>
    <section class="section section-my_websites">
      <span class="anchor" id="my_websites"></span>
        <div class="section-centre-text-block" >
        <h2 class="section-medium-heading-my-websites">Portfolio</h2>
        </div>
        <div class="outer">
        <div class="flex-container">
       

       
                     <?php
       $args = array( 
    'post_type' => 'portfolio', 
    'posts_per_page' => 12,
    'orderby' => 'rand'
);

$portfolios = new WP_Query( $args );

while ( $portfolios->have_posts() ) : $portfolios->the_post();?>
       
        
            <div class="flexboxbox">
                <a href="http://<?php the_field( "website_link" );?>" target="_blank">
                    <?php the_post_thumbnail(''); ?>
                    <div class="flex-overlay">
                        <div class="flex-site-title"><?php the_title() ?></div>
                        <div class="flex-site-details"><?php echo strip_tags(get_the_term_list( $post->ID, 'language', ' ',', ')); ?></div>
                    </div>
                </a>
            </div>

       <?php endwhile; ?>
       
       
       
       
        </div>
        </div>
    </section>
    <section class="section section-courses">
        <span class="anchor" id="courses"></span>
        <div class="section-centre-text-block " >
        <h2 class="section-medium-heading-my-websites white-text">Courses Completed</h2>
 
          

          
           <p class="main-centre-text widebox">
           <div class="flex-container widebox main-centre-text">
           
                                <?php
       $args = array( 
    'post_type' => 'courses', 
    'posts_per_page' => 6,
    'orderby' => 'asc'
);

$courses = new WP_Query( $args );

while ( $courses->have_posts() ) : $courses->the_post();?>

           <div class="flexboxbox flexcenter">
            <?php the_title(); ?><br><br>
            <?php 

            the_content(); ?>
            </div>
             <?php endwhile; ?>
            
            
            
            </div>
            </p>
        </div>
    </section>
    <section class="section section-reading_list">
        <span class="anchor" id="reading_list"></span>
        <div class="section-centre-text-block" >
        <h2 class="section-medium-heading-my-websites">Reading List</h2>
           <p class="main-centre-text widebox">
           <div class="flex-container widebox main-centre-text">
           
                                           <?php
       $args = array( 
    'post_type' => 'reading', 
    'posts_per_page' => 2,
    'orderby' => 'asc'
);

$reading = new WP_Query( $args );

while ( $reading->have_posts() ) : $reading->the_post();?>
           
           
           
           
           <div class="flexboxbox flexcenter">
            <?php the_title(); ?><br><br>
            <?php 

            the_content(); ?>
            </div>
             <?php endwhile; ?>
             
             
            </div>
            </p>
        </div>
    </section>
    <section class="section section-latest_blog_posts">
        <span class="anchor" id="latest_blog_posts"></span>
        <div class="section-centre-text-block" >
        <h2 class="section-medium-heading-my-websites white-text">Latest Blog Posts</h2>
        <div class="blog-preview-block">
		<?php // Display blog posts on any page @ http://m0n.co/l

		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=4' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<figure class="blog-preview-single"><h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?></figure>

		<?php endwhile; ?>


		<?php wp_reset_postdata(); ?>
        </div>

        
        <btn class="main-button"><a href="blog/">Read My Blog</a></btn>
        </div>
        
    </section>
    <section class="section section-contact">
       <div id="section-for-stars">
        <span class="anchor" id="contact"></span>
        <div class="section-centre-text-block" >
    
        <h2 class="section-medium-heading-my-websites white-text">Contact Me</h2>
        <div class="main-centre-text centred-text">
        <p>You can call me on <a href="tel:07813981920">07813 981 920</a> or <a href="mailto:hello@iwillbeawebdeveloper.co.uk">e-mail me</a>.<br><br>
            <p>You can also find me on the following:</p>

            <li><a href="https://www.twitter.com/iwillbeawebdev" target="_blank">Twitter</a></li>
              <li><a href="http://www.iwillbeawebdeveloper.co.uk/blog/" target="_blank">Blog</a></li>
              <li><a href="https://www.github.com/jamesthemonkeh" target="_blank">Github</a></li>
            <li><a href="https://www.linkedin.com/in/james-winfield-b79b4211?trk=nav_responsive_tab_profile_pic" target="_blank">LinkedIn</a></li>
              <li><a href="http://www.freecodecamp.com/jamesthemonkeh" target="_blank">FreeCodeCamp</a></li>
          <span><p class="snippets" id="message"></p></span>
            </p>
            </div>
        </div>
    </section>
    <section class="section-footer">

        <?php get_footer(); ?>
    </section>

    <script>
        $(document).ready(function() {
            $(window).resize(function() {
  if (window.innerWidth < 1024) {
     ($('.menu-item').addClass('full-width'));
      
  }
 else {
    ($('.menu-item').removeClass('full-width'));
 }
});
                
        });
        
        
        
        $(document).ready(function() {
            $('.menu-item').click(function() {
                $('#site-navigation').removeClass('toggled');
            });
        });
        
        

    </script>
    
</body>