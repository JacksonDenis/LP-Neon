<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg" href="<?php echo get_template_directory_uri()?>/img/icon-neon.svg">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <link
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/main.min.css" />
        <title><?php bloginfo('name')?> <?php wp_title('')?></title>

        <?php wp_head();?>
    </head>
    <body>
        <header>
            <div class="container">
                <a href="<?php echo get_permalink(get_page_by_path('Home')) ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="" />
                </a>
                <nav>
                <?php
                    $args = array(
                        'menu' => 'Header Principal',
                        'theme_location' => 'header-principal',
                        'container' => false
                    );
                    wp_nav_menu( $args );
                    ?>
                    <!-- <ul>
                        <li><a href="<?php echo get_permalink(get_page_by_path('Blog')) ?>">Produtos Neon</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('Sobre')) ?>">Conta digital PJ</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('Sobre')) ?>">Quem Somos</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('Blog')) ?>">Blog</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('Contato')) ?>">Ajuda</a></li>
                    </ul> -->
                    <button class="btn-secondary white">
                        Abra sua conta digital
                    </button>

                    <button class="btn-mobile">
                        <img src="<?php echo get_template_directory_uri()?>/img/btn-mobile.svg" alt="" />
                    </button>
                </nav>
            </div>
        </header>