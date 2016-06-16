<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){

		add_meta_box( 'extra_info_metabox', 'Extra info', 'extra_info_callback', 'post', 'side', 'high' );

	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	function extra_info_callback($post){
		$fuente = get_post_meta($post->ID, '_fuente_meta', TRUE);
		$url_fuente = get_post_meta($post->ID, '_url_fuente_meta', TRUE);
		wp_nonce_field(__FILE__, '_fuente_meta_nonce');
		echo "<label for='fuente'>Fuente:<label/>";
		echo "<input type='text' class='widefat' id='fuente' name='_fuente_meta' value='$fuente'/>";
		echo "<label for='url_fuente'>Url de la fuente:<label/>";
		echo "<input type='text' class='widefat' id='url_fuente' name='_url_fuente_meta' value='$url_fuente'/>";
	}



// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id)) 
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ) 
			return $post_id;
		
		
		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) ) 
			return $post_id;


		if ( isset($_POST['_fuente_meta']) and check_admin_referer(__FILE__, '_fuente_meta_nonce') ){
			update_post_meta($post_id, '_fuente_meta', $_POST['_fuente_meta']);
		}
		
		if ( isset($_POST['_url_fuente_meta']) and check_admin_referer(__FILE__, '_fuente_meta_nonce') ){
			update_post_meta($post_id, '_url_fuente_meta', $_POST['_url_fuente_meta']);
		}


		// Guardar correctamente los checkboxes
		/*if ( isset($_POST['_checkbox_meta']) and check_admin_referer(__FILE__, '_checkbox_nonce') ){
			update_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, '_checkbox_meta');
		}*/


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////
