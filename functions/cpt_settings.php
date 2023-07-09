<?php
// [ ] for add settings page in admin:
    // [ ] get this page since function.php
    // [ ] create one post in CPT
    // [ ] uncomment second function (add_custom_cpt_link)
    // [ ] uncomment part for hide CPT legacy entry
    // [ ] uncomment and rewrite id in admin.css
    // [ ] add custom fields with ACF plugin

function cpt_customSiteSettings() {

	// affichées dans l'administration
	$labels = array(
		'name'                => _x( 'options personnalisés du site', 'Post Type General Name'),
		'singular_name'       => _x( 'options personnalisés du site', 'Post Type Singular Name'),
		'menu_name'           => __( 'options personnalisés'),
		'all_items'           => __( 'voir les options'),
		'view_item'           => __( 'voir les options'),
		/* 'add_new_item'        => __( 'Ajouter options personnalisés du site'), */
		/* 'add_new'             => __( 'Ajouter'), */
		'edit_item'           => __( 'Editer les options personnalisés'),
		'update_item'         => __( 'Modifier les options personnalisés'),
		/* 'search_items'        => __( 'Rechercher un établissement'), */
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// options cpt
	
	$args = array(
		'label'               => __( 'options personnalisés'),
		'description'         => __( 'options personnalisés du site'),
		'labels'              => $labels,
		'supports'            => array( 'title', /* 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', */ 'custom-fields', ),

		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => false,
		'rewrite'			  => array( 'slug' => 'customOption'),
        'show_ui' => true,
        'posts_per_page' => 1,
        'showposts' => 1,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'delete_with_user' => false,
	);
	register_post_type( 'siteSettings', $args );

}

add_action( 'init', 'cpt_customSiteSettings', 0 );






// Ajouter un lien vers le post
/* function add_custom_cpt_link() {
    $post_type = 'siteSettings';
    $post_id = get_posts(array(
        'post_type' => $post_type,
        'posts_per_page' => 1,
        'fields' => 'ids'
    ));

    if ($post_id) {
        $link = get_edit_post_link($post_id[0]);
        if ($link) {
            add_menu_page(
                'options personalisées',
                'options personalisées',
                'edit_posts',
                $link,
                '',
                'dashicons-admin-generic',
                75
            );
        }
    }
}
add_action('admin_menu', 'add_custom_cpt_link');
 */







// hide link to CPT and remove add and delete on single article. see admin.css
/* 
function hide_admin_menu_page_sitesettings() {
    remove_menu_page('edit.php?post_type=sitesettings');
}
add_action('admin_menu', 'hide_admin_menu_page_sitesettings');

function admin_css() {
	$admin_handle = 'admin_css';
	$admin_stylesheet = get_template_directory_uri() . '/admin.css';

	wp_enqueue_style($admin_handle, $admin_stylesheet);
}
add_action('admin_print_styles', 'admin_css', 11); */



// snippet to get values of settings

/* $args = array(
    'post_type' => 'siteSettings',
    'posts_per_page' => 1
);

$siteSettings = get_posts($args);

if ($siteSettings) {
    foreach ($siteSettings as $siteSetting) {
        $GLOBALS['siteSetting_fieldName'] = get_field('fieldName', $siteSetting->ID);
        $GLOBALS['siteSetting_fieldName2'] = get_field('fieldName2', $siteSetting->ID);
    }
} */