<?php

  // REGISTRO DE ESTILOS

  function register_enqueue_style() {
  		$theme_data = wp_get_theme();

  		/* Registrando estilos */
  		wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', null, '1.0.0', 'screen');
  		wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.0/css/all.css', null, '1.0.0', 'screen');
        wp_register_style('googleFont', 'https://fonts.googleapis.com/css?family=Roboto', false);
        wp_register_style('main', get_parent_theme_file_uri('assets/css/style.css'), null, '1.0.0', 'screen');

  		/* Enqueue estilos */
  		wp_enqueue_style('bootstrap');
  		wp_enqueue_style('fontawesome');
        wp_enqueue_style('googleFont');
 		wp_enqueue_style('main');
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

  // REGISTRO DE SCRIPTS

  function register_enqueue_scripts() {
		$theme_data = wp_get_theme();

        wp_deregister_script( 'jquery' ); //si es que no usamos la version que usa WP
        wp_deregister_script( 'jquery-migrate' );


        wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', false, true);
        wp_register_script('Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', false, true);
		wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', null, false);
/*        wp_register_script('bootstrap2', get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jQuery_migrate'), null, true);
*/      /*  wp_register_script('lightbox', get_parent_theme_file_uri('assets/js/lightbox.js'), array('jQuery'), null, true);*/
		/*wp_register_script('mainJS', get_parent_theme_file_uri('assets/js/main.js'), array('jQuery'), null, true);*/
		/* Enqueue Scripts */
        wp_enqueue_script('jQuery');
        wp_enqueue_script('Popper');
        wp_enqueue_script('bootstrap');
/*        wp_enqueue_script('bootstrap2');
*/        /*wp_enqueue_script('lightbox');
		wp_enqueue_script('mainJS');*/
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

/* Logo personalizado */
    function config_custom_logo() {
        add_theme_support( 'custom-logo', array(
            'height'      => 200,
            'width'       => 400,
            'flex-height' => true, //pueden ser adaptados
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
  ));
}

    add_action( 'after_setup_theme', 'config_custom_logo' );

    // Tamaños personalizados de Imágenes
    function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }

  function dl_image_sizes( $sizes ) {

    $add_sizes = array(
      'portfolio-home'		=> __( 'Tamaño de las imágenes del portafolio en el home' ),
      'square'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destada de los post' ),
      'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destada de los post' )
    );

    return array_merge( $sizes, $add_sizes );

  }

  if ( function_exists( 'add_theme_support' ) ) {

    add_image_size( 'portfolio-home', 465, 250, true );
    add_image_size( 'square', 400, 400, true );
    add_image_size( 'post-custom-size', 800, 600, true );
    add_image_size( 'custom-size-blog', 400, 300, true );

    add_filter( 'image_size_names_choose', 'dl_image_sizes' );

  }

  add_action( 'after_setup_theme', 'thumbnails_setup' );

  //menús personalizado

  function menus_setup() {
    	register_nav_menus(
    		array(
    			'header-menu'	=> __( 'Header Menu' ),
    			'footer-menu'	=> __( 'Footer Menu' ),
    		)
    	);
    }

    add_action( 'after_setup_theme', 'menus_setup' );

    //Custom post type //
    // Register Custom Post Type

    // Register Custom Post Type
    function lab_content_post_type() {

    	$labels = array(
    		'name'                  => _x( 'lab_contents', 'Post Type General Name', 'text_domain' ),
    		'singular_name'         => _x( 'lab_content', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'             => __( 'Lab_content', 'text_domain' ),
    		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
    		'archives'              => __( 'Item Archives', 'text_domain' ),
    		'attributes'            => __( 'Item Attributes', 'text_domain' ),
    		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    		'all_items'             => __( 'All Items', 'text_domain' ),
    		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    		'add_new'               => __( 'Add New', 'text_domain' ),
    		'new_item'              => __( 'New Item', 'text_domain' ),
    		'edit_item'             => __( 'Edit Item', 'text_domain' ),
    		'update_item'           => __( 'Update Item', 'text_domain' ),
    		'view_item'             => __( 'View Item', 'text_domain' ),
    		'view_items'            => __( 'View Items', 'text_domain' ),
    		'search_items'          => __( 'Search Item', 'text_domain' ),
    		'not_found'             => __( 'Not found', 'text_domain' ),
    		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    		'featured_image'        => __( 'Featured Image', 'text_domain' ),
    		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    		'items_list'            => __( 'Items list', 'text_domain' ),
    		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    	);
    	$args = array(
    		'label'                 => __( 'lab_content', 'text_domain' ),
    		'description'           => __( 'Personalización de la sección.', 'text_domain' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    		'taxonomies'            => array( 'category', 'post_tag' ),
    		'hierarchical'          => false,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-universal-access',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'page',
    	);
    	register_post_type( 'lab_content', $args );

    }
    add_action( 'init', 'lab_content_post_type', 0 );

    /*// Register Custom Post Type
    function custom_post_type() {

    	$labels = array(
    		'name'                  => _x( 'publications', 'Post Type General Name', 'text_domain' ),
    		'singular_name'         => _x( 'publication', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'             => __( 'Publications', 'text_domain' ),
    		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
    		'archives'              => __( 'Item Archives', 'text_domain' ),
    		'attributes'            => __( 'Item Attributes', 'text_domain' ),
    		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    		'all_items'             => __( 'All Items', 'text_domain' ),
    		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    		'add_new'               => __( 'Add New', 'text_domain' ),
    		'new_item'              => __( 'New Item', 'text_domain' ),
    		'edit_item'             => __( 'Edit Item', 'text_domain' ),
    		'update_item'           => __( 'Update Item', 'text_domain' ),
    		'view_item'             => __( 'View Item', 'text_domain' ),
    		'view_items'            => __( 'View Items', 'text_domain' ),
    		'search_items'          => __( 'Search Item', 'text_domain' ),
    		'not_found'             => __( 'Not found', 'text_domain' ),
    		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    		'featured_image'        => __( 'Featured Image', 'text_domain' ),
    		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    		'items_list'            => __( 'Items list', 'text_domain' ),
    		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    	);
    	$args = array(
    		'label'                 => __( 'publication', 'text_domain' ),
    		'description'           => __( 'Post Type Description', 'text_domain' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    		'taxonomies'            => array( 'category', 'post_tag' ),
    		'hierarchical'          => true,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-format-aside',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'page',
    	);
    	register_post_type( 'paper_post_type', $args );


    }
    add_action( 'init', 'custom_post_type', 0 );
    */

?>
