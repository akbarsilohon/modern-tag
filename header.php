<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php  bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php 
    $option = get_option('modern', []);
    $logo = null;
    if( isset($option['logo']) && !empty($option['logo'])){
        $logo = esc_url($option['logo']);
    } else {
        $logo = esc_url( M_URI . '/assets/image/logo.png' );
    }
    ?>
    <header class="header" id="modern_header">
        <div class="header_inner">
            <div class="modern_inleft">
                <span class="menu_open" id="showFlexbox">
                    <i class="fa-solid fa-bars"></i>
                </span>
                <a href="<?php echo home_url(); ?>" class="brand_url">
                    <img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" class="brand_image">
                    <h1 class="denone"><?php bloginfo( 'name' ); ?></h1>
                </a>
            </div>
            <div class="modern_inright">
                <div class="menu_header">
                    <div class="search_action_desk" id="search_action_desk">
                        <form action="<?php echo home_url('/'); ?>" method="get">
                            <input type="text" name="s" id="desk_search" placeholder="Search.." value="<?php echo $s; ?>" require autocomplete="off" />
                            <button type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>

                    <div class="header_primary_menu" id="header_primary_menu">
                        <?php wp_nav_menu(array(
                            'theme_location'        =>  'header',
                            'container'             =>  'ul',
                            'container_class'       =>  'modern_menu_header',
                            'fallback_cb'           =>  false,
                            'menu_class'            =>  'modern_menu_header_inner',
                            'menu_id'               =>  'modern_menu_header_inner'
                        )); ?>
                    </div>
                </div>

                <span class="search_open" id="searchOpen">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
            </div>
        </div>
    </header>

    <div class="header_spacer"></div>
    
    <div class="modern_flexbox_menu" id="modern_flexbox_menu">
        <div class="flexbox_header">
            <a href="<?php echo home_url('/'); ?>" class="flexbox_tohome">
                <img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" class="flexbox_logo">
            </a>
            <span class="flexbo_close" id="flexboxClose">
                <i class="fa-solid fa-xmark"></i>
            </span>
        </div>
        <div class="flexbox_body">
            <form action="<?php echo home_url('/'); ?>" method="get" class="flexbox_search">
                <input type="text" name="s" id="flexbox_input" required autocomplete="off" placeholder="Search" value="<?php echo $s; ?>">
            </form>
            <?php wp_nav_menu(array(
                'theme_location'        =>  'header',
                'container'             =>  'ul',
                'container_class'       =>  'modern_menu_flexbox',
                'fallback_cb'           =>  false,
                'menu_class'            =>  'modern_menu_flexbox_inner',
                'menu_id'               =>  'modern_menu_flexbox_inner'
            )); ?>
        </div>
    </div>