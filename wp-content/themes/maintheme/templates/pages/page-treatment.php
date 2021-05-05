<?php get_header(); ?>

<section class="projects-hero treatment-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 category-hero__wrapper">
                <div class="category-hero__title h2">
                    Обращения
                </div>
                <?php
                $information = get_field('information');
                if( !empty($information) ) : ?>
                    <div class="category-hero__description h5">
                        <?= $information['text'] ?>
                    </div>
                    <?php
                        $blocks_inf = get_field('blocks_of_informattion');
                        if( !empty($blocks_inf) ) :
                            foreach ($blocks_inf as $block) : ?>

                    <a href="#<?= $block['title']; ?>" class="main-btn category-hero__btn">
                        <?= $block['title']; ?>
                    </a>

                     <?php endforeach; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 category-hero__image">
                <img src="<?= $information['image'] ?>" alt="">
            </div>
        </div>
    </div>
</section>


<?php if( !empty($information) ) : ?>
        <div class="category-hero__description h5">
            <?= $information['text'] ?>
        </div>

    <?php
        $blocks_inf = get_field('blocks_of_informattion');
        if( !empty($blocks_inf) ) :
            foreach ($blocks_inf as $block) : ?>

            <section class="accordion" id="<?= $block['title']; ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="accordion-title h4">
                                <?= $block['title']; ?>
                            </div>
                        </div>
                        <?php foreach ($block['punkts'] as $row) : ?>
                            <div class="col-lg-12 accordion-item ">
                                <div class="accordion-item__title h5">
                                    <?= $row['title']; ?>
                                </div>
                                <div class="accordion-item__content">
                                    <p>
                                        <?= $row['subject']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>