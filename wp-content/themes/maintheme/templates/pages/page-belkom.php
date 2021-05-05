<section class="jumbotron">
    <div class="jumbotron-bg">
        <div class="jumbotron-bg__animation">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/animation/red-animation.gif" alt="">
        </div>
            <?php
            $employee = get_field('employee');
            if( !empty($employee) ) : ?>
                <div class="jumbotron-bg__image">
                    <img src="<?= $employee['image']; ?>" alt="">
                </div>
                <div class="jumbotron-person">
                    <div class="jumbotron-person__name">
                        <?= preg_replace('/ /', '</br>',$employee['name']); ?>
                    </div>
                    <div class="jumbotron-person__role">
                        <?= $employee['post'] ?>
                    </div>
                    <div class="jumbotron-person__email">
                        <a href="mailto:<?= $employee['email']; ?>"><?= $employee['email']; ?></a>
                    </div>
                    <div class="jumbotron-person__phone">
                        <a href="tel:<?= $employee['phone']; ?>">
                            <?= $employee['phone']; ?>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
    </div>
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
                <div class="col-lg-6">
                    <div class="jumbotron-title h2">
                        УП «Белкомтехинвест»
                    </div>
                    <?php
                        $information = get_field('information');
                        if( !empty($information) ) : ?>
                            <div class="jumbotron-description h5">
                               <?= $information['text']; ?>
                            </div>
                            <div class="jumbotron-address">
                                <?= $information['address']; ?>
                            </div>
                            <a href="<?= $information['document']; ?>" class="main-btn jumbotron-btn">
                                Скачать реквизиты
                            </a>
                     <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="belcom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 belcom-content">

                <?php
                    $comment = get_field('comment');
                    if( !empty($comment) ) { ?>
                        <i><?= $comment; ?></i>
                 <?php }; ?>

                <?php
                    $blocks_inf = get_field('block_inf');
                    foreach ($blocks_inf as $block) :
                        if( !empty($block['button']) ) : ?>
                            <div class="h4">
                                <?= $block['title']; ?>
                            </div>
                            <div class="belcom-content__row">
                                <p>
                                    <?= $block['subject']; ?>
                                </p>
                                <a href="<?= $block['document']; ?>" class="main-btn">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/img/layout/pdf.png" alt="">
                                    Читать отчет
                                </a>
                        </div>
                    <?php else: ?>
                         <div class="h4">
                             <?= $block['title']; ?>
                         </div>
                         <p>
                             <?= $block['subject']; ?>
                         </p>
                    <?php endif;?>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>