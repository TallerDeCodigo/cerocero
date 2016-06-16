<?php 
	get_header();
	the_post();
	$fuente = get_post_meta($post->ID, "_fuente_meta", TRUE);
	$url_fuente = get_post_meta($post->ID, "_url_fuente_meta", TRUE);
	$url_fuente = ($url_fuente !== '') ? $url_fuente : "#";  ?>

	<section class="singlepost">
		<div class="wrapper">
			<div class="single-left">
				<?php the_post_thumbnail("large"); ?>
			</div><!--
		 --><div class="single-right">
				<div class="post-header">
					<span>Hace <?php echo human_time_diff( get_the_time('U') ); ?></span>
				<?php
					if($fuente !== ''){ ?>
						<span>Fuente: <a href="<?php echo $url_fuente; ?>"><?php echo $fuente; ?></a></span>
				<?php
					} ?>
				</div>
				<div class="post-content">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="post-footer">
					<a><i class="material-icons">share</i>Compartir</a>
					<a download="<?php echo $post->slug; ?>" href="<?php echo the_post_thumbnail_url( "full" ); ?>" ><i class="material-icons">file_download</i>Descargar</a>
				</div>
				<div class="facebook"></div>
				<div class="single-footer">
					<?php previous_post_link("%link", "<i class='material-icons'>arrow_back</i> Anterior"); ?>
					<?php next_post_link("%link", "Siguiente <i class='material-icons'>arrow_forward</i>"); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>