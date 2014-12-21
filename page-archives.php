<!-- Code that runs the date archive page -->
<?php
/**
 * This will override the default page constructor for the twenty fourteen theme. This way the page template does not have to be defined manually.
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<article>
				<header class="entry-header"><h1 class="entry-title">The Indian's Archives</h1></header>
					<div class="entry-content">
					<div id="archivelist" class="2014-2015">
					<h4>2014-2015</h4>
						<ul>
						<?php
 
						// The Query
						query_posts( array ( 'tag' => '2014-2015', 'posts_per_page' => -1 ) );
 
						// The Loop
						while ( have_posts() ) : the_post(); ?>
							<li>
							<em><?php the_time('M'); ?> <?php the_time('j'); ?> <?php the_time('Y'); ?></em> &nbsp; <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> (<?php the_author();?>)
							</li>
 
						<?php endwhile;
 
						// Reset Query
						wp_reset_query();
 
						?>
						</ul>
					</div>
					<div id="archivelist" class="2013-2014">
					<h4>2013-2014</h4>
						<ul>
						<?php
 
						// The Query
						query_posts( array ( 'tag' => '2013-2014', 'posts_per_page' => -1 ) );
 
						// The Loop
						while ( have_posts() ) : the_post(); ?>
							<li>
							<em><?php the_time('M'); ?> <?php the_time('j'); ?> <?php the_time('Y'); ?></em> &nbsp; <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> (<?php the_author();?>)
							</li>
 
						<?php endwhile;
 
						// Reset Query
						wp_reset_query();
 
						?>
						</ul>
					</div>
				<p></p>
			</article>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
