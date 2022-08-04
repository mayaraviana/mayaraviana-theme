<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Mayara Viana</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri() . '/style.css' ?>" rel="stylesheet" />
</head>

<body>

    <nav class="fixed-top d-none d-md-block navbar-fixed-top nav-fixed">
        <div class="container">
            <div class="row justify-content-end">
                <?php
                $args = array(
                    'menu' => 'principal',
                    'container' => false
                );
                wp_nav_menu($args);
                ?>
            </div>
        </div>
    </nav>