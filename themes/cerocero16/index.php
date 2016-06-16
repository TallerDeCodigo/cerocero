<?php get_header(); ?>

	
	<section class="topscroll">
		<div class="wrapper">
			<img src="<?php echo THEMEPATH; ?>images/cero.png">
			<img src="<?php echo THEMEPATH; ?>images/mono.png">
			<img src="<?php echo THEMEPATH; ?>images/inicio.png">
		</div>
	</section>
	<section>
		<div class="wrapper post-container">

		<?php 

			if(have_posts()) : while(have_posts()) : 
				the_post();
				$fuente = get_post_meta($post->ID, "_fuente_meta", TRUE);
				$url_fuente = get_post_meta($post->ID, "_url_fuente_meta", TRUE);
				$url_fuente = ($url_fuente !== '') ? $url_fuente : "#"; ?>

			<article class="post">
				<div class="post-header">
					<span>Hace <?php echo human_time_diff( get_the_time('U') ); ?></span>
				<?php
					if($fuente !== ''){ ?>
						<span>Fuente: <a href="<?php echo $url_fuente; ?>"><?php echo $fuente; ?></a></span>
				<?php
					} ?>
				</div>
				<div class="post-content">
					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("large"); ?></a>
				</div>
				<div class="post-footer">
					<a><i class="material-icons">share</i>Compartir</a>
					<a href="<?php the_permalink(); ?>" ><i class="material-icons">chat_bubble_outline</i>Comentar</a>
					<a download="<?php echo $post->slug; ?>" href="<?php echo the_post_thumbnail_url( "full" ); ?>" ><i class="material-icons">file_download</i>Descargar</a>
				</div>
			</article>

		<?php
			endwhile; endif; ?>

	</section>

<?php get_footer(); ?>

