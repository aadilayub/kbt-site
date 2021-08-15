<?php get_header(); ?>

<main>
    <section class="hero">
        <p>Karachi Bachao Tehreek is a campaign to end the demolition of Karachi's working class settlements and markets.</p>
    </section>
    
    <section class="section resources">
        <h2 class="title h2">Resources</h2>
        <div class="columns pt-5">
            <div class="column is-one-quarter">
                <div class="card">
                    <a href="https://karachibachaotehreek.org/docs/gujjar-nala-report.pdf">
                        <header class="card-header">
                            <p class="card-header-title">Report on Gujjar Nala Demolitions</p>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                The Karachi Bachao Tehreek conducted 80 surveys within three settlements located along the Gujjar Nullah to assess the potential impact on the people most vulnerable to the anti-encroachment drive.
                            </div>
                        </div>
                        <!-- <footer class="card-footer">
                            <a href="https://karachibachaotehreek.org/docs/gujjar-nala-report.pdf" class="card-footer-item">Read</a>
                            <a href="https://karachibachaotehreek.org/docs/gujjar-nala-report.pdf" class="card-footer-item" download>Download</a>
                        </footer> -->
                    </a>
                </div>                
            </div>
            <div class="column is-one-quarter">
                <div class="card">
                    <a href="https://karachibachaotehreek.org/docs/demolitions-map.pdf">
                        <header class="card-header">
                            <p class="card-header-title">Map of Demolitions</p>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                PDF of the aerial survey commissioned from NED by the Karachi Metropolitan Corporation on which the Gujjar Nullah demolitions are based.
                            </div>
                        </div>
                        <!-- <footer class="card-footer">
                            <a href="https://karachibachaotehreek.org/docs/demolitions-map.pdf" class="card-footer-item">Read</a>
                            <a href="https://karachibachaotehreek.org/docs/demolitions-map.pdf" class="card-footer-item" download>Download</a>
                        </footer> -->
                    </a>
                </div>                
            </div>
        </div>

    </section>

    <section class="section blog-archive">
        <h2 class="title h2">Blog</h2>
        <?php while (have_posts()) {
            the_post(); ?>
                <div class="blog-listing">
                    <a href="<?php  the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt=""></a>
                    <div class="text">
                        <h3><a class="title is-size-4" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="post-date py-2 has-text-weight-light"><?php the_time('j F, Y'); ?></div>
                        <p class="summary block has-text-weight-light is-size-6">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                    </div>
                </div>
                <hr>
            <?php  }
        ?>
    </section>
</main>

<?php get_footer(); ?>