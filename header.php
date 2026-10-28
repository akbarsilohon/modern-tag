<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php  bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope itemtype="https://schema.org/Blog">
    <?php 
    $option = get_option('modern', []);
    $logo = null;
    if( isset($option['logo']) && !empty($option['logo'])){
        $logo = esc_url($option['logo']);
    } else {
        $logo = esc_url( M_URI . '/assets/image/logo.jpg' );
    }
    ?>
    <header class="header" id="header">
        <a href="<?php echo home_url(); ?>" class="brand_url">
            <img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" class="brand_image">
            <h1 class="denone"><?php bloginfo( 'name' ); ?></h1>
        </a>
    </header>