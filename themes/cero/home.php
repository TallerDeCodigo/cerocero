<?php get_header(); ?>


	<section class="logo">
		<h1>Cero Cero MX<img src="<?php echo THEMEPATH; ?>images/logocero.svg"></h1>
	</section>
	
	<!-- <section id="contenido"> 
		<i>Envio correctamente</i>
	</section>
 -->
	<section class="contenido">

		<?php
			$args =  array('post_type'=>'page', 'posts_per_page'=>'1','pagename'=>'intro' );
			$query = new WP_Query($args);
			while($query->have_posts()){$query->the_post();
		?>
			<section class="txt-r">
				<?php the_content(); ?>
			</section>

		<?php }?><!--endwhile-->

		<section class="form-container">
			<span class="txt inscripcion">Inscríbete para recibir nuestras actualizacones.</span>
			<form id="news" method="post" class="forma" action="http://tallerdecodigo.us13.list-manage1.com/subscribe/post">

				<input type="hidden" name="u" value="d57f66c63d9622b29d87cea37">
				<input type="hidden" name="id" value="1518b034be">

				<input type="email" name="MERGE0" id="MERGE0" placeholder="tu correo electrónico">
				<input type="submit" calss="button" name="submit" value="Enviar">
			</form>
		</section>

		<section id="respuesta">
			<!--respuesta de subscrpcion-->
		</section>	

		<section  id="redes">
			<ul>
				<li><a target="_blank" href="https://www.facebook.com/ceroceromx/"><img src="<?php echo THEMEPATH; ?>images/fbW.svg"></a><li>
				<li><a target="_blank" href="https://twitter.com/ceroceromx"><img src="<?php echo THEMEPATH; ?>images/twW.svg"></a><li>
				<li><a target="_blank" href="https://www.instagram.com/ceroceromx/"><img src="<?php echo THEMEPATH; ?>images/inW.svg"></a><li>	
			</ul>	
		</section>

		<section id="disclaimer">
			<p><!-- <a href="<?php echo bloginfo('url')?>/terminos-y-condiciones">Términos y condiciones /</a>  --><a href="<?php echo bloginfo('url')?>/aviso-de-privacidad">Política de privacidad</a></p>
		</section>

	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>