<?php
// Custom Post Types
function university_post_types(){
	// Event Post
    $labels = array(
		'name'                => _x( 'Events', 'Post Type General Name', 'kd-university' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'kd-university' ),
		'menu_name'           => __( 'Events', 'kd-university' ),
		'parent_item_colon'   => __( 'Parent Event', 'kd-university' ),
		'all_items'           => __( 'All Events', 'kd-university' ),
		'view_item'           => __( 'View Event', 'kd-university' ),
		'add_new_item'        => __( 'Add New Event', 'kd-university' ),
		'add_new'             => __( 'Add New', 'kd-university' ),
		'edit_item'           => __( 'Edit Event', 'kd-university' ),
		'update_item'         => __( 'Update Event', 'kd-university' ),
		'search_items'        => __( 'Search Event', 'kd-university' ),
		'not_found'           => __( 'Not Found', 'kd-university' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'kd-university' ),
	);

	$args = array(
		'label'               => __( 'Events', 'kd-university' ),
		// Rewrite URL to plural
		'rewrite'				=> array('slug' => 'events'),
		'description'         => __( 'Event news and reviews', 'kd-university' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		// To grant CRUD permission to the specific role/user.
		'capability_type'     => 'post',
		'map_meta_cap' => true,
		'show_in_rest' => true,
		'menu_icon'          => __( 'dashicons-calendar' )
	);
	register_post_type( 'event', $args );

	// Program Post
    $program_labels = array(
		'name'                => _x( 'Programs', 'Post Type General Name', 'kd-university' ),
		'singular_name'       => _x( 'Program', 'Post Type Singular Name', 'kd-university' ),
		'menu_name'           => __( 'Programs', 'kd-university' ),
		'parent_item_colon'   => __( 'Parent Program', 'kd-university' ),
		'all_items'           => __( 'All Programs', 'kd-university' ),
		'view_item'           => __( 'View Program', 'kd-university' ),
		'add_new_item'        => __( 'Add New Program', 'kd-university' ),
		'add_new'             => __( 'Add New', 'kd-university' ),
		'edit_item'           => __( 'Edit Program', 'kd-university' ),
		'update_item'         => __( 'Update Program', 'kd-university' ),
		'search_items'        => __( 'Search Program', 'kd-university' ),
		'not_found'           => __( 'Not Found', 'kd-university' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'kd-university' ),
	);

	$args = array(
		'label'               => __( 'Programs', 'kd-university' ),
		// Rewrite URL to plural
		'rewrite'				=> array('slug' => 'programs'),
		'description'         => __( 'Program', 'kd-university' ),
		'labels'              => $program_labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'map_meta_cap' => true,
		'show_in_rest' => true,
		'menu_icon'          => __( 'dashicons-awards' )
	);
	register_post_type( 'program', $args );

	// Professor Post
    $professor_labels = array(
		'name'                => _x( 'Professors', 'Post Type General Name', 'kd-university' ),
		'singular_name'       => _x( 'Professor', 'Post Type Singular Name', 'kd-university' ),
		'menu_name'           => __( 'Professors', 'kd-university' ),
		'parent_item_colon'   => __( 'Parent Professor', 'kd-university' ),
		'all_items'           => __( 'All Professors', 'kd-university' ),
		'view_item'           => __( 'View Professor', 'kd-university' ),
		'add_new_item'        => __( 'Add New Professor', 'kd-university' ),
		'add_new'             => __( 'Add New', 'kd-university' ),
		'edit_item'           => __( 'Edit Professor', 'kd-university' ),
		'update_item'         => __( 'Update Professor', 'kd-university' ),
		'search_items'        => __( 'Search Professor', 'kd-university' ),
		'not_found'           => __( 'Not Found', 'kd-university' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'kd-university' ),
	);

	$args = array(
		'label'               => __( 'Professors', 'kd-university' ),
		// Rewrite URL to plural
		'rewrite'				=> array('slug' => 'professors'),
		'description'         => __( 'Professor', 'kd-university' ),
		'labels'              => $professor_labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 7,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'map_meta_cap' => true,
		'show_in_rest' => true,
		'menu_icon'          => __( 'dashicons-businessperson' )
	);
	register_post_type( 'professor', $args );
} 
add_action('init', 'university_post_types');

// Custom page background banner
function pageBanner($args = NULL){
  if ( !isset($args['title'])) {
    $args['title'] = get_the_title();
  }
 
  if (!isset($args['subtitle'])) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }
 
  if (!isset($args['photo'])) {
    if (get_field('page_banner_background_image') AND !is_archive() AND !is_home() ) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
    }
  }

  ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo'] ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo $args['title']; ?></h1>
      <div class="page-banner__intro">
        <p><?php echo $args['subtitle']; ?></p>
      </div>
    </div>  
  </div>
  <?php
}

function university_files() {
  wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'university_files');

// Theme Support
function university_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
  add_image_size('professorLandscape', 400, 260, true);
  add_image_size('professorPortrait', 480, 650, true);
  add_image_size('pageBanner', 1500, 350, true);
}
add_action('after_setup_theme', 'university_features');

// Custom Query for Post Types
function university_adjust_queries($query){
  // Program Post
  if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()){
    $query->set('posts_per_page', -1);
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
  }

  // Event Post
  if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
      array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
      )
    ));
  }
}
add_action('pre_get_posts', 'university_adjust_queries');

// Redirect subscriber accounts out of admin and onto homepage
function redirectSubsToFrontend() {
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    wp_redirect(site_url('/'));
    exit;
  }
}
add_action('admin_init', 'redirectSubsToFrontend');

// Do not show admin bar
function noSubsAdminBar() {
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    show_admin_bar(false);
  }
}
add_action('wp_loaded', 'noSubsAdminBar');

// Customize Login Screen
function ourHeaderUrl() {
  return esc_url(site_url('/'));
}
add_filter('login_headerurl', 'ourHeaderUrl');

// Add CSS to login screen
function ourLoginCSS() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}
add_action('login_enqueue_scripts', 'ourLoginCSS');

// Change Login header title
function ourLoginTitle() {
  return get_bloginfo('name');
}
add_filter('login_headertitle', 'ourLoginTitle');