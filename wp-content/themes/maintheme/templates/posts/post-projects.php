<section class="category-inner-hero" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 category-hero__wrapper">
                <a href="<?php get_template_directory_uri(); ?>/category/projects/" class="category-hero__back h6">
                    Все проекты
                </a>
                <div class="category-hero__box">
                    <div class="category-hero__title h2">
                        <?= get_the_title();?>
                    </div>
                    </br> </br>
                    <div class="category-hero__description h5">
                        <?= the_excerpt(); ?>
                    </div>
                </div>
                <div class="project-values">
                    <?php
                        $statistics = get_field('statistics');
                        if( !empty($statistics) ){
                            foreach ($statistics as $sub_stat){ ?>
                                <div class="project-value">
                                    <div class="project-value__count h2">
                                        <?= $sub_stat['statistics-inf']; ?>
                                    </div>
                                    <div class="project-value__title h7">
                                        <?= $sub_stat['statistics-sub']; ?>
                                    </div>
                                </div>
                      <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-slider">
    <?php
    $slider = get_field('slider');
    if( !empty($slider) ){
        foreach ($slider as $slide){ ?>
            <a href="<?= $slide['url'] ?>"  data-fancybox="project" class="project-slider__item">
                <img src="<?= $slide['url'] ?>" alt="">
            </a>
            <?php
        }
    }
    ?>
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 content-row">
                <div class="h3">
                    <?= the_title(); ?>
                </div>
                <?= the_content(); ?>
            </div>
            <a href="<?php get_template_directory_uri(); ?>/category/projects/" class="project-back main-btn">
                Все проекты
            </a>
        </div>
    </div>
</section>

<?php get_template_part('templates/contact-form') ?>