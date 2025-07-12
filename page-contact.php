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
        <p>Contact us</p>
        <br/>
        <a href="mailto:fauxpseudobandmn@gmail.com" class="btn btn-white">
            Email
        </a>
    </div>
</header>
<!-- <section>
    <div class="content text-center">
                <!-- <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_content(); // This is the important line!
            endwhile;
        endif;
        ?> -->
    </div>
</section> -->
<?php get_footer(); ?>