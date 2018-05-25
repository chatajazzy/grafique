<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
			
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.6.0/tiny-slider.css">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'grafique');?></a>


<body>
    <header class="header <?= (is_home() && !is_front_page()) ? 'header--blog' : '' ?>">
        <div class="mobile-nav">
            <div class="container">
                <button class="mobile-nav__trigger">
                    <span class="mobile-nav__bar"></span>
                    <span class="mobile-nav__bar"></span>
                    <span class="mobile-nav__bar"></span>
                </button>
                <div class="mobile-nav__search">
                    <i class="fas fa-search"></i>
                </div>
						</div>
						<?php
wp_nav_menu(
    array(
        'theme_location' => 'primary',
        'container' => 'nav',
        'container_class' => 'nav nav--mobile-menu',
        'menu_class' => 'container',
    )
);
?>
        </div>
        <div class="container">
            <div class="header__content">
                <div class="logo">
                    <a href="#" class="logo__link">
                        <img src="<?php bloginfo('stylesheet_directory')?>/img/invert-logo.png" alt="Grafique logo" class="logo__img">
                    </a>
                    <span class="logo__text">Architect</span>
                </div>
                <ul class="socials">
                    <li class="socials__item">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="socials__item">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="socials__item">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
						<?php
wp_nav_menu(
    array(
        'theme_location' => 'primary',
        'container' => '',
        'container_class' => '',
        'menu_class' => 'nav',
    )
);
?>
            <div class="nav__search">
                <i class="fas fa-search"></i>

            </div>
            <ul class="socials socials--desktop">
                <li class="socials__item">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                </li>
                <li class="socials__item">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>

                </li>
                <li class="socials__item">
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
