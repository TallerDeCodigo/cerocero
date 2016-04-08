<?php get_header(); ?>

<section id="bannerlogo">
	<a href="<?php echo site_url(); ?>">
		<img src="<?php echo THEMEPATH; ?>images/logocero.svg">
	</a>
</section>

<?php
	$args = array('post_type'=>'page','posts_per_page'=>'1','pagename'=>'aviso de privacidad');
	$query = new WP_Query($args);
	while($query->have_posts()){$query->the_post();
?>
	
	<section class="texto">
	<h2 class="titulo">
		<?php the_title();?>
	</h2>
		<?php the_content(); ?>
	</section>
<?php }?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>