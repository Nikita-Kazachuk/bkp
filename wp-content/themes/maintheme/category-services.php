<?php get_header(); ?>

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class=" services-title h2">
                    Услуги
                </div>
            </div>
            <div class="col-lg-9">
                <div class="services-description h5">
                    <?php
                    $category_id = 10;
                    $category = get_category($category_id);
                    echo $category->description;
                    $sub_cats = get_term_children($category_id, 'category');
                    foreach ($sub_cats as &$sub_cat)
                        $sub_cat = get_category($sub_cat);
                    $index = -1;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="services-wrapper">
        <?php
            $classes = array('energy', 'building', 'waste', 'consulting', 'water');

            $template = function ($category, $classes, &$index){
                $index++;
                return '<a href="'. get_category_link($category[$index]->term_id) .'" class="services-item '. $classes[$index] .'">
                    <div class="services-item__image">
                        <img src="'. get_field('image', $category[$index]) .'" alt="Изображение не загружено">
                    </div>
                    <div class="services-item__content">
                        <div class="services-item__title h3">
                            '. $category[$index]->name .'
                        </div>
                        <div class="services-item__description h5">
                            '. $category[$index]->description .'
                        </div>
                        <div class="services-item__btn main-btn">
                            Подробнее
                        </div>
                    </div>
                </a>';
            }
        ?>

        <div class="services-box">
            <div class="services-row">
                <?= $template($sub_cats, $classes, $index); ?>
            </div>
            <div class="services-row">
                <?= $template($sub_cats, $classes, $index); ?>
            </div>
        </div>


        <div class="services-col">
            <?= $template($sub_cats, $classes, $index); ?>
        </div>


        <div class="services-row">
            <?= $template($sub_cats, $classes, $index); ?>
            <?= $template($sub_cats, $classes, $index); ?>
        </div>


    </div>
</section>

<?php get_footer(); ?>