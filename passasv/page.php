<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package passasv
 */

get_header(); ?>

<main id="main" class="site-main">
	<div id="publication" class="container white">
		<?php while ( have_posts() ) : the_post();?>
		<div class="post-content white">
			<div class="post-meta">
				<h1><?php the_title() ?></h1>
			</div>
			<div class="post-body flow-text">
				<?php the_content();?>
			</div>

		</div>
		<?php endwhile; ?>
	</div>

</main><!-- #main -->

<?php get_footer();  ?>
