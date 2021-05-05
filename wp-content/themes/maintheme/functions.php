<?php

//Подключение стилей
add_action('wp_enqueue_scripts', 'add_styles');

//Подключение скриптов
add_action( 'wp_footer', 'add_scripts');

//Подключение меню
add_action('after_setup_theme', 'reg_menus');




function add_styles()
{
    wp_enqueue_style('style-name', get_stylesheet_uri());

    //Облачные стили
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    wp_enqueue_style('bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    wp_enqueue_style('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css');
    wp_enqueue_style('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
    wp_enqueue_style('slick-carousel-v2', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('aos', 'https://unpkg.com/aos@next/dist/aos.css');

    //Основные стили
    wp_enqueue_style('custom-view', get_template_directory_uri() . '/assets/css/custom-view.css');
    wp_enqueue_style('styles.min', get_template_directory_uri() . '/assets/css/styles.min.css');
}






function add_scripts()
{
    //отменяем зарегистрированный jQuery и подключаем свою версию
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js',false, '3.6.0', true);
    wp_enqueue_script('jquery');

    //Подключение JS из каталога
    wp_enqueue_script('custom-view', get_template_directory_uri() . '/assets/js/custom-view.js', array('jquery'));

    //Облачные JS-скрипты
    wp_enqueue_script('bootstrapcdnjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('fancyboxjs', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'));
    wp_enqueue_script('aosjs', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'));
    wp_enqueue_script('slickjs', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'));

    wp_enqueue_script('scripts.min', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'));
}






function reg_menus(){
    register_nav_menu( 'top-projects-menu', 'Меню проекты' );
    register_nav_menu( 'top-services-menu', 'Меню услуги' );
    register_nav_menu( 'top-company-menu', 'Меню компания' );
    register_nav_menu( 'top-contacts-menu', 'Меню контакты' );

    add_theme_support( 'post-thumbnails', array( 'post' ) );
}








//Фильтры проекта

//Фильтр на кол-во слов при выводе, для функции the_excerpt()
add_filter( 'excerpt_length', function(){
    return 20;
} );

//Фильтр на конец текста при выводе, для функции the_excerpt()
add_filter('excerpt_more', function($more) {
    return '...';
});










//Сайдбары проекта

/*add_action( 'init', 'register_post_types' );

function register_post_types(){
    register_post_type( 'projects', [
        'label'  => null,
        'labels' => [
            'name'               => 'Проекты', // основное название для типа записи
            'singular_name'      => 'Проект', // название для одной записи этого типа
            'add_new'            => 'Добавить проект', // для добавления новой записи
            'add_new_item'       => 'Добавление проекта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование проекта', // для редактирования типа записи
            'new_item'           => 'Новый проект', // текст новой записи
            'view_item'          => 'Смотреть проект', // для просмотра записи этого типа.
            'search_items'       => 'Искать проект', // для поиска по этим типам записи
            'not_found'          => 'Не найдено проектов', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => 'Проекты', // для родителей (у древовидных типов)
            'menu_name'          => 'Проекты', // название меню
        ],
        'description'         => 'Запись описывающая проекты на портале',
        'public'              => true,
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-list-view',
    ] );
}*/