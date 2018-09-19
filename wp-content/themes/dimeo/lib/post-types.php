<?php 


add_action( 'init', 'create_position_taxonomy' );

function create_position_taxonomy() {
	register_taxonomy(
		'position',
		'team',
		array(
			'label' => 'Position',
			'hierarchical' => true,
			'public' => true,
			 'has_archive' => false,
		)
	);
}

// Creates Team Custom Post Type
function professionals_init() {
    $args = array(
      'label' => 'Professionals',
        'public' => false,
        'has_archive' => false,
        'menu_position' => 4,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'rewrite' => array( 'slug' => 'professionals', 'with_front' => false ),
        'query_var' => true,
        'menu_icon' => 'dashicons-businessman',
        'supports' => array(
            'title',
            'revisions',
            'thumbnail',
            'page-attributes',
            'author',)
        );
    register_post_type( 'professionals', $args );
}
add_action( 'init', 'professionals_init' );