<?php

/**
 * Logo class
 */
add_filter('get_custom_logo', function($html) {
    $html = str_replace('custom-logo"', 'custom-logo svg svg-remove-ids"', $html);
    return $html;
});
