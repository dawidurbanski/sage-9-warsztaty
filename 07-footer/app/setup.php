<?php

$config = [
    'before_widget' => '<section class="c-widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="c-widget__title">',
    'after_title'   => '</h3>'
];

// Footer widget areas
register_sidebar([
    'name'          => __('Footer kolumna 1', 'sage'),
    'id'            => 'sidebar-footer-1'
] + $config);

register_sidebar([
    'name'          => __('Footer kolumna 2', 'sage'),
    'id'            => 'sidebar-footer-2'
] + $config);

register_sidebar([
    'name'          => __('Footer kolumna 3', 'sage'),
    'id'            => 'sidebar-footer-3'
] + $config);

register_sidebar([
    'name'          => __('Footer kolumna 4', 'sage'),
    'id'            => 'sidebar-footer-4'
] + $config);
