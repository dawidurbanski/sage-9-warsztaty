<?php

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
