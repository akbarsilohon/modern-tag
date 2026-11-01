<?php

add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style(
        'modern-google-font',
        'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap',
        array(),
        null,
        'all'
    );

    wp_enqueue_style(
        'modern-fontawesome', 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css',
        array(), null, 
        'all'
    );

    wp_enqueue_style( 
        'modern-css-main', 
        M_URI . '/assets/css/main.css', 
        array(), 
        fileatime( M_DIR . '/assets/css/main.css'),
        'all'
    );

    wp_enqueue_script(
        'modern-scrip-main', 
        M_URI . '/assets/js/main.js',
        array(),
        fileatime( M_DIR . '/assets/js/main.js'),
        true
    );
});