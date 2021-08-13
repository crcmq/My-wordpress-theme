<?php 

// adding the css and js files

function mytheme_setup() {
    wp_enqueue_style('fontawesome',  get_template_directory_uri() . '/fontawesome/css/all.css');
	wp_enqueue_style('highlight',  get_template_directory_uri() . '/highlight/styles/night-owl.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, '1.0.0', true);
    wp_enqueue_script("highlight", get_template_directory_uri() . '/highlight/highlight.min.js');
}

add_action('wp_enqueue_scripts', 'mytheme_setup');


function mytheme_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form'));
}

add_action ('after_setup_theme', 'mytheme_init');

// projects post type

function mytheme_custom_post_type() {
    register_post_type('project', 
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit project'               
            ),
            'menu-icon' => 'dashicons-hammer',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments', 
            )
        )
    );
}

add_action ('init', 'mytheme_custom_post_type');

function mytheme_add_taxonomies_to_project() {
    register_taxonomy_for_object_type ('category', 'project');
    register_taxonomy_for_object_type ('post_tag', 'project');
}
add_action ('init', 'mytheme_add_taxonomies_to_project');

// Add custom post types to default WP categories and tags

function add_custom_types_to_tax( $query ) {
    if( (is_category() || is_tag()) && empty( $query->query_vars['suppress_filters'] ) ) {

        // Get all your post types
        $post_types = get_post_types();

        $query->set( 'post_type', $post_types );
        return $query;
    }
}
add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );


//sidebar
function my_widgets() {
    register_sidebar (
        array (
            'name' => 'Main sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3 class="sidebar-title">',
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'my_widgets');

// Filters
function search_filter($query) {
    if($query->is_search()) {
        $query->set('post_type', array('post', 'project'));
    }
}
add_filter('pre_get_posts', 'search_filter');

