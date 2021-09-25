
<?php
    $context = Timber::context();

    get_header(null, $args = $context);

    $context['post'] = new Timber\Post();

    Timber::render('index.twig', $context);

    get_footer(null, $args = $context);

?>