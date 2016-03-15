<?php
/**
 * The template for displaying 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate
 * @since Accelerate 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
        	<div class="container-fourofour">
                <img src="/accelerate/wp-content/uploads/2016/03/map.jpg" />
                <div class="fourofour">     
                    <h2>Whoops, Took a Wrong Turn...</h2>
                    <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
                    <p>Feel free to take a look around our blog or some of our featured work.</p>
                </div>
            </div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>