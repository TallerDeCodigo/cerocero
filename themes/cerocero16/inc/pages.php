<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// About
		if( ! get_page_by_path('about') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'About',
				'post_name'   => 'about',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// SOMOS
		if( ! get_page_by_path('api') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'api',
				'post_name'   => 'api',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}



	});
