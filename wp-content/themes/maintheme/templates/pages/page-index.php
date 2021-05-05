<?php get_header(); ?>

<section class="hero">
    <div class="hero-bg">
        <video src="<?php echo get_template_directory_uri();?>/assets/img/content/video.mp4" autoplay loop muted></video>
    </div>
    <div class="container">
        <div class="row">
            <?php if( have_rows('slide') ): ?>

                <div class="slider-counter col-lg-1 col-2">
                    <!--Счетчик слайдов-->
                    <div class="slider-counter__value">
						<span>
							01
						</span>
                        <span>
                            <?= count($file = get_field('slide'));?>
						</span>
                    </div>
                    <!--Вертикальная линия-->
                    <div class="slider-counter__range">
                        <div class="slider-counter__range--inner">

                        </div>
                    </div>
                </div>
                <div class="hero-slider__main col-lg-9 col-10">
                    <div class="hero-slider__main--wrapper">

                        <?php while( have_rows('slide') ): the_row();

                            //Переменные
                            $title = get_sub_field('title');
                            $subject = get_sub_field('subject');

                            ?>

                            <a href="news-inner.html" class="hero-slider__main--item">
                                <div class="hero-slider__title">
                                    <?php echo $title;  ?>
                                </div>
                                <div class="hero-slider__bottom">
                                    <div class="hero-slider__subtitle">
                                        <?php echo $subject;  ?>
                                    </div>
                                    <div class="hero-slider__link">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/layout/arrow.svg" alt="">
                                    </div>
                                </div>
                            </a>

                        <?php endwhile; ?>

                    </div>
                </div>
                <div class="hero-slider__nav col-lg-2 col-md-4">
                    <div class="hero-slider__nav--wrapper">
                        <?php

                        $first_sub = true;
                        while( have_rows('slide') ): the_row();

                            //Переменные
                            $title = get_sub_field('title');

                            ?>
                            <div class="hero-slider__nav--item  <?php if($first_sub == true){ echo 'slick-current';} $first_sub = false; ?>">
                                <div class="hero-slider__title">
                                    <?php echo $title; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!--Вывод видео о копании-->

            <?php
            $file = get_field('video_about_company');
            if( !empty($file) ): ?>
            <a href="<?php echo $file['url']; ?>" data-fancybox class="hero-video__link col-lg-12">
                <?php endif; ?>
                <img src="<?= get_template_directory_uri(); ?>/assets/img/layout/play.svg" alt="">
                Видео о компании
            </a>
        </div>
    </div>
</section>

<section class="services-slider">
    <div class="services-slider__nav">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="services-slider__nav--wrapper">

                    <?php
                    $parent_id = 10;

                    # получаем дочерние рубрики
                    $sub_cats = get_categories( array(
                        'child_of' => $parent_id,
                        'hide_empty' => 0
                    ) );
                    if( !empty($sub_cats) ){
                        foreach( $sub_cats as $cat ){ ?>

                            <div class="services-slider__nav--item">
                                <div class="services-slider__image">
                                    <img src="<?= $imgcat = get_field("image",$cat); ?>" alt="">
                                </div>
                                <div class="services-slider__content">
                                    <a href="<?= get_category_link($parent_id); ?>" class="all-services">
                                        Все услуги
                                    </a>
                                    <div class="services-slider__title">
                                        <?= $cat->name; ?>
                                    </div>
                                    <div class="services-slider__content--inner">
                                        <?= $cat->description; ?>
                                    </div>
                                    <a href="<?= get_category_link($cat->term_id); ?>" class="services-slider__link main-btn">
                                        Подробнее
                                    </a>
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

<section class="about">
    <div class="about-bg">
        <img src="<?= get_template_directory_uri() ?>/assets/img/content/bg1.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 about-title">
                БЕЛКОММУНПРОЕКТ
            </div>

            <?php if( have_rows('small-inf') ): ?>

                <div class="col-lg-6">
                    <div class="about-count">

                        <?php while( have_rows('small-inf') ): the_row();

                            $title = get_sub_field('title');
                            $subject = get_sub_field('subject');

                            ?>

                            <div class="about-col">
                                    <span>
                                        <?= $title; ?>
                                    </span>
                                <?= $subject; ?>
                            </div>

                        <?php endwhile; ?>

                    </div>
                    <a href="about.html" class="about-link main-btn">
                        Подробнее о компании
                    </a>
                </div>

            <?php endif; ?>

            <!--Вывод краткой информации-->

            <div class="col-lg-6">
                <div class="about-text" data-aos="fade-left" data-aos-duration="1000">
                    <?php
                    $subject = get_field('subject');
                    if( $subject ):
                        echo $subject;
                    endif; ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="about-partners">
                    <ul>

                        <?php if( have_rows('partners') ): ?>

                            <?php while( have_rows('partners') ): the_row();

                                $link = get_sub_field('link-of-partner');
                                $logo = get_sub_field('logo');

                                ?>

                                <!--Логотипы партнеров-->
                                <li>
                                    <a href="<?= $link; ?>">
                                        <img src="<?= $logo['url']; ?>" alt="">
                                    </a>
                                </li>

                            <?php endwhile; ?>

                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
