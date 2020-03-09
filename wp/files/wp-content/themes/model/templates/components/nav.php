<!-- navbar -->
<?php

$theme_vars = json_config_array(__FILE__, 'vars',1);
$nav_logo = ifEmptyText($theme_vars['logo']['value']);
$nav_title = ifEmptyText($theme_vars['title']['value']);
$nav_key_word = ifEmptyText($theme_vars['key_word']['value']);

?>

<div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <h1 class="header-logo" style="background: url(<?php echo $nav_logo; ?>) left 50% no-repeat;">
                        <a href="/"><?php echo $nav_title; echo $nav_key_word; ?></a>
                    </h1>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">

                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'menu_class' => 'navbar-nav ml-auto text-center',
                                        'container' => 'ul',
                                        'container_class' => 'nav-item'
                                    )
                                )
                            ?>
                    <?php endif; ?>
                    
                </div>
            </nav>
        </div>
    </div>