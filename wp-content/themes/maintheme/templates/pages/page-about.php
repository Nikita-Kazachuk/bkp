<?php
    $about = get_field('about');
    if( !empty($about) ) : ?>
    <section class="jumbotron">
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
                    <div class="jumbotron-title h1">
                        О компании
                    </div>
                    <div class="jumbotron-description">
                        <?= $about['subject']; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a data-fancybox href="<?php $video = get_field('video_about_company'); echo $video['url']; ?>">
                        <img src="<?= $about['image'] ?>" alt="">
                    </a>
                </div>
                <div class="col-lg-12">
                    <div class="jumbotron-values">
                        <?php foreach ($about['statistics'] as $statistic) : ?>
                        <div class="jumbotron-values__item">
                                <span>
                                    <?= $statistic['value']; ?>
                                </span>
                            <?= preg_replace('/ /', '</br>',$statistic['subject']); ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
    $group_history = get_field('history');
    if( !empty($group_history) ) : ?>
    <section class="history">
        <div class="section-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="history-title col-lg-4 offset-md-4">
                        История
                        <span></span>
                    </div>
                    <div class="history-wrapper col-lg-12">
                        <?php foreach ($group_history as $history) : ?>
                            <div class="history-item" data-year="<?= $history['year'] ?>">
                                <?= $history['subject'] ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php endif; ?>

<?php
    $administration = get_field('administration');
    if( !empty($administration) ) : ?>
    <section class="management" style="background-image: url(<?= $administration['image']; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="management-title">
                        Руководство компании
                    </div>
                    <div class="management-description">
                        <?= $administration['subject']; ?>
                    </div>
                    <a href="management.html" class="main-btn">
                        Подробнее о руководстве
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="management-info">
                        <div class="management-name">
                            <?= preg_replace('/ /', '</br>',$administration['name']); ?>
                        </div>
                        <div class="management-role">
                            <?= $administration['post'] ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
$awards = get_field('awards');
if( !empty($awards) ) : ?>
    <section class="sertificates">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    Аттестаты и
                    сертификаты
                </div>
                <div class="col-lg-9">
                    <?= $awards['subject']; ?>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sertificates-wrapper">
                        <?php foreach ($awards['documents'] as $document) : ?>
                            <a data-fancybox href="<?= $document; ?>" class="sertificates-item">
                                <img src="<?= $document; ?>" alt="">
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
$partners = get_field('partners');
if( isset($partners) ) : ?>
<section class="about partners">
    <div class="about-bg">
        <img src="<?= $partners['background']; ?>" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 about-title h4">
                Партнеры
            </div>
            <div class="col-lg-4">
                <div class="about-description">
                    <?= $partners['subject']; ?>
                </div>
                <a href="about.html" class="about-link main-btn">
                    Контакты компании
                </a>
            </div>
            <div class="col-lg-8">
                <div class="about-partners">
                    <ul>
                        <?php foreach ($partners['partners'] as $partner) : ?>
                        <li>
                            <a href="<?= $partner['link']; ?>">
                                <img src="<?= $partner['logo']; ?>" alt="">
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>