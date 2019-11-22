<?php

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    // remove jquery on the front end if not in customizer
    global $wp_customize;

    if (empty($wp_customize)) {
      wp_dequeue_script('jquery');
      wp_deregister_script('jquery');
    }

    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), [], null, true);

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 100);

// usuń
add_theme_support('soil-jquery-cdn');
