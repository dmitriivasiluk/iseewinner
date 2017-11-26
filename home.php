<?php /* Template Name: Blog Page*/ ?>
<?php get_header(); ?>

<div class="container">
	<section class="section extra-margins pb-3 text-center text-lg-left">
		<h3 class="section-heading h1 pt-4">Последние прогнозы</h3>
		<?php if(have_posts()) : 
		while(have_posts()) : the_post(); ?>								
		<div class="row">
			<div class="col-lg-4 mb-4">
				<div class="view overlay hm-white-slight z-depth-1-half">
					<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
					<img src="<?php echo $url ?>" class="img-fluid" alt="featured-image">
					<a>
						<div class="mask"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-7 ml-xl-4 mb-4">
				<a class="cyan-text"><h6 class="pb-1"></i><strong>Когда: 26 Ноября</strong></h6></a>
				<h4 class="mb-3"><a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a></h4>
				<p><?php the_content(); ?></p>
			</div>
		</div>
		<hr class="mb-5">
	<?php endwhile; ?>
<?php endif; ?>  
</section>
</div>

<?php get_footer(); ?>