<?
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( "wp_enqueue_scripts", "themeStyle" );
add_action( "wp_enqueue_scripts", "themeScripts" );
add_action( "after_setup_theme", "themeCustom" );

function themeStyle(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'default', get_template_directory_uri() . '/css/default.css' );
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/css/layout.css' );
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/css/media-queries.css' );
}

function themeScripts(){
    wp_deregister_script("jquery");
    wp_enqueue_script("jquery", get_template_directory_uri() . '/js/jquery-1.10.2.min.js', [], false, true);
    wp_enqueue_script("migrate", get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', [], false, true);
    wp_enqueue_script("flexslider", get_template_directory_uri() . '/js/jquery.flexslider.js', [], false, true);
    wp_enqueue_script("doubletaptogo", get_template_directory_uri() . '/js/doubletaptogo.js', [], false, true);
    wp_enqueue_script("init", get_template_directory_uri() . '/js/init.js', [], false, true);
    wp_enqueue_script("modernizr", get_template_directory_uri() . '/js/modernizr.js', [], false, false);
}

function themeCustom(){
    add_theme_support("custom-logo");
	add_theme_support( 'post-thumbnails', ['post', 'portfolio', 'slider', 'team'] );
    register_nav_menu('top-menu', 'Tepa menyu');
    register_nav_menu('bottom-menu', 'Pastki menyu');
}

add_action( 'widgets_init', 'register_widgets' );
function register_widgets(){

	register_sidebar( array(
		'name'          => "Asosiy sahifa matn widgetlari",
		'id'            => "text-widget",
		'description'   => 'Widget panel tarifi',
		'before_widget' => '<div class="columns">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h2>',
		'after_title'   => "</h2>\n",
	) );
    register_sidebar( array(
		'name'          => "Widget ijtimoiy ikonkalari",
		'id'            => "social-icons",
		'description'   => 'Widget ikonka tarifi',
		'before_widget' => false,
		'after_widget'  => false,
		'before_title'  => false,
		'after_title'   => false,
	) );
    register_sidebar( array(
		'name'          => "Asosiy saydbar",
		'id'            => "main-sidebar",
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => "</h5>\n",
	) );
	register_sidebar( array(
		'name'          => "About sahifasining sidebari",
		'id'            => "about-sidebar",
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => "</h5>\n",
	) );

}


add_filter('excerpt_more', fn() => 'fasgsdfggfd');











add_action( 'init', 'register_post' );
function register_post(){
	register_post_type( 'portfolio', [
		'label'  => null,
		'labels' => [
			'name'               => 'portfolio', // основное название для типа записи
			'singular_name'      => 'portfolio', // название для одной записи этого типа
			'add_new'            => 'Добавить portfolio', // для добавления новой записи
			'add_new_item'       => 'Добавление portfolio', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование portfolio', // для редактирования типа записи
			'new_item'           => 'Новое portfolio', // текст новой записи
			'view_item'          => 'Смотреть portfolio', // для просмотра записи этого типа.
			'search_items'       => 'Искать portfolio', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'portfolio', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => "dashicons-portfolio",
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', "thumbnail" ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

register_post_type( 'slider', [
	'label'  => null,
	'labels' => [
		'name'               => 'slider', // основное название для типа записи
		'singular_name'      => 'slider', // название для одной записи этого типа
		'add_new'            => 'Добавить slider', // для добавления новой записи
		'add_new_item'       => 'Добавление slider', // заголовка у вновь создаваемой записи в админ-панели.
		'edit_item'          => 'Редактирование slider', // для редактирования типа записи
		'new_item'           => 'Новое slider', // текст новой записи
		'view_item'          => 'Смотреть slider', // для просмотра записи этого типа.
		'search_items'       => 'Искать slider', // для поиска по этим типам записи
		'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
		'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
		'parent_item_colon'  => '', // для родителей (у древовидных типов)
		'menu_name'          => 'slider', // название меню
	],
	'description'         => '',
	'public'              => true,
	'publicly_queryable'  => true, // зависит от public
	'exclude_from_search' => true, // зависит от public
	'show_ui'             => true, // зависит от public
	'show_in_nav_menus'   => true, // зависит от public
	'show_in_menu'        => true, // показывать ли в меню адмнки
	'show_in_admin_bar'   => true, // зависит от show_in_menu
	'show_in_rest'        => true, // добавить в REST API. C WP 4.7
	'rest_base'           => null, // $post_type. C WP 4.7
	'menu_position'       => 5,
	'menu_icon'           => "dashicons-slides",
	'hierarchical'        => false,
	'supports'            => [ 'title', 'editor', "thumbnail" ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	'taxonomies'          => [],
	'has_archive'         => false,
	'rewrite'             => true,
	'query_var'           => true,
] );




register_post_type( 'team', [
	'label'  => null,
	'labels' => [
		'name'               => 'team', // основное название для типа записи
		'singular_name'      => 'team', // название для одной записи этого типа
		'add_new'            => 'Добавить team', // для добавления новой записи
		'add_new_item'       => 'Добавление team', // заголовка у вновь создаваемой записи в админ-панели.
		'edit_item'          => 'Редактирование team', // для редактирования типа записи
		'new_item'           => 'Новое team', // текст новой записи
		'view_item'          => 'Смотреть team', // для просмотра записи этого типа.
		'search_items'       => 'Искать team', // для поиска по этим типам записи
		'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
		'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
		'parent_item_colon'  => '', // для родителей (у древовидных типов)
		'menu_name'          => 'team', // название меню
	],
	'description'         => '',
	'public'              => true,
	'publicly_queryable'  => true, // зависит от public
	'exclude_from_search' => true, // зависит от public
	'show_ui'             => true, // зависит от public
	'show_in_nav_menus'   => true, // зависит от public
	'show_in_menu'        => true, // показывать ли в меню адмнки
	'show_in_admin_bar'   => true, // зависит от show_in_menu
	'show_in_rest'        => true, // добавить в REST API. C WP 4.7
	'rest_base'           => null, // $post_type. C WP 4.7
	'menu_position'       => 5,
	'menu_icon'           => "dashicons-admin-users",
	'hierarchical'        => false,
	'supports'            => [ 'title', 'editor', "thumbnail" ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	'taxonomies'          => [],
	'has_archive'         => false,
	'rewrite'             => true,
	'query_var'           => true,
] );
