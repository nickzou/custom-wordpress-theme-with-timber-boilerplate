
<?php
    $context = Timber::context();

    get_header(null, $args = $context);

    Timber::render('404.twig', $context);

    get_footer(null, $args = $context);

?>