<!DOCTYPE html>
<html <?php //language_attributes(); 
        ?>>

<head>
    <meta charset="<?php //echo bloginfo('charset'); 
                    ?>" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="<?php //nomeAgencia(); 
                                    ?>">
    <meta name="copyright" content="© 2022 <?php //nomeAgencia(); 
                                            ?>" />
    <meta name="robots" content="all" />
    <meta name="robots" content="max-image-preview:standard" />
    <meta name="revisit-after" content="7 days" />
    <meta name="theme-color" />
    <meta name="msapplication-navbutton-color" />
    <meta name="msapplication-TileColor" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <title><?php //s3_title(); 
            ?></title>

    <link rel='stylesheet' href='assets/css/app.css' type='text/css' media='all' />

    <base href="<?php //echo home_url(); 
                ?>" />

    <?php //wp_head(); 
    ?>
</head>

<body <?php //body_class(); 
        ?>>

    <?php //wp_body_open(); 
    ?>

    <header id="topo" class="z-index-10 position-fixed w-100">
        <div class="topo bg-white">
            <div class="container">
                <div class="row d-flex align-items-center w-100 px-3 px-lg-0 py-3">
                    <div class="col-3 text-lg-start mt-2">
                        <a id="brand" href="">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block ">
                        <ul class="nav menu justify-content-center">
                            <li class="nav-item">
                                <a href="" class="nav-link active" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-flex gap-3 justify-content-end px-0">
                        <a href="" class="btn btn-primary font-24 text-white px-4   ">Join us</a>
                    </div>
                </div>
            </div>
        </div>
    </header>