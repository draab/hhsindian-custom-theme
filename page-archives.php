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

			<article id="post-7" class="post-7 page type-page status-publish hentry">
				<header class="entry-header"><h1 class="entry-title">The Indian's Archives</h1></header>
					<div class="entry-content">
					<!-- This is where php code will go to list site archives -->
					</ul>
			</article>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
