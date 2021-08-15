<?php get_header(); ?>

<main class="blog" style="border-top: 1px solid hsla(0, 0%, 47.8%, 0.22);">
    <!-- .section -->
    <section class="section is-paddingless-horizontal" style="padding-top: 0;">
        <div class="container grid">

            <!-- .section -->
            <div class="section is-paddingless-horizontal" style="padding-bottom: 1.5rem;">
                <h1 class="title is-3"><?php the_title(); ?></h1>
                <h2 class="subtitle is-4 py-2 has-text-grey"><?php echo get_the_date('j F, Y'); ?></h2>
            </div>
            <!-- /.section -->

            <div class="content">
                <?php echo the_content(); ?>
            </div>
        </div>
    </section>
    <!-- /.section -->
</main>

<?php get_footer(); ?>