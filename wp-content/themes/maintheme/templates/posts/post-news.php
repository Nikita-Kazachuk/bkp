<section class="news-inner-hero" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 category-hero__wrapper">
                <a href="<?php get_template_directory_uri(); ?>/category/news/" class="category-hero__back h6">
                    Все новости
                </a>
                <div class="news-date h6"><?= get_the_time('F jS, Y'); ?></div>
                <div class="category-hero__title h2"><?= get_the_title(); ?></div>
                <div class="category-hero__description h5"><?php the_excerpt(); ?></div>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 content-row">
                <?php the_content();?>
            </div>
            <a href="<?php get_template_directory_uri(); ?>/category/news/" class="projects-more main-btn">Все новости</a>
        </div>
    </div>
</section>