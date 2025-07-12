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
        <p>Faux Pseudo is a Rochester-based rock band fusing 60s pop melodies with 90s grit, delivering raw, compelling
            stories with a modern DIY edge.</p>
        <a href="/listen/" class="btn btn-primary">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon-play-circle.svg" alt="Play Icon" />
        </a>

        <ul class="btn-group social">
            <li>
                <a href="https://www.facebook.com/FauxPseudoBand" class="btn btn-white  btn-facebook" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-facebook.svg"
                        alt="Facebook Icon" />
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/fauxpseudobandmn/?hl=en" class="btn btn-white  btn-instagram" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-instagram.svg"
                        alt="Instagram Icon" />
                </a>
            </li>    
            <li>
                <a href="https://www.threads.com/@fauxpseudobandmn" class="btn btn-white btn-threads" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-threads.svg"
                        alt="Threads Icon" />
                </a>
            </li>
        </ul>
        <a href="https://www.tiktok.com/@fauxpseudoofficial?_t=8keqRvs0oYg&_r=1" class="btn btn-white btn-tiktok" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-tiktok.svg" alt="TikTok Icon" />
        </a>
    </div>
</header>
<section id="content_shows">
    <div class="content text-center">
        <h2>Upcoming Shows</h2>
        <a href="/shows" class="btn btn-secondary">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/icon-calendar.svg" alt="Calendar Icon" />
        </a>
    </div>
</section>

<?php get_footer(); ?>