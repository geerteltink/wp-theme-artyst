<?php get_header(); ?>

<main class="container">
    <div class="row">
        <div class="col-sm">
            <?php if (have_posts()) {

                while (have_posts()) {
                    the_post();
                    get_template_part('content', get_post_format());
                }

                the_posts_pagination([
                    'prev_text'          => 'Previous page',
                    'next_text'          => 'Next page',
                    'before_page_number' => '<span class="meta-nav screen-reader-text">Page</span>',
                ]);
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
