<?php /* Template Name: pasos */

get_header(); ?>

<main>
<div class="container">
<h1 class="white-text">Capacitación</h1>
<?php query_posts("showposts=12&category_name=pasos&orderby=title&order=ASC"); ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="row grd-full parallax-container valign-wrapper">
        <div class="textos valign habitat-blue white-text show-on-medium-and-up hide-on-small-only">
            <a href="<?php the_permalink();?>"><h2 class="white-text"><?php the_title(); ?></h2></a>
            <?php the_excerpt(); ?>
        </div>
        <div class="parallax">

            <?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'feature-01'); ?>

            <img class="responsive-img" src="<?php echo $img_url[0];?>"/>
        </div>
    </div>
    <div class="textos-movil valign habitat-blue white-text hide-on-med-and-up show-on-small">
        <a href="<?php the_permalink();?>"><h2 class="white-text"><?php the_title(); ?></h2></a>
        <?php the_excerpt(); ?>
    </div>
    
    <?php endwhile; ?>
</div>
</main>
<?php
get_footer();

