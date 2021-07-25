<?php get_header(); ?>

<main>
    <section class="hero">
        <p>Karachi Bachao Tehreek is a campaign to end the demolition of Karachi's working class settlements and markets.</p>
    </section>
    
    <section class="section blog-archive">
        <?php while (have_posts()) {
            the_post(); ?>
                <div class="blog-listing">
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt=""></a>
                    <div class="text">
                        <h3><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <small class="post-date"><?php the_time('j n, Y'); ?></small>
                        <p class="summary block has-text-weight-light is-size-4">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </div>
                <hr>
            <?php  }
        ?>
    </section>
</main>

<?php get_footer(); ?>