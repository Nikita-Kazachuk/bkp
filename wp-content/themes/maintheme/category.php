<?php get_header(); ?>

<?php
$category = get_queried_object();
?>

<section class="category-hero" style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/content/category.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 category-hero__wrapper">
                <a href="<?php get_template_directory_uri(); ?>/category/services/" class="category-hero__back h6">
                    Все услуги
                </a>
                <div class="category-hero__title h2">
                    <?= $category->name; ?>
                </div>
                <div class="category-hero__description h5">
                    <?= $category->description; ?>
                </div>
                <a href="#contact" class="main-btn category-hero__btn">
                    Получить консультацию
                </a>
            </div>
        </div>
    </div>
</section>

<section class="category">
    <div class="section-wrapper">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Цикл WordPress -->
            <a href="<?php the_permalink(); ?>" class="category-item">
                <div class="category-item__image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="category-item__title h3">
                    <?php the_title(); ?>
                </div>
                <div class="category-item__description h5">
                    <?php the_excerpt(); ?>
                </div>
                <div class="main-btn category-item__btn">
                    Подробнее
                </div>
            </a>
        <?php endwhile; else : ?>
            <p>Записей нет.</p>
        <?php endif; ?>

    </div>
</section>

<?php get_template_part('templates/contact-form') ?>

<?php get_footer(); ?>