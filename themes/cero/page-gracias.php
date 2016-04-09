<?php get_header();?>

<section id="gracias">
<?php 
	$args = array('post_type'=>'page','posts_per_page'=>'1','pagename'=>'gracias');
	$query = new WP_Query($args);
	while($query->have_posts()):$query->the_post();
?>

<div class="figura">
</div>	

<section class="txt">
<?php the_content(); ?>
</section>
<?php endwhile; ?>
</section>

<?php get_sidebar();?>
<?php get_footer();?>