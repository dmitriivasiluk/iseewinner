<?php /* Template Name: Single Page*/ ?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">
 <h1 style="margin-top: 60px;"><?php the_title(); ?></h1>
 <article><?php the_content(); ?></article>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
