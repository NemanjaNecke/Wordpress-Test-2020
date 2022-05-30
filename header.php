<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js jquery-loading lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>         <html class="no-js jquery-loading lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]>         <html class="no-js jquery-loading lt-ie9"> <![endif]-->

<!--[if gt IE 8]> <html class="no-js jquery-loading"> <![endif]-->
    <html <?php language_attributes(); ?> >
        <head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
            <meta name="viewport" content="width=device-width">
            <meta name = "format-detection" content = "telephone=no">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
            <!--[if lt IE 9]>
            <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
            <![endif]-->
            <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>
        <div class="container-fluid">
            