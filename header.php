        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php bloginfo('name');  ?>
                <?php wp_title(); ?>
                <?php if (is_front_page()) {
                    echo "| ", bloginfo('description');
                } ?></title>
            <?php wp_head() ?>
        </head>

        <body <?php body_class(''); ?>>
            <header class="container-fluid">

                <!--  -->
                <nav class="navbar ">
                    <div class="container-fluid">
                        <?php
                        $logoURL = get_header_image();
                        ?>
                        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img class="logo" src="<?php echo $logoURL ?>" alt=""></a>
                        <div class="logoContent">
                            <span class="line1">High</span>
                            <span class="line2">Rise</span>
                            <span class="line3">Realty</span>
                        </div>
                        <?php
                        wp_nav_menu(
                            array(
                                'menu'              => 'primary-menu',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'false',
                                'menu_class'        => 'navbar-nav desktopNav ms-auto ',
                                'fallback_cb'       => 'wp_bootstrap_navlist_walker::fallback',
                                'walker'            => new wp_bootstrap_navlist_walker()
                            )
                        );
                        ?>

                        <button class="btn  youtube"> <i class="bi bi-youtube"></i>Subscribe</button>
                        <button class="navbar-toggler offCanvasIcon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon "></span>
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class="d-flex mt-3" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>

            </header>