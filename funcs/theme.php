<?php

// After Setup theme ---------------------
// ---------------------------------------
add_action('after_setup_theme', function(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus(array(
        'header'        =>  __('Menu Header', 'modern-tag'),
        'footer'        =>  __('Menu Footer', 'modern-tag')
    ));
});


// Int Default Favicon --------------------
if(! get_site_icon_url()){
    add_action('wp_head', function(){
        modern_render_site_icon();
    }, 1 );

    add_action('admin_head', function(){
        modern_render_site_icon();
    }, 1);

    add_action('login_head', function(){
        modern_render_site_icon();
    }, 1);
}
function modern_render_site_icon(){
    $defaulUrl = M_URI . '/assets/image/favicon.jpg'; ?>
    <link rel="shortcut icon" href="<?php echo esc_url( $defaulUrl ); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo esc_url( $defaulUrl ); ?>">
    <?php
}