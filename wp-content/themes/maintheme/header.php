<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>БКП - БЕЛКОММУНПРОЕКТ</title>
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width">

    <?php wp_head(); ?>

</head>

<header class="header">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-2">
                <a href="<?= home_url(); ?>" class="header-logo">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/content/logo.png" alt="">
                </a>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="tel:+375173473442" class="header-phone">+37517 347-34-42</a>
                <div class="header-lang">
                    <div class="header-lang__current">
                        RU
                    </div>
                    <div class="header-lang__dropdown">
                        <div class="header-lang__select">
                            EN
                        </div>
                        <div class="header-lang__select">
                            BY
                        </div>
                    </div>
                </div>
                <div class="header-view" id="specialButton">

                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" width="38px" height="20px" viewBox="0 0 38 20"
                         style="overflow:visible;enable-background:new 0 0 38 20;" xml:space="preserve">
							<style type="text/css">
                                .st0 {
                                    opacity: 0.7;
                                    fill-rule: evenodd;
                                    clip-rule: evenodd;
                                    fill: #FFFFFF;
                                    enable-background: new;
                                }
                            </style>
                        <defs></defs>
                        <path id="_127_1_" class="st0"
                              d="M19,0C11.6,0,4.6,3.4,0.2,9.3c-0.3,0.4-0.3,0.9,0,1.3c7.8,10.4,22.6,12.4,33,4.6c1.7-1.3,3.3-2.8,4.6-4.6c0.3-0.4,0.3-0.9,0-1.3C33.4,3.4,26.4,0,19,0z M19,17.6c-6.3,0-12.3-2.8-16.3-7.6c7.5-9,20.9-10.2,29.9-2.7c1,0.8,1.9,1.7,2.7,2.7C31.3,14.8,25.3,17.6,19,17.6z M19,4.7c-2.9,0-5.3,2.4-5.2,5.3c0,2.9,2.4,5.3,5.3,5.2c2.9,0,5.2-2.4,5.2-5.3C24.3,7.1,21.9,4.7,19,4.7z M19,12.9c-1.6,0-2.9-1.3-2.9-3c0-1.6,1.3-2.9,3-2.9c1.6,0,2.9,1.3,2.9,2.9C22,11.6,20.6,12.9,19,12.9z" />
						</svg>
                </div>
                <div class="header-menu">
                    <div class="header-menu_icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<body>
<nav class="nav">
    <div class="nav-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 nav-col">
                    <?php wp_nav_menu( [
                        'theme_location'  => 'top-projects-menu',
                        'container'       => false,
                        'item_wrap'       => '<ul>%3$s</ul>',
                    ] );
                    ?>
                </div>
                <div class="col-lg-3 nav-col">
                    <?php wp_nav_menu( [
                        'theme_location'  => 'top-services-menu',
                        'container'       => false,
                        'item_wrap'       => '<ul>%3$s</ul>',
                    ] );
                    ?>
                </div>
                <div class="col-lg-3 nav-col">
                    <?php wp_nav_menu( [
                        'theme_location'  => 'top-company-menu',
                        'container'       => false,
                        'item_wrap'       => '<ul>%3$s</ul>',
                    ] );
                    ?>
                </div>
                <div class="col-lg-3 nav-col">
                    <?php wp_nav_menu( [
                        'theme_location'  => 'top-contacts-menu',
                        'container'       => false,
                        'item_wrap'       => '<ul>%3$s</ul>',
                    ] );
                    ?>
                </div>
            </div>
        </div>
    </div>
</nav>
