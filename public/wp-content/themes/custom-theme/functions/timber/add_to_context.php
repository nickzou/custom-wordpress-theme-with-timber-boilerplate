
<?php

function add_to_context() {
    $context = Timber::get_context();
    $context['menus'] = [
        'main_menu' => new Timber\Menu( 'main' ),
        'footer_menu' => new Timber\Menu('footer'),
    ];

    return $context;
}

add_action('timber/context', 'add_to_context');