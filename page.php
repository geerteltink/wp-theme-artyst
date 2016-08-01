<?php get_header(); ?>

<main class="container">
    <div class="row">
        <div class="col-sm-8">
            <?php while (have_posts()) {
                the_post();
                get_template_part('content', 'page');
            } ?>
        </div>

        <?php if (is_active_sidebar('sidebar_home_right')) : ?>
            <aside class="col-sm-4" role="complementary">
                <?php dynamic_sidebar('sidebar_home_right'); ?>
            </aside>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
