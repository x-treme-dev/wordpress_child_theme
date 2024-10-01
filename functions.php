<?php
 

  // добавить 2 сайдбара с содержимым
 

function register_my_custom_widget() {
      register_sidebar(array(
        'name' => 'Cодержание',
        'id' => 'sidebar_left',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="">',
        'after_title' => '</h2>',
    )); 

    register_sidebar(array(
        'name' => 'Разное',
        'id' => 'sidebar_right',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'register_my_custom_widget');

// Добавляем поддержку логотипа
function my_theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

// Функция для вывода логотипа
function my_custom_logo() {
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        // Если логотип не установлен, можно вывести текст или альтернативное изображение
        echo '<a href="' . esc_url(home_url('/')) . '">Test</a>';
        // Или вывести альтернативное изображение
        // echo '<img src="' . esc_url(get_template_directory_uri() . '/images/default-logo.png') . '" alt="Логотип">';
    }
}





?>