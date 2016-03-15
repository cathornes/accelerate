<?php
/**
 * The template for displaying the about page
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


<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); 
		$herobox_text = get_field('herobox_text');
		$herobox_heading = get_field('herobox_heading');
		$section_1_heading = get_field('section_1_heading');
		$section_1 = get_field('section_1');
		$section_1_image = get_field('section_1_image');
		$section_2_heading = get_field('section_2_heading');
		$section_2 = get_field('section_2');
		$section_2_image = get_field('section_2_image');
		$section_3_heading = get_field('section_3_heading');
		$section_3 = get_field('section_3');
		$section_3_image = get_field('section_3_image');
		$section_4_heading = get_field('section_4_heading');
		$section_4 = get_field('section_4');
		$section_4_image = get_field('section_4_image');
		$size = 'thumbnail';
		?>
        
        
        
			<div class='aboutpage-hero'>
				<h1><?php the_content(); ?></h1>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .about-page -->

<section class="our-services">
	<div class="site-content herobox">
    	<h4><?php echo $herobox_heading; ?></h4>
        <p><?php echo $herobox_text; ?></p>
    </div>
</section>

<section class="section-1 about-section">
	<div class="site-content">
    	<div class="icon left-icon">
        	<?php echo wp_get_attachment_image($section_1_image, $size); ?>
        </div>
        
        <div class="icon-text">
    	<h4><?php echo $section_1_heading; ?></h4>
        <p><?php echo $section_1; ?></p>
        </div>
    </div>
</section>

<section class="section-2 about-section">
	<div class="site-content">
    	<div class="icon right-icon">
        	<?php echo wp_get_attachment_image($section_2_image, $size); ?>
        </div>
        
        <div class="icon-text">
    	<h4><?php echo $section_2_heading; ?></h4>
        <p><?php echo $section_2; ?></p>
        </div>
    </div>
</section>

<section class="section-3 about-section">
	<div class="site-content">
    	<div class="icon left-icon">
        	<?php echo wp_get_attachment_image($section_3_image, $size); ?>
        </div>
        
        <div class="icon-text">
    	<h4><?php echo $section_3_heading; ?></h4>
        <p><?php echo $section_3; ?></p>
        </div>
    </div>
</section>

<section class="section-4 about-section">
	<div class="site-content">
    	<div class="icon right-icon">
        	<?php echo wp_get_attachment_image($section_4_image, $size); ?>
        </div>
        
        <div class="icon-text">
    	<h4><?php echo $section_4_heading; ?></h4>
        <p><?php echo $section_4; ?></p>
        </div>
    </div>
</section>

<section class="about-section work-with-us">
	<div class="site-content border">
    	<div class="call-to-action">
    			<h2>Interested in working with us?</h2>
        		<a href="accelerate/contact-us/" class="button about-cta">Contact Us</a>
            </div>
         </div>
    </div>
</section>
    


<?php get_footer(); ?>