<?php
/*
Template Name: Шаблон для вывода новостей
*/
?>
<?php get_header() ?>
    <section class="projects-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-news">
                        <div class="main-news__info col-lg-8">
                        <?php if ( have_posts() ) : the_post(); ?>

                            <div class="main-news__date"><?php the_time('F jS, Y'); ?></div>
                            <div class="main-news__title h4"><?php the_title(); ?></div>
                            <div class="main-news__description h6"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="main-news__button main-btn">
                                Подробнее
                            </a>
                        </div>
                        <div class="main-news__image col-lg-4">
                            <img src="<?php the_post_thumbnail(); ?>">
                        </div>

                        <?php else : ?>
                            <p>Записей нет.</p>
                        <?php endif; ?>
                        <?php rewind_posts(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 projects-wrapper">


                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <!-- Цикл WordPress -->
                        <a href="<?php the_permalink(); ?>" class="projects-item">
                            <div class="projects-item__image">
                                <img src="<?php the_post_thumbnail(); ?>" alt="Изображение записи не загружено">
                            </div>
                            <div class="projects-item__date h8"><?php the_time('F jS, Y'); ?></div>
                            <div class="projects-item__title h6"><?php the_title(); ?></div>
                            <div class="projects-item__bottom">
                                <div class="projects-item__icon">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/layout/arrow-right-white.png" alt="">
                                </div>
                            </div>
                        </a>
                    <?php endwhile; else : ?>
                        <p>Записей нет.</p>
                    <?php endif; ?>


                </div>
                <div class="projects-more main-btn">
                    Показать еще
                </div>
            </div>
        </div>
    </section>

    <section class="contact" style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/content/contact.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-title h3">
                        Консультация
                    </div>
                    <div class="contact-description h5">
                        Отправьте заявку и наши менеджеры ответят
                        на все интересующие вас вопросы
                    </div>

                </div>
                <div class="col-lg-6">
                    <?php echo do_shortcode('[contact-form-7 id="74" title="Consultation" html_class="contact-form"]'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>