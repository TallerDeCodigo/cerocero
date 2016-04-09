<?php
	get_header(); 


			$apikey = '88d3b02931ad5bd3f881008b39e60330-us13';
			$listid = '7de2b0b5ae';
			$correo = isset($_POST["correo"]) ? $_POST["correo"] : NULL;
			$server = "us13";
			$merge_vars = array('FNAME'=>'null', 'LNAME'=>'null');


			function mc_subscribe($correo, $fname, $apikey, $listid, $server) {

			    $auth = base64_encode( 'LogisticaGeneral:'.$apikey);
			    $data = array(
			        'apikey'        => $apikey,
			        'email_address' => $correo,
			        'status'        => 'pending',
			        'merge_fields'  => array(
			            'FNAME' => $fname
			            )
			        );  
			    
			    $json_data = json_encode($data);
			    $ch = curl_init();
			    curl_setopt($ch, CURLOPT_URL, 'https://us13.api.mailchimp.com/3.0/lists/7de2b0b5ae/members/');
			    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
			        'Authorization: Basic '.$auth));
			    curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/3.0');
			    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
			    curl_setopt($ch, CURLOPT_POST, true);
			    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
			    $result = curl_exec($ch);

			    //echo $result;

			    // if ($debug) {
			    //    // var_dump($result);
			    //     die('<br><br> Te hemos enviado un correo de confirmación, por favor revisa tu correo');
			    // }
			    //die();
			};

			

			if($correo){ 
				mc_subscribe($correo, "", $apikey, $listid, $server);
			}

		
?>


	<section class="logo">
		<h1>Cero Cero MX<img src="<?php echo THEMEPATH; ?>images/logocero.svg"></h1>
	</section>
	

	<section class="contenido">

		

		<?php
			$args =  array('post_type'=>'page', 'posts_per_page'=>'1','pagename'=>'intro' );
			$query = new WP_Query($args);
			while($query->have_posts()){$query->the_post();
		?>
			<section class="txt-rojo">
				<?php the_content(); ?>
			</section>

		<?php } //http://tallerdecodigo.us13.list-manage1.com/subscribe/post ?><!--endwhile-->

		<?php
			if($correo) {
		?>
		<span class="txt inscripcion">Ya empezó el juego, checa tu mail para confirmar tu suscripción.</span>
		<?php

			} else {
		?>
			<section class="form-container">
				<span class="txt inscripcion">Suscríbete para recibir nuestras actualizacones.</span>
				<form id="news" method="POST" class="forma" action="">

					<input type="hidden" name="u" value="88d3b02931ad5bd3f881008b39e60330">
					<input type="hidden" name="id" value="7de2b0b5ae">

					<input type="email" name="correo" id="correo" placeholder="tu correo electrónico">
					<input type="submit" class="button" value="Enviar">
				</form>
			</section>

		<?php } ?>
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