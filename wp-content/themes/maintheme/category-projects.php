<?php get_header(); ?>

<section class="projects-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="projects-hero__title h2">
                    Проекты
                </div>
            </div>
            <div class="col-lg-12 projects-hero__filter">
                <ul>
                    <li class="active" data-filter="all">
                        Все
                    </li>
                    <?php
                    $parent_id = 10;//ID - рубрики услуги

                    # получаем дочерние рубрики
                    $sub_cats = get_categories( array(
                        'child_of' => $parent_id,
                        'hide_empty' => 0
                    ) );
                    if( $sub_cats ){
                        foreach( $sub_cats as $cat ){?>
                            <li data-filter="<?= $cat->cat_ID; ?>">
                                <?= $cat->name; ?>
                            </li>
                        <?php }

                        wp_reset_postdata(); // сбрасываем глобальную переменную пост
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="projects">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 projects-wrapper">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- Цикл WordPress -->
                    <?php
                    $category = get_the_category();
                    if($category[0]->term_id != 15){
                        $category_name = $category[0]->name;
                        $category_data = $category[0]->term_id;
                    } else {
                        $category_name = $category[1]->name;
                        $category_data = $category[1]->term_id;
                    }
                    ?>
                    <a href="<?php the_permalink() ?>" class="projects-item" data-show="<?= $category_data; ?>">
                        <div class="projects-item__image">
                            <img src="<?php the_post_thumbnail(); ?>" alt="">
                        </div>
                        <div class="projects-item__title h6">
                            <?php the_title(); ?>
                        </div>
                        <div class="projects-item__bottom">
                            <div class="projects-item__description">
                                <?= $category_name; ?>
                            </div>
                            <div class="projects-item__icon">
                                <img src="<?= get_template_directory_uri();?>/assets/img/layout/arrow-right-white.png" alt="">
                            </div>
                        </div>
                    </a>
                <?php endwhile; else : ?>
                    <p>Записей нет.</p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>


<?php
get_template_part('templates/contact-form');
get_footer();
?>
