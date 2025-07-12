<?php get_header(); ?>

<header id="hero_home" class="hero">
    <div class="hero-bg">
        <video id="hero_video" autoplay muted loop playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/fauxpseudo_bg_compressed.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="hero-content">
        <h1>Faux Pseudo</h1>
        <p>Listen</p>
        <ul class="btn-group">
            <li>
                <a href="" class="btn btn-spotify" target="_blank">
                    <img class="logo-spotify"
                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-spotify.svg"
                        alt="Spotify Icon" />
                </a>
            </li>
            <li>
                <a href="" class="btn btn-apple-music btn-white" target="_blank">
                    <img class="logo-apple-music"
                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-apple-music.svg"
                        alt="Apple Music Icon" />
                </a>
            </li>

        </ul>
    </div>
</header>
<section>
    <div class="content">

    </div>
</section>
<?php get_footer(); ?>