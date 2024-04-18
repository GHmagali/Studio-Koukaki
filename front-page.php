<?php

get_header();
?>
<main id="primary" class="site-main">
    <section class="banner">
        <video autoplay loop muted poster="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>" src="<?php echo get_stylesheet_directory_uri() . '/assets/Video/Studio_Koukaki_video_header.mp4'; ?>" type="video/mp4"></video>
        <div class="parallax"><img class="floating" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants"></div>
    </section>
    <section id="story" class="story">
        <h2><span class="animtext1">L'histoire</span></h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php get_template_part('template-parts/swiper'); ?>

        <article id="place">
            <div>
                <h3><span class="animtext1">Le</span> <span class="animtext2">Lieu<span></h3>
                <div class="big-cloud parallax-clouds"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?>" alt="grand nuage"></div>
                <img class="little-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?>" alt="petit nuage">

                <p><?php echo get_theme_mod('place'); ?></p>
            </div>

        </article>
    </section>


    <section id="studio" class="studio">
        <h2><span class="animtext1">Studio</span> <span class="animtext2">Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();
