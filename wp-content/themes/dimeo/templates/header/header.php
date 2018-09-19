<header class="top-header d-none d-lg-block">
    <div id="static" class="static">
        <div class="container">
            <div class="row d-flex flex-row justify-content-between align-items-center">
                <div class="header-logo">
                    <a href="/">
                        <img src="/wp-content/themes/dimeo/dist/images/logo-icon.png" alt="">
                    </a>
                </div>

                <div class="d-flex flex-column header-links">
                    <div class="d-flex justify-content-end sup-header-links">
                        <div>
                            <span><?php the_field('header_phone_number', 'option'); ?></span>
                        </div>
                        <?php
                        wp_nav_menu( array(
                        'theme_location'    => 'secondary_navigation',
                        'depth'             => 1,
                        'container'         => 'div',
                        'container_id'      => 'sup-header-links',
                        'container_class'   => 'd-flex align-items-center',
                        'menu_class'        => 'nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())); ?>
                    </div>
                    
                    
                    <div class="main-header-links">
                        <?php
                        wp_nav_menu( array(
                        'theme_location'    => 'primary_navigation',
                        'depth'             => 1,
                        'container'         => 'div',
                        'container_class'   => 'navbar-collapse',
                        'container_id'      => 'main-header-links',
                        'menu_class'        => 'nav justify-content-end',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())); ?>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>

    <div id="sticky" class="sticky">
        <div class="container-fluid blue-bar">
            <div class="d-flex flex-column header-links">
                <div class="container d-flex justify-content-end sup-header-links">
                    <div>
                        <span><?php the_field('header_phone_number', 'option'); ?></span>
                    </div>
                    <?php
                    wp_nav_menu( array(
                    'theme_location'    => 'secondary_navigation',
                    'depth'             => 1,
                    'container'         => 'div',
                    'container_id'      => 'sup-header-links',
                    'container_class'   => 'd-flex align-items-center',
                    'menu_class'        => 'nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())); ?>
                </div>
            </div>
        </div>
        <div class="container-fluid white-bar">
            <div class="container d-flex flex-column justify-content-end"> 
                <div class="d-flex align-items-center justify-content-between">
                    <div class="header-logo">
                        <a href="/">
                            <img src="/wp-content/themes/dimeo/dist/images/logo-full.png" alt="">
                        </a>
                    </div>    
                    <div class="main-header-links justify-content-between">
                        <?php
                        wp_nav_menu( array(
                        'theme_location'    => 'primary_navigation',
                        'depth'             => 1,
                        'container'         => 'div',
                        'container_class'   => 'navbar-collapse',
                        'container_id'      => 'main-header-links',
                        'menu_class'        => 'nav justify-content-end',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</header>
