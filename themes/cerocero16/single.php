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
				<div class="shares singleshare">
					<textarea><?php the_permalink(); ?></textarea>
					<a class="copylink"><i class="fa fa-link" aria-hidden="true"></i> Copiar el enlace</a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>','Compartir en Facebook','width=600,height=400')"><i class="fa fa-facebook-square" aria-hidden="true"></i> Compartir en Facebook</a>
					<a href="https://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>&amp;via=ceroceromx" target="popup" onclick="window.open('https://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>&amp;via=ceroceromx','Compartir en Twitter','width=600,height=400')"><i class="fa fa-twitter" aria-hidden="true"></i> Compartir en Twitter</a>
					<a href="http://www.reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="popup" onclick="window.open('http://www.reddit.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>','Compartir en Reddit','width=600,height=400')"><i class="fa fa-reddit" aria-hidden="true"></i> Compartir en Reddit</a>
				</div>
				<div class="post-footer">
					<a class="open-share"><i class="material-icons">share</i>Compartir</a>
					<a download="<?php echo $post->slug; ?>" href="<?php echo the_post_thumbnail_url( "full" ); ?>" ><i class="material-icons">file_download</i>Descargar</a>
				</div>
				<div class="facebook">
					<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
				</div>
				<div class="single-footer">
					<?php previous_post_link("%link", "<i class='material-icons'>arrow_back</i> Anterior"); ?>
					<?php next_post_link("%link", "Siguiente <i class='material-icons'>arrow_forward</i>"); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>