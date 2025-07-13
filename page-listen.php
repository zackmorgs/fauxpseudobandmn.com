<?php get_header(); ?>

<header id="hero_home" class="hero">
    <div class="hero-bg">
        <video id="hero_video" autoplay muted loop playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/fauxpseudo_bg_compressed.mp4"
                type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="hero-content">
        <h1>Faux Pseudo</h1>
        <p>Listen</p>
        <br/>
        <a href="https://fauxpseudomn.bandcamp.com/" class="btn btn-bandcamp btn-white" target="_blank">
            <img class="logo-bandcamp"
                src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-bandcamp.svg"
                alt="Apple Music Icon" />
        </a>
        <br />
        <br />
        <a href="https://open.spotify.com/artist/2cHwbRGrjNARNJtTJCCEDQ" class="btn btn-spotify" target="_blank">
            <img class="logo-spotify" src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-spotify.svg"
                alt="Spotify Icon" />
        </a>
        <br />
        <br />
        <a href="" class="btn btn-apple-music btn-white" target="_blank">
            <img class="logo-apple-music"
                src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-apple-music.svg"
                alt="Apple Music Icon" />
        </a>
        <br />
        <br />
        <a href="https://soundcloud.com/user-264293094" class="btn btn-soundcloud btn-white" target="_blank">
            <img class="logo-soundcloud"
                src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-soundcloud.svg"
                alt="SoundCloud Icon" />
        </a>
        <br />
        <br />
        <a href="https://www.deezer.com/en/artist/276713361" class="btn btn-deezer btn-white" target="_blank">
            <img class="logo-deezer" src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-deezer.svg"
                alt="Deezer Icon" />
        </a>

    </div>
</header>
<section id="content_bandcamp">
    <div class="content">
        <iframe style="border: 0; width: 350px; height: 470px;"
            src="https://bandcamp.com/EmbeddedPlayer/album=470608323/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/transparent=true/"
            seamless><a href="https://fauxpseudomn.bandcamp.com/album/chronicles-of-the-lady-killer">Chronicles Of The
                Lady Killer by Faux Pseudo</a></iframe>
    </div>
</section>
<?php get_footer(); ?>