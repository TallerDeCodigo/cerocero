<?php 
	header( 'Content-type: application/json' );
	$args = array(
			'post_type'			=> 'post',
			'posts_per_page'	=> -1
		);

	$posts = get_posts($args);
	foreach($posts as $post): setup_postdata($post);

		 $grafico[] = array(
		 	'id'		=> $post->ID,
		 	'date'		=> get_the_date('Y/m/d g:i:s A '),
		    'name' 		=> get_the_title(),
		    'thumbnail' => wp_get_attachment_url(get_post_thumbnail_id($post->ID)),
		  );

	endforeach;

	echo json_encode( $grafico );