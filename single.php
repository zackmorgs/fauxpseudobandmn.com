<?php get_header(); ?>

<main id="main_content" class="site-main">
    <article id="post_<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>