<?php /* Template Name: Equipo */

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
