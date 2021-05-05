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
        <?php endif; ?>
    </div>
    <div class="jumbotron-nav">
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'side-menu',
        ) );
        ?>
    </div>

    <?php
    $prof = get_field('first_title');
    if( !empty($prof) ) : ?>
        <div class="section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="jumbotron-title h2">
                            <?= $prof['title']; ?>
                        </div>
                        <div class="jumbotron-description h5">
                            <?= $prof['subject']; ?>
                        </div>
                        <a href="<?= $prof['document']; ?>" class="main-btn jumbotron-btn">
                            Скачать реквизиты
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php
$posts = get_field('blocks_inf');
if( !empty($posts) ) : ?>
    <section class="belcom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 belcom-content">
                    <?php foreach ($posts as $post) : ?>
                    <div class="h4">
                        <?= $post['title']; ?>
                    </div>
                    <p>
                        <?= $post['text']; ?>
                    </p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>