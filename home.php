<?php /* Template Name: Blog Page*/ ?>
<?php get_header(); ?>
<header class="business-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="display-3 text-center text-white mt-4">Business Name or Tagline</h1>
			</div>
		</div>
	</div>
</header>
<div class="container">
	<section class="section extra-margins pb-3 text-center text-lg-left">
		<h3 class="section-heading h1 pt-4">Последние прогнозы</h3>			
		<?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="3"]'); ?> 
		<hr class="mb-5">
	</section>
</div>
<button onclick="topFunction()" id="top">Вверх</button>
<style type="text/css">
	footer{;
		background-color: #353a40; 
		height: 80px;
	}

	button#top {
    position: fixed;
    bottom: 120px;
    right: 70px; 
    border-radius: 20px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #353a40;
    color: white;
    cursor: pointer; 
    padding: 15px;
    float: right;
    display: none;
}

button#top:hover {
    background-color: #555; /* Add a dark-grey background on hover */
}
</style>
<?php get_footer(); ?>