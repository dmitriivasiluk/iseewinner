<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>
<style media="screen" type="text/css">
.wpcf7
{
	background-color: white;
	text-align: center;
	width: 100%;
}

input.wpcf7-form-control.wpcf7-submit{
	padding: 14px 24px;
	border: 0 none;
	font-weight: 700;
	letter-spacing: 1px;
	text-transform: uppercase;
	border-radius: 24px;
	outline:0;
}

input.wpcf7-form-control.wpcf7-submit.hover {
	background: #33a6cc;
}

.btn-primary:active, .btn-primary.active {
	background: #007299;
	box-shadow: none;
}

</style>
<div class="container">
	<h1 class="contact-header">Обратная связь</h1>
	<?php echo do_shortcode( '[contact-form-7 id="43" title="ContactMe"]' ); ?>
</div>
<?php get_footer(); ?>