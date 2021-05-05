<?php get_header(); ?>

<?php
$employee = get_field('employee');
if( !empty($employee) ) : ?>
<section class="jumbotron">
    <div class="jumbotron-bg">
        <div class="jumbotron-bg__animation">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/animation/red-animation.gif" alt="">
        </div>
        <div class="jumbotron-bg__image">
            <img src="<?= $employee['image']; ?>" alt="">
        </div>
        <div class="jumbotron-person">
            <div class="jumbotron-person__name">
                <?= preg_replace('/ /', '</br>',$employee['name']); ?>
            </div>
            <div class="jumbotron-person__role">
                <?= $employee['post']; ?>
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
    </div>
<?php endif; ?>

    <div class="jumbotron-nav">
        <?php
            wp_nav_menu( array(
                'theme_location'  => 'side-menu',
            ) );
        ?>
    </div>

<?php
    $subject = get_field('text');
    if( !empty($subject) ) : ?>
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="jumbotron-title h2">
                        Вакансии
                    </div>
                    <div class="jumbotron-description h5">
                        <?= $subject; ?>
                    </div>
                </div>

                <?php
                $all_vacancy = get_field('vacansy');
                if( !empty($all_vacancy) ) : ?>
                <div class="col-lg-8">
                    <div class="vacancy-list">
                        <ul>
                            <?php
                            $index = 0;
                            foreach ($all_vacancy as &$vacancy) : $index++; $vacancy['index'] = $index;?>
                            <li>
                                <a href="#<?=$vacancy['index']; ?>">
                                    <?=$vacancy['post']; ?>
                                </a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$all_vacancy = get_field('vacansy');
if( !empty($all_vacancy) ) :
        $index = 0;
        foreach ($all_vacancy as $vacancy) : $index++;?>
            <section class="vacancy">
                <div class="container">
                    <div class="row vacancy-row" id="<?= $index; ?>">
                        <div class="vacancy-row__title col-lg-4">
                            <?= $vacancy['post']; ?>
                        </div>
                        <?php
                        $charges = $vacancy['charges'];
                        if( !empty($charges) ) : ?>
                            <div class="vacancy-row__info">
                                <div class="vacancy-row__info--name col-lg-4">
                                    Обязанности
                                </div>
                                <div class="vacancy-row__info--info col-lg-8">
                                    <ul>
                                        <?php foreach ($charges as $charge) : ?>
                                        <li>
                                            <?= $charge['charge']; ?>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php
                        $requirements = $vacancy['requirements'];
                        if( !empty($requirements) ) : ?>
                            <div class="vacancy-row__info">
                                <div class="vacancy-row__info--name col-lg-4">
                                    Требования
                                </div>
                                <div class="vacancy-row__info--info col-lg-8">
                                    <?= $requirements; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php
                        $conditions = $vacancy['conditions'];
                        if( !empty($conditions) ) : ?>
                        <div class="vacancy-row__info">
                            <div class="vacancy-row__info--name col-lg-4">
                                Условия
                            </div>
                            <div class="vacancy-row__info--info col-lg-8">
                                <?= $conditions; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>
<?php endif; ?>

<?php get_footer(); ?>