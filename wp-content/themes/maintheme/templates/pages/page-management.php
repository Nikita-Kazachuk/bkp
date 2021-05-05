<section class="jumbotron">
    <?php
    $slider = get_field('slider');
    if( !empty($slider) ) : ?>
    <div class="management-slider">
        <?php foreach ($slider['employee'] as $slide) : ?>
        <div class="management-slider__item">
            <?php print_r($slide); ?>
            <img src="<?= $slide['image']; ?>" alt="">
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <div class="jumbotron-nav">
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'side-menu',
        ) );
        ?>
    </div>
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron-title h2">
                        Руководство
                    </div>
                </div>
                <div class="slider-counter col-lg-1 col-md-2">
                    <div class="slider-counter__value">
                            <span>01</span>
                            <span>00</span>
                    </div>
                    <div class="slider-counter__range">
                        <div class="slider-counter__range--inner">

                        </div>
                    </div>
                </div>
                <div class="hero-slider__main col-lg-9 col-10">
                    <div class="hero-slider__main--wrapper">
                        <?php
                        $slider = get_field('slider');
                        if( !empty($slider) ) :
                            foreach ($slider['employee'] as $employee) : ?>
                                <div class="hero-slider__main--item">
                                    <div class="hero-slider__title h4">
                                        <?php
                                            $name = explode(" ", $employee['name']);
                                            if(count($name) == 3)
                                                echo $name[0].' '. $name[1].'<br>'.$name[2];
                                            elseif (count($name) == 2)
                                                echo $name[0].' '. $name[1];
                                            else
                                                echo ' ';
                                        ?>
                                    </div>
                                    <div class="hero-slider__bottom">
                                        <div class="hero-slider__subtitle">
                                            <?= $employee['post'] ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="hero-slider__nav col-lg-2 col-md-4">
                    <div class="hero-slider__nav--wrapper">

                        <?php
                        $slider = get_field('slider');
                        if( !empty($slider) ) :
                            $slick_currnet = true;
                            foreach ($slider['employee'] as $employee) : ?>
                                <div class="hero-slider__nav--item <?php if($slick_currnet == true) echo 'slick-current'; $slick_currnet = false?>">
                                    <div class="hero-slider__title">
                                        <?= $employee['post'] ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>


                    </div>
                </div>
                <a href="<?php get_template_directory_uri(); ?>\treatment" class="main-btn management-btn col-lg-12">
                    Обращения
                </a>
            </div>
        </div>
    </div>
</section>

<?php
$group_of_employees = get_field('group_of_employyes');
if( !empty($group_of_employees) ) : ?>
<section class="boss">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="boss-title h4">
                    <?= $group_of_employees[0]['title']; ?>
                </div>
            </div>

            <?php $employees =  $group_of_employees[0]['emlpoyyes'];
                if(!empty($employees)) :
                    foreach ($employees as $employee) : ?>

                    <div class="col-lg-3 col-md-6 boss-item">
                        <div class="boss-item__wrapper">
                            <div class="boss-item__image">
                                <img src="<?= $employee['image'] ?>" alt="">
                            </div>
                            <div class="boss-item__title">
                                <?= $employee['name'] ?>
                            </div>
                            <div class="boss-item__role">
                                <?= $employee['post'] ?>
                            </div>
                        </div>
                    </div>

            <?php endforeach;
                endif; ?>

        </div>
    </div>
</section>
<?php endif; ?>