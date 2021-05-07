<?php
add_theme_support( 'post-thumbnails' );
require get_template_directory() . '/inc/template-tags.php';
wp_enqueue_script('jquery');
wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
wp_localize_script( 'truescript', 'true_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

add_action( 'wp_ajax_myfilter', 'true_filter_function' ); 
add_action( 'wp_ajax_nopriv_myfilter', 'true_filter_function' );
add_action( 'wp_ajax_send_email', 'send_email_function' );

function send_email_function(){
    $to = 'egorov0324@gmail.com';
    $subject = 'Вопрос от ' . $_POST['name'];
    $message = $_POST['text'];
    $headers = array(
        'From: Me Myself <me@example.net>',
        'content-type: text/html',
        'Cc: John Q Codex <jqc@wordpress.org>',
        'Cc: iluvwp@wordpress.org', // тут можно использовать только простой email адрес
    );
    
    wp_mail( $to, $subject, $message, $headers );

	die();
}

function true_filter_function(){
 
	$args = array(
        'paged' => $_POST[ 'paged' ],
		'orderby' => 'date',
		'order'	=> $_POST[ 'date' ]
	);
 
	if( isset( $_POST[ 'categoryfilter' ] )) {
		$args[ 'tax_query' ] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST[ 'categoryfilter' ]
			)
		);
    }
    
    set_query_var('paged', $_POST[ 'paged' ]);
 
	// if( 
	// 	isset( $_POST[ 'featured_image' ] ) && 'on' == $_POST[ 'featured_image' ]
	// ) {
	// 	$args[ 'meta_query' ] = array( 'relation' => 'AND' );
 	// }
 
	query_posts( $args );
 
	if ( have_posts() ) {
      		while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content/content' );
		endwhile;
	} else {
		echo 'Ничего не найдено';
	}
 
	die();
}


?>